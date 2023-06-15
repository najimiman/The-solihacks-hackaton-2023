<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index..blade.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     


      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('toutservice')}}">
          <i class="bi bi-list-task"></i>
          <span>TOUT SERVICE</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('servicemobile')}}">
          <i class="bi bi-phone"></i>
          <span>SERVICE MOBILE</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('servicefix')}}">
          <i class="bi bi-telephone"></i>
          <span>SERVICE FIXE</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('serviceinternet')}}">
          <i class="bi bi-globe"></i>
          <span>SERVICE INTERNET ADSL & MT DUO</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('servicefibreobtique')}}">
          <i class="bi bi-router"></i>
          <span>SERVICE INTERNET FIBRE OPTIQUE</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login..blade.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav --> --}}

    </ul>

  </aside><!-- End Sidebar-->