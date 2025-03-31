<!DOCTYPE html>
<html>
<head>
    <title>Video Call with Doctor</title>
    <script src="https://meet.jit.si/external_api.js"></script>
    <style>
        #meet {
            width: 100%;
            height: 600px;
        }
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Video Call with Dr. {{ $doctor->doctorname }}</h2>

    <div id="meet"></div>

    <script type="text/javascript">
        // Jitsi Meet domain and options
        const domain = "meet.jit.si";
        const options = {
            roomName: "Appointment_{{ $appointment->id }}_{{ $doctor->id }}",
            width: "100%",
            height: 600,
            parentNode: document.querySelector('#meet'),
            userInfo: {
                email: "{{ Auth::user()->email }}",
                displayName: "{{ Auth::user()->name }}"
            }
        };

        // Initialize Jitsi Meet API
        const api = new JitsiMeetExternalAPI(domain, options);
        socket.on('offer', async (data) => {
    const offer = data.offer;
    await peerConnection.setRemoteDescription(new RTCSessionDescription(offer));

    // Create and send an answer back to the doctor
    const answer = await peerConnection.createAnswer();
    await peerConnection.setLocalDescription(answer);

    socket.emit('answer', { answer, doctorId: offer.doctorId });
});
        // Handle event when user leaves the meeting
        api.addEventListener('readyToClose', () => {
            alert("Call Ended! Redirecting...");
            window.location.href = "{{ route('appointment.myAppointments') }}";
        });
    </script>
</body>
</html>
