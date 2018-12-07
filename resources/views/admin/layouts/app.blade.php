@include('admin.layouts.header')
<style>
    @media only screen and (max-width: 995px) {
        .navbar-brand img {
            display: none;
        }
    }
</style>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <button class="navbar-toggler sidebar-toggler d-md-down-none " type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav ml-auto">
        @guest
            Login
        @else


            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="icon-user-following"></i> {{Auth::user()->name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-lock"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>

</header>
<div class="app-body">
    @include('admin.layouts.sidebar')
    <style>
        .main .container-fluid {
            padding: 0 5px !important;
        }
    </style>
    <main class="main">
        <!-- Breadcrumb-->
    {{--  <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
              <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
              <div class="btn-group" role="group" aria-label="Button group">
                  <a class="btn" href="#">
                      <i class="icon-speech"></i>
                  </a>
                  <a class="btn" href="./">
                      <i class="icon-graph"></i>  Dashboard</a>
                  <a class="btn" href="#">
                      <i class="icon-settings"></i>  Settings</a>
              </div>
          </li>
      </ol>--}}
    <!--/.row-->


        @include('admin.layouts.notification')
        @yield('content')
    </main>
</div>
@include('admin.layouts.footer')