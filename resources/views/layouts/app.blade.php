<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            background-color: #ffe0edff; /* pink pastel halaman */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }
        .card {
            background: #b8e1f5ff;  /* biru pastel cerah */
            padding: 40px 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 280px;
        }
        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 25px;
            border: 3px solid #ccc;
        }
        .info {
            background: #fffbd4ff;   /* kuning pastel cerah */
            margin: 10px 0;
            padding: 12px;
            border-radius: 6px;
            font-size: 18px;
            font-weight: 600;
            color: #e04f7aff;        /* pink untuk teks */
        }
    </style>
</head>
<body>

    {{-- Navbar bisa ditambahkan di sini kalau perlu --}}
    @yield('content')

</body>
</html>
