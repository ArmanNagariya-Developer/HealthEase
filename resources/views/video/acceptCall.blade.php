@extends('layout.layout')

@section('content')
<div class="container mt-5 text-center">
    <h2>Joining Video Call with Patient: {{ $appointment->user->name }}</h2>

    <div id="meet" style="width: 100%; height: 600px; margin-top: 30px;"></div>
</div>

<script src="https://meet.jit.si/external_api.js"></script>
<script>
    const domain = "meet.jit.si";
    const options = {
        roomName: "Appointment_{{ $appointment->id }}_{{ $doctor->id }}",
        width: "100%",
        height: 600,
        parentNode: document.querySelector('#meet'),
        userInfo: {
            email: "{{ $doctor->email }}",
            displayName: "Dr. {{ $doctor->doctorname }}"
        },
        configOverwrite: {
            prejoinPageEnabled: false,      // ✅ Skip "Join meeting" screen
            enableLobby: false,             // ✅ Disable lobby mode
            startWithAudioMuted: false,
            startWithVideoMuted: false,
            disableInviteFunctions: true
        },
        interfaceConfigOverwrite: {
            MOBILE_APP_PROMO: false
        }
    };

    const api = new JitsiMeetExternalAPI(domain, options);

    api.addEventListener('readyToClose', () => {
        alert("Call Ended! Redirecting...");
        window.location.href = "{{ route('admin.dashboard') }}";
    });
</script>
@endsection
