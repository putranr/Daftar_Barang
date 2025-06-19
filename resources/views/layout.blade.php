<!DOCTYPE html>
<html>
<head>
    <title>Daftar Belanja Sepatu</title>
</head>
<body>
    <h1>Aplikasi Daftar Belanja</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @yield('content')
</body>
</html>
