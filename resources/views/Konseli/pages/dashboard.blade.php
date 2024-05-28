@extends('template.index')
@section('content')

<style>

.chalkboard {
    background-color: #C3D7E2;
    border: 5px solid #C3D7E2;
    width: 100%;
    max-width: 1200px;
    padding: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
}

.card-menu {
    display: flex;
    justify-content: space-around;
}

.cards {
    background-color: #C3D7E2;
    border: 2px solid #C3D7E2;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    width: 30%;
    transition: transform 0.3s;

}

.card img {
    width: 100%;
    border-radius: 10px;
}

.card h3 {
    margin: 15px 0 10px;
}

.card p {
    margin: 0;
}

.cards:hover {
    transform: scale(1.05);
}

</style>

<h4 class="mb-6">Selamat Datang, {{ Auth::user()->name }}</h4>
<h1 style="text-align: center; background-color: silver; border-radius: 10px">{{ Auth::user()->name }} Dashboard</h1>
<div>
<h3>Data</h3>
    <div class="row mt-6">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card" style="background-color:steelblue">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <div class="col-6"><i class="ti ti-layout-list"></i></div>
                      <p class="text-sm mb-0 text-capitalize font-weight-bold"><h2 style="color:whitesmoke">Bimbingan</h2></p>
                      <h5 class="font-weight-bolder mb-0" style="color: yellow">
                        {{$user_count}}
                      </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card" style="background-color: #6B99C3">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                        <div class="col-6"><i class="ti ti-layout-list"></i></div>
                      <p class="text-sm mb-0 text-capitalize font-weight-bold"><h2 style="color:whitesmoke">Konseling</h2></p>
                      <h5 class="font-weight-bolder mb-0" style="color: yellow">
                        {{1}}
                      </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card" style="background-color: #252f40">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                        <div class="col-6"><i class="ti ti-layout-list"></i></div>
                      <p class="text-sm mb-0 text-capitalize font-weight-bold"><h2 style="color:whitesmoke">Konsultasi</h2></p>
                      <h5 class="font-weight-bolder mb-0" style="color: yellow">
                        {{-- {{$peminjaman_count}} --}}
                        0
                      </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <h4 style="text-align: center; margin: 20px">Alur Penggunaan Fitur</h4>
    <div class="chalkboard">
        <div class="card-menu">
            <div class="cards">
                <img src="{{url('/assets')}}/images/backgrounds/checklist.png" width="140" style="margin-top: 30px" alt="Image 1">
                <h3>1. Pilih Fitur</h3>
                <p>Pilih fitur yang KONSELING atau KONSULTASI sesuai kebutuhan kamu</p>
            </div>
            <div class="cards">
                <img src="{{url('/assets')}}/images/backgrounds/tablet with stickers.png" width="140" style="margin-top: 30px" alt="Image 2">
                <h3>2. Jadwalkan Sesi</h3>
                <p>Buat jadwal untuk KONSELING atau KONSULTASI sesuai kebutuhan kamu</p>
            </div>
            <div class="cards">
                <img src="{{url('/assets')}}/images/backgrounds/Online meeting on a tablet.png" width="140" style="margin-top: 30px" alt="Image 3">
                <h3>3. Mulai Sesi</h3>
                <p>Mulai sesimu pada layanan Chat Room atau Live Room</p>
            </div>
        </div>
    </div>
    <h4 style="text-align: center; margin: 40px">Daftar Konselor</h4>
    <div class="chalkboard">
        <div class="card-menu">
            <div class="cards">
                <img src="{{url('/assets')}}/images/profile/male avatar-1.png" width="140" style="margin-top: 30px" alt="Image 1">
                <h3>Konselor 1</h3>
                <p>{{ Auth::user()->name }}</p>
            </div>
            <div class="cards">
                <img src="{{url('/assets')}}/images/profile/female avatar.png" width="140" style="margin-top: 30px" alt="Image 2">
                <h3>Konselor 2</h3>
                <p>{{ Auth::user()->name }}</p>
            </div>
            <div class="cards">
                <img src="{{url('/assets')}}/images/profile/female avatar.png" width="140" style="margin-top: 30px" alt="Image 3">
                <h3>Konselor 3</h3>
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
