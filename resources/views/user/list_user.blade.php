<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - Unicorn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f7f7fb;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }
    main { flex: 1; }
    .sidebar {
      position: fixed;
      left: -250px;
      top: 0;
      width: 250px;
      height: 100%;
      background: #5a4fcf;
      padding: 20px;
      transition: .3s;
      color: white;
      z-index: 1000;
    }
    .sidebar.active { left: 0; }
    .sidebar a {
      display: block;
      padding: 10px;
      margin: 8px 0;
      color: #ddd;
      text-decoration: none;
      border-radius: 6px;
    }
    .sidebar a:hover { background: #7b6df0; color: white; }
    .content { transition: margin-left .3s; padding: 20px; }
    .content.shift { margin-left: 250px; }
    .navbar { background: white; padding: 10px 20px; border-bottom: 1px solid #eee; }
    .navbar .menu-btn { cursor: pointer; font-size: 24px; margin-right: 15px; }
  </style>
</head>
<body>

{{-- Sidebar --}}
<div class="sidebar" id="sidebar">
  <h4 class="mb-4">Menu</h4>
  <a href="{{ route('home') }}">Home</a>
  <a href="{{ route('profile') }}">Profile</a>
  <a href="{{ route('user.create') }}">Create User</a>
  <a href="{{ route('user.index') }}">List User</a>
  <a href="#">Pengaturan</a>
  <a href="#">Logout</a>
</div>

{{-- Navbar --}}
<nav class="navbar d-flex justify-content-between align-items-center">
  <div>
    <span class="menu-btn" onclick="toggleSidebar()">☰</span>
    <span class="fw-bold">Unicorn</span>
  </div>
  <div>
    <a href="{{ route('profile') }}" class="nav-link">Profile</a>
  </div>
</nav>

{{-- Main Content --}}
<main class="content" id="content">
  @yield('content')
</main>

@include('components.footer')

<script>
  function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle("active");
    document.getElementById("content").classList.toggle("shift");
  }
</script>

</body>
</html>
