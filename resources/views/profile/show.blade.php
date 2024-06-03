@extends('template.index')
@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>Profil {{ $user->name }}</h3>
                </div>
                <div class="card-body">
                        <div class="card">
                            <img src="{{ $user->profile_picture ? asset('assets/images/profile/' . $user->profile_picture) : asset('assets/images/profile/user-1.jpg') }}" alt="{{ $user->name }}" class="profile-picture">
                        </div>
                        <div class="card">
                            <p>Nama : {{ $user->name }}</p>
                        </div>
                        <div class="card">
                            <p>Email : {{ $user->email }}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="card">
    <div class="card-header">Profile</div>
    <div class="card-body text-center">
        <div class="form-group mb-4">
            <label for="profile_picture">Profile Picture</label>
            <div>
                <img src="{{ $user->profile_picture ? asset('assets/images/profile/' . $user->profile_picture) : asset('assets/images/profile/user-1.jpg') }}" alt="{{ $user->name }}" width="320px" height="320px" class="rounded-circle mb-3">
            </div>
        </div>
        <div class="form-group">
            <label for="name">Name : </label>
            <p>{{ $user->name }}</p>
        </div>
        <div class="form-group">
            <label for="email">Email : </label>
            <p>{{ $user->email }}</p>
        </div>
        <div class="form-group">
            <label for="role_id">Role ID : </label>
            <p>{{ $user->role_id }}</p>
        </div>
        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
    </div>
</div>

@endsection
