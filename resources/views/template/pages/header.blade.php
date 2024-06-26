<header class="app-header" style="background-color: #C3D7E2">
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
          <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>

        {{-- <li class="nav-item">
          <a class="nav-link nav-icon-hover" href="javascript:void(0)">
            <i class="ti ti-bell-ringing"></i>
            <div class="notification bg-primary rounded-circle"></div>
          </a>
          <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="{{ url('/Chat') }}">
                <i class="ti ti-message"></i>
                <div class="notification bg-primary rounded-circle"></div>
            </a>
        </li>
    </li> --}}
      </ul>
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <h4>{{ Auth::user()->name }}</h4>
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="{{ url('/profile') }}" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ Auth::user()->profile_picture ? asset('assets/images/profile/' . Auth::user()->profile_picture) : asset('assets/images/profile/user-1.jpg') }}" alt="{{ Auth::user()->name }}" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                    <div class="message-body">
                        <a href="{{ url('/profile') }}" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-user fs-6"></i>
                            <p class="mb-0 fs-3">My Profile</p>
                        </a>
                        <a href="{{ url('/Chat') }}" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-mail fs-6"></i>
                            <p class="mb-0 fs-3">My Messages</p>
                        </a>
                        <a href="{{ url('/activity_logs')}}" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-list-check fs-6"></i>
                            <p class="mb-0 fs-3">My Logs</p>
                        </a>
                        <a href="{{ url('/logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    </nav>
    <style>
        .sidebar-link:hover{
            background: radial-gradient(#3DA3C3 0%, rgba(47, 136, 255, 0.12) 90%, rgba(47, 136, 255, 0.12) 100%);
            border-radius: 5px;
            width: 80%;
        }
      </style>
  </header>
