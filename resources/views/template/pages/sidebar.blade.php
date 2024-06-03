<nav class="sidebar-nav scroll-sidebar" style="background-color:#434343">
    <ul id="sidebarnav">
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <h3 style="margin-left: 10%; color: #6B99C3">Main Menu</h3>
      </li>
    <li class="sidebar-item">
        @if (Auth::user()->role_id==1)
            <a class="sidebar-link" href="{{ url('/admin/dashboard')}}" aria-expanded="false" style="margin: 10%">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
            @elseif (Auth::user()->role_id==2)
                    <a class="sidebar-link" href="{{ url('/konselor/dashboard')}}" aria-expanded="false" style="background-color: transparent; margin: 10%">
                    <span>
                        <i class="ti ti-layout-dashboard"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                    </a>
            @elseif (Auth::user()->role_id==3)
                    <a class="sidebar-link" href="{{ url('/konseli/dashboard')}}" aria-expanded="false" style="background-color: transparent; margin: 10%">
                    <span>
                        <i class="ti ti-layout-dashboard"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                    </a>
            @endif
            {{-- <a class="sidebar-link" href="{{ url('/profile')}}" aria-expanded="false" style="background-color: transparent">
                <span>
                <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Profile</span>
            </a> --}}
            <a class="sidebar-link" href="{{ url('/posts')}}" aria-expanded="false" style="background-color: transparent; margin: 10%">
                <span>
                <i class="ti ti-layout-list"></i>
                </span>
                <span class="hide-menu">Bimbingan</span>
            </a>
            <a class="sidebar-link" href="{{ url('/konseling/appointment_konselings/create')}}" aria-expanded="false" style="background-color: transparent; margin: 10%">
                <span>
                <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Konseling</span>
            </a>
            <a class="sidebar-link" href="{{ url('/konsultasi/appointment_konsultasis/create')}}" aria-expanded="false" style="background-color: transparent; margin: 10%">
                <span>
                <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Konsultasi</span>
            </a>
            <a class="sidebar-link" href="{{ url('/activity_logs')}}" aria-expanded="false" style="background-color: transparent; margin: 10%">
                <span>
                <i class="ti ti-history"></i>
                </span>
                <span class="hide-menu">Riwayat</span>
            </a>
    </li>
    </ul>

    <div class="unlimited-access hide-menu bg-light-primary position-relative mb-5 mt-2 rounded">
      <div class="d-flex">
        <div class="unlimited-access-title me-3">
          <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Let's Join Us</h6>
        </div>
        <div class="unlimited-access-img">
          <img src="{{url('/assets')}}/images/backgrounds/KONSELING ONLINE.png" alt="" class="img-fluid">
        </div>
      </div>
     <a href="">Pusat Bantuan?</a>
    </div>
</nav>
