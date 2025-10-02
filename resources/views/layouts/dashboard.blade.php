<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            background: #5a4fcf;
            color: white;
            position: fixed;
            top: 0;
            left: -250px;
            transition: 0.3s;
            padding: 20px;
        }
        .sidebar.active { left: 0; }
        .sidebar a { display: block; color: #000000ff; padding: 10px; text-decoration: none; }
        .sidebar a:hover { background: #7b6df0; color: #fff; }

        .main-content {
            flex: 1;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: margin-left 0.3s;
        }
        .content-wrapper {
            flex: 1; /* biar dorong footer ke bawah */
            padding: 20px;
        }
    </style>
</head>
<body>
    {{-- Sidebar --}}
    <div class="sidebar" id="sidebar">
        <h4>Menu</h4>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('profile') }}">Profile</a>
        <a href="{{ route('user.create') }}">Create User</a>
        <a href="{{ route('user.index') }}">List User</a>
        <a href="#">Pengaturan</a>
        <a href="#">Logout</a>
    </div>

    <div class="main-content" id="main-content">
        {{-- Navbar --}}
        <nav class="navbar navbar-light bg-light border-bottom px-3">
            <button class="btn btn-outline-secondary" id="toggleSidebar">☰</button>
            <span class="ms-auto fw-bold">Hi, Resepsionis</span>
        </nav>

        {{-- Konten Utama --}}
        <div class="content-wrapper">
            @yield('content')
        </div>

        {{-- Footer --}}
            @include('components.footer')

    </div>

<script>
    const btn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const main = document.getElementById('main-content');

    btn.addEventListener('click', () => {
        sidebar.classList.toggle('active');
        if(sidebar.classList.contains('active')){
            main.style.marginLeft = '250px';
        } else {
            main.style.marginLeft = '0';
        }
    });
</script>
</body>
</html>
