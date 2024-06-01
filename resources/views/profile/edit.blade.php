@extends('template.index')
@section('content')
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
    </div>

    <div class="form-group">
        <label for="role_id">Role ID</label>
        <input type="number" name="role_id" id="role_id" class="form-control" value="{{ $user->role_id }}" required>
    </div>

    <div class="form-group">
        <label for="profile_picture">Profile Picture</label>
        <input type="file" name="profile_picture" id="profile_picture" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
@endsection
