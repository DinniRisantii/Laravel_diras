<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<<<<<<< HEAD
<<<<<<< HEAD
      <a class="navbar-brand mr-1" href="{{route('admin.home')}}}">
      <img src="{{url('images/logo.png')}}">
=======
      <a class="navbar-brand mr-1" href="{{route('admin.home')}}">
        <img src="{{url('images/logo.png')}}">
>>>>>>> Episode-9
=======
      <a class="navbar-brand mr-1" href="{{route('admin.home')}}">
        <img src="{{url('images/logo.png')}}">
>>>>>>> Episode-9
      Tokap Admin</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
     <div class="ml-auto"></div>

      <!-- Navbar -->
<<<<<<< HEAD
<<<<<<< HEAD
      <ul class="navbar-nav ml-auto ml-md-0">
        
       
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="fa lse">
=======
      <ul class="navbar-nav ml-auto ml-md-0">     
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
>>>>>>> Episode-9
=======
      <ul class="navbar-nav ml-auto ml-md-0">     
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
>>>>>>> Episode-9
            <i class="fas fa-user-circle fa-fw"></i>
            {{Auth::user()->name}}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
<<<<<<< HEAD
<<<<<<< HEAD
            <a class="dropdown-item" href="{{route('admin.user.setting')}}">Settings</a>
=======
            <a class="dropdown-item" href="{{ route('admin.user.setting') }}">Settings</a>
>>>>>>> Episode-9
=======
            <a class="dropdown-item" href="{{ route('admin.user.setting') }}">Settings</a>
>>>>>>> Episode-9
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

@push('modal')
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> Episode-9
=======
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> Episode-9
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<<<<<<< HEAD
<<<<<<< HEAD
            <a class="btn btn-primary" href="href="{{ route('logout') }}"
              onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Logout</a>
          
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>

=======
=======
>>>>>>> Episode-9
            <a class="btn btn-primary" href="{{ route('logout') }}"
              onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
              </form>
<<<<<<< HEAD
>>>>>>> Episode-9
=======
>>>>>>> Episode-9
          </div>
        </div>
      </div>
    </div>
@endpush