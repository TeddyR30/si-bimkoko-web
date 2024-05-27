@extends('template.index')
@section('content')
  <div class="container">
    <h2>Schedule an Appointment</h2>
    <form action="{{ route('appointment_konsultasis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="client_name">Client Name:</label>
            <input type="text" class="form-control" id="client_name" name="client_name" required>
        </div>
        <div class="form-group">
            <label for="counselor_name">Counselor Name:</label>
            <input type="text" class="form-control" id="counselor_name" name="counselor_name" required>
        </div>
        <div class="form-group">
            <label for="appointment_time">Appointment Time:</label>
            <input type="datetime-local" class="form-control" id="appointment_time" name="appointment_time" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
  @endsection
</div>
</div>
