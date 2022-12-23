<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <h5>Halo, {{ Auth::user()->name }}</h5>
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
          <a>Anda Login sebagai <button type="button" class="btn btn-info btn-sm"> {{ Auth::user()->role }} </button></a>
        </div>
        </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
</div>

    @if (Auth::check() && Auth::user()->role == 'admin')
    <h3 class="nav-header">Main</h3>
        <li class="nav-item">
            <a href="{{ url('welcome96') }}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <h3 class="nav-header">Without API</h3>
        <li class="nav-item">
            <a href="{{ url('dashboard96') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    User Management
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('agama96') }}" class="nav-link">
                <i class="nav-icon fas fa-pray"></i>
                <p>
                    CRUD Agama
                </p>
            </a>
        </li>
        <h3 class="nav-header">With API</h3>
        <li class="nav-item">
            <a href="{{ url('apiclient/dashboard96') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    User Management
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('apiclient/agama96') }}" class="nav-link">
                <i class="nav-icon fas fa-pray"></i>
                <p>
                    CRUD Agama
                </p>
            </a>
        </li>
        <h3 class="nav-header">Menu</h3>
        <li class="nav-item">
            <a href="{{ url('logout96') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    @else
        <h3 class="nav-header">Main</h3>
        <li class="nav-item">
            <a href="{{ url('welcome96') }}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <h3 class="nav-header">Without API</h3>
        <li class="nav-item">
            <a href="{{ url('profile96') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Edit Profile
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/changePassword96') }}" class="nav-link">
                <i class="nav-icon fas fa-key"></i>
                <p>
                    Ganti Password
                </p>
            </a>
        </li>

        <h3 class="nav-header">With API</h3>
        <li class="nav-item">
            <a href="{{ url('apiclient/profile96') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Edit Profile With API
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('apiclient/changePassword96') }}" class="nav-link">
                <i class="nav-icon fas fa-key"></i>
                <p>
                    Ganti Password With API
                </p>
            </a>
        </li>

        <h3 class="nav-header">Menu</h3>
        <li class="nav-item">
            <a href="{{ url('logout96') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    @endif
