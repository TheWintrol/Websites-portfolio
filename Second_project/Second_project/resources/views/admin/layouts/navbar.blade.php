    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="xl-show mr-3 border border-light rounded p-2" data-toggle="modal" data-target="#leftmenu">
            <span class="navbar-toggler-icon "></span>
        </a>
        <a class="xl-show navbar-brand waves-effect" href="" target="_blank">
          <strong style="color:#363534;">AmpTune</strong>
        </a>
         <a class="lg-show mr-3 border border-light rounded" data-toggle="modal" data-target="#fluidModalRightAdminMenu">
            <span class="fas fa-user-alt p-3"></span>
        </a>
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#"><i class="fas fa-home"></i>
               <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <button class="nav-link waves-effect empty_button" data-toggle="modal" data-target="">
                <a href="{{ route('welcome') }}"><i class="fas fa-eye"></i></a>
              </button>
            </li>
          </ul>
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
             <li class="nav-item">
              <a data-bs-toggle="modal" data-bs-target="#userMenu" class="nav-link border border-light rounded waves-effect">
                <i class="fas fa-user-alt p-1"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
@include('admin.layouts.modals.user_menu')

    <!-- Navbar -->