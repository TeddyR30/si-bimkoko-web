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
            @foreach($appointmentKonsultasis as $appointmentKonsultasi)
                <tr>
                    <td>{{ $appointmentKonsultasi->id }}</td>
                    <td>{{ $appointmentKonsultasi->client_name }}</td>
                    <td>{{ $appointmentKonsultasi->counselor_name }}</td>
                    <td>{{ $appointmentKonsultasi->appointment_time }}</td>
                    <td>{{ $appointmentKonsultasi->notes }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
  @endsection
</div>
</div>
