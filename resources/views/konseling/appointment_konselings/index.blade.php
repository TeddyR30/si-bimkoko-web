@extends('template.index')
@section('content')
<div class="container">
    <h2>Appointments</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client Name</th>
                <th>Counselor Name</th>
                <th>Appointment Time</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointmentKonselings as $appointmentKonseling)
                <tr>
                    <td>{{ $appointmentKonseling->id }}</td>
                    <td>{{ $appointmentKonseling->client_name }}</td>
                    <td>{{ $appointmentKonseling->counselor_name }}</td>
                    <td>{{ $appointmentKonseling->appointment_time }}</td>
                    <td>{{ $appointmentKonseling->notes }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
  @endsection
</div>
</div>
