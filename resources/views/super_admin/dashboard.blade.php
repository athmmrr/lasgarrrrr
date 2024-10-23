<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Ganti dengan path CSS Anda -->
</head>
<body>
<div class="sidebar-and-content">
        <div class="sidebar" id="sidebar">
            <!-- Sidebar for super admin -->
            <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard Super Admin</a>
            <div class="dropdown">
                <a href="#" id="formsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-folder-open"></i> Forms
                </a>
                <ul class="dropdown-menu" aria-labelledby="formsDropdown">
                    <li><a href="{{ route('agenda.create') }}"><i class="fas fa-calendar-alt"></i> Agenda</a></li>
                    <li><a href="{{ route('atensi.index') }}"><i class="fas fa-list"></i> Atensi</a></li>
                    <li><hr class="dropdown-divider"></li>
                </ul>
            </div>

            <div class="dropdown">
                            <a href="#" id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i> Akun
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                                <li><a href="{{ route('profile.show') }}"><i class="fas fa-user"></i> Profile</a></li>
                                <li><hr class="dropdown-divider"></li>

                <!-- Logout link available for all authenticated users -->
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </div>
        </div>

    <div class="container">
        <h1>Super Admin Dashboard</h1>
        <p>Selamat datang, Super Admin!</p>
        <!-- Tambahkan konten lain untuk dashboard super admin di sini -->
    </div>
</body>
</html>
