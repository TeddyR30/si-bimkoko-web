@extends('template.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>Profil {{ $user->name }}</h3>
                </div>
                <div class="card-body">
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
</div>
@endsection
