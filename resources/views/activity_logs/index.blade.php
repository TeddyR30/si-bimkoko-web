@extends('template.index')
@section('content')
<div class="container">
    <h1 class="text-center my-4">Activity Logs</h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Activity Type</th>
                    <th>Details</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activityLogs as $activityLog)
                    <tr>
                        <td>{{ $activityLog->user->name }}</td>
                        <td>{{ $activityLog->activity_type }}</td>
                        <td>{{ $activityLog->details }}</td>
                        <td>{{ $activityLog->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $activityLogs->links() }}
    </div>
</div>
@endsection
