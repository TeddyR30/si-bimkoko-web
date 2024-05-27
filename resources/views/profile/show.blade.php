@extends('template.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil Pengguna</div>

                <div class="card-body">
                    <p>Nama: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>

                    @if($user instanceof App\Models\Admin)
                        <!-- Tampilkan informasi tambahan untuk Admin -->
                        <p>Jabatan: Administrator</p>
                    @elseif($user instanceof App\Models\Konselor)
                        <!-- Tampilkan informasi tambahan untuk Konselor -->
                        <p>Spesialisasi: {{ $user->specialization }}</p>
                    @elseif($user instanceof App\Models\Konseli)
                        <!-- Tampilkan informasi tambahan untuk Konseli -->
                        <p>Usia: {{ $user->age }}</p>
                        <p>Alamat: {{ $user->address }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
