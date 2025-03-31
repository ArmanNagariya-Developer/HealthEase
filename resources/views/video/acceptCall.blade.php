@extends('layout.layout')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Accept Video Call from Patient: {{ $appointment->user->name }}</h2>

    <div class="text-center mt-4">
        <button class="btn btn-success" id="acceptCall">Accept Call</button>
    </div>

    <div id="videoContainer" class="mt-4" style="display:none; position: relative; height: 600px;">
        <!-- Doctor's Video Feed -->
        <video id="localVideo" autoplay muted playsinline style="position: absolute; top: 10px; left: 10px; width: 30%; max-width: 200px; border: 2px solid #fff; border-radius: 10px;"></video>

        <!-- Patient's Video Feed -->
        <video id="remoteVideo" autoplay playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;"></video>

        <!-- Optional overlay for additional UI elements (like call control buttons) -->
        <div id="overlay" style="position: absolute; bottom: 20px; right: 20px; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px; border-radius: 5px;">
            <button id="endCall" class="btn btn-danger">End Call</button>
        </div>
    </div>
</div>
<script src="https://cdn.socket.io/4.3.2/socket.io.min.js"></script> <!-- Add this line -->
<script type="text/javascript">
    // Initialize the socket connection
    const socket = io('http://127.0.0.1:8000'); // Replace with your signaling server URL

    // Connect to the signaling server
    socket.on('connect', () => {
        console.log('Connected to signaling server');
    });

    let localStream;
    let peerConnection;
    let remoteStream = new MediaStream();

    const configuration = {
        iceServers: [
            {
                urls: "stun:stun.l.google.com:19302" // Public STUN server
            }
        ]
    };

    document.getElementById('acceptCall').addEventListener('click', async () => {
        document.getElementById('videoContainer').style.display = 'block';
        startVideoCall();
    });

    async function startVideoCall() {
        try {
            // Get access to user's camera and microphone
            localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
            document.getElementById('localVideo').srcObject = localStream;

            // Initialize Peer Connection
            peerConnection = new RTCPeerConnection(configuration);

            // Add local tracks to peer connection
            localStream.getTracks().forEach(track => {
                peerConnection.addTrack(track, localStream);
            });

            // Set remote video to blank stream
            document.getElementById('remoteVideo').srcObject = remoteStream;

            // Listen for incoming tracks and attach them to remote video
            peerConnection.ontrack = (event) => {
                event.streams[0].getTracks().forEach(track => {
                    remoteStream.addTrack(track);
                });
            };

            // Listen for ICE candidates
            peerConnection.onicecandidate = (event) => {
                if (event.candidate) {
                    console.log('ICE candidate generated:', event.candidate);
                    // Send ICE candidate to patient via signaling server
                    socket.emit('candidate', { candidate: event.candidate });
                }
            };

            // Connection state change event
            peerConnection.onconnectionstatechange = (event) => {
                console.log('Connection state changed:', peerConnection.connectionState);
                if (peerConnection.connectionState === 'disconnected') {
                    alert('Call disconnected!');
                    window.location.href = "{{ route('admin.dashboard') }}";
                }
            };

            // Create and send offer
            const offer = await peerConnection.createOffer();
            await peerConnection.setLocalDescription(offer);

            console.log('Offer created, sending to patient...');
            // Send the offer to the patient via signaling server
            socket.emit('offer', { offer: offer });

        } catch (error) {
            console.error('Error starting call:', error);
            alert('Failed to start the call. Please try again.');
        }
    }

    // Optional: End Call functionality
    document.getElementById('endCall').addEventListener('click', () => {
        if (peerConnection) {
            peerConnection.close();
            localStream.getTracks().forEach(track => track.stop()); // Stop all local tracks
        }
        alert("Call ended");
        window.location.href = "{{ route('admin.dashboard') }}";
    });
</script>

@endsection
