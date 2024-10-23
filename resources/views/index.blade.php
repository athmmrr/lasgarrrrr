<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
        }

        /* Top bar styling */
        .top-bar {
            background-color: #ffffff;
            padding: 10px 20px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .top-bar img.logo {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        /* Search bar styling */
        .search-bar {
            position: relative;
            width: 30%;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 40px 10px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-bar .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #6c757d;
        }

        /* Sidebar styling */
        .sidebar-and-content {
            display: flex;
            margin-top: 60px;
        }

        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            position: fixed;
            top: 60px;
            left: -250px;
            height: calc(100vh - 60px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            transition: left 0.3s ease;
        }

        .sidebar.show {
            left: 0;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: background-color 0.2s ease;
        }

        .sidebar a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        /* Main content area */
        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #ffffff;
            border-left: 1px solid #dee2e6;
            transition: margin-left 0.3s ease;
        }

        /* Dashboard metrics */
        .dashboard-metrics {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        .metric-box {
            flex: 1;
            min-width: 150px;
            padding: 20px;
            border-radius: 8px;
            color: white;
            text-align: center;
            background-color: #343a40;
            transition: background-color 0.3s ease;
        }

        .metric-box h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .metric-box p {
            font-size: 18px;
        }

        .metric-box.bg-primary { background-color: #007bff; }
        .metric-box.bg-success { background-color: #28a745; }
        .metric-box.bg-warning { background-color: #ffc107; }
        .metric-box.bg-danger { background-color: #dc3545; }

        /* Table styling */
        .table-wrapper {
            margin-top: 30px;
        }

        .table thead {
            background-color: #343a40;
            color: white;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        /* Sidebar toggle icon */
        .menu-icon {
            font-size: 30px;
            cursor: pointer;
            margin-left: 0;
            margin-right: 10px;
            color: #007bff;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                width: 100%;
            }
            .sidebar {
                position: fixed;
                width: 100%;
                height: 100%;
                left: -100%;
                top: 0;
            }
            .sidebar.show {
                left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Top bar -->
    <header class="top-bar">
        <div class="d-flex align-items-center">
            <i class="fas fa-bars menu-icon" onclick="toggleSidebar()"></i>
            <img src="{{ asset('img/lapas.png') }}" alt="Logo" class="logo">
            <span class="title">JurnalLasgar</span>
        </div>
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search">
            <i class="fas fa-search search-icon"></i>
        </div>
    </header>

    <div class="sidebar-and-content">
        <!-- Sidebar -->
        

        <!-- Main content -->

            @yield('konten')
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
