<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
          <li class="active"><a class="" href="{{route('dashboard')}}"><i class="fa fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
          @if (auth()->user()->level == "admin")
            <li class="menu-header">Admin</li>
          <li><a class="nav-link" href="{{route('crud-alumni')}}"><i class="fa fa-graduation-cap"></i> <span>Alumni</span></a></li>
          @endif
          @if (auth()->user()->level == "user")
            <li class="menu-header">User</li>
          <li><a class="nav-link" href="{{route('user')}}"><i class="fa fa-graduation-cap"></i> <span>Alumni</span></a></li>
          @endif
          @if (auth()->user()->level == "admin")
          <li class="menu-header">Lowongan</li>
          <li><a class="nav-link" href="/lowongan"><i class="fa fa-archive"></i><span>Lowongan</span></a></li>
          @endif
          @if (auth()->user()->level == "user")
          <li class="menu-header">Lowongan</li>
          <li><a class="nav-link" href="/dlowongan"><i class="fa fa-archive"></i><span>Lowongan</span></a></li>
          @endif
        </ul>
    </aside>
  </div>