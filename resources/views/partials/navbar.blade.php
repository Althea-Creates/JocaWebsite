<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
      <!-- Sidebar Toggle -->
      <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
              <i class="fas fa-bars"></i>
          </a>
      </li>
      <!-- Home Link -->
      <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
      </li>
      <!-- Form Link -->
      <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Form</a>
      </li>
      <!-- Contact Link -->
      <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
      </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <!-- Search -->
      <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
              <form class="form-inline">
                  <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                          <button class="btn btn-navbar" type="submit">
                              <i class="fas fa-search"></i>
                          </button>
                          <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                              <i class="fas fa-times"></i>
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </li>
      
      <!-- Messages Dropdown -->
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <!-- Messages -->
              <a href="#" class="dropdown-item">
                  <div class="media">
                      <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                      <div class="media-body">
                          <h3 class="dropdown-item-title">
                              Brad Diesel
                              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">Call me whenever you can...</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                  </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <div class="media">
                      <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                      <div class="media-body">
                          <h3 class="dropdown-item-title">
                              John Pierce
                              <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">I got your message bro</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                  </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <div class="media">
                      <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                      <div class="media-body">
                          <h3 class="dropdown-item-title">
                              Nora Silvester
                              <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">The subject goes here</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                  </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
      </li>

      <!-- Notifications Dropdown -->
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 4 new messages
                  <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 8 friend requests
                  <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <i class="fas fa-file mr-2"></i> 3 new reports
                  <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
      </li>

      <!-- Fullscreen -->
      <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
          </a>
      </li>

      <!-- Control Sidebar -->
      <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
          </a>
      </li>

      <!-- Profile Dropdown -->
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fas fa-user"></i>
              <span class="d-none d-md-inline">Profile</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <!-- Profile Link -->
              {{-- <a href="{{ route('profile.show') }}" class="dropdown-item"> --}}
                  <i class="fas fa-user-circle mr-2"></i> View Profile
              {{-- </a> --}}
              <!-- Settings Link -->
              {{-- <a href="{{ route('settings') }}" class="dropdown-item"> --}}
                  <i class="fas fa-cogs mr-2"></i> Settings
              {{-- </a> --}}
              <!-- Logout Link -->
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt mr-2"></i> Logout
              </a>
              <!-- Logout Form -->
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </li>
  </ul>
</nav>
