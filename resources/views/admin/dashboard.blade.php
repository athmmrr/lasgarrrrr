<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .dashboard-card {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .dashboard-metrics {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }
        .metric-box {
            flex: 1;
            padding: 20px;
            border-radius: 8px;
            color: white;
            text-align: center;
        }
        .metric-box h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        .metric-box p {
            font-size: 18px;
        }
        .table-wrapper {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="dashboard-metrics">
            <div class="metric-box bg-primary">
                <h2>37</h2>
                <p>Total Produk</p>
            </div>
            <div class="metric-box bg-success">
                <h2>3</h2>
                <p>Roles</p>
            </div>
            <div class="metric-box bg-warning">
                <h2>3</h2>
                <p>Total User</p>
            </div>
            <div class="metric-box bg-danger">
                <h2>65</h2>
                <p>Unique Visitors</p>
            </div>
        </div>

        <div class="table-wrapper">
            <h3>Produk</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Et eos.</td>
                        <td>Soluta quasi.</td>
                        <td>79,141</td>
                        <td>81,141</td>
                        <td>43</td>
                    </tr>
                    <tr>
                        <td>Reiciendis ratione.</td>
                        <td>Sint neque.</td>
                        <td>22,636</td>
                        <td>24,636</td>
                        <td>42</td>
                    </tr>
                    <tr>
                        <td>Consequatur quia et.</td>
                        <td>Rerum.</td>
                        <td>74,170</td>
                        <td>76,170</td>
                        <td>39</td>
                    </tr>
                    <tr>
                        <td>Amet laudantium iure.</td>
                        <td>Soluta quasi.</td>
                        <td>42,269</td>
                        <td>44,269</td>
                        <td>13</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-wrapper mt-5">
            <h3>Users</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Isengoding</td>
                        <td>admin@admin.com</td>
                        <td>Admin</td>
                        <td>Aktif</td>
                    </tr>
                    <tr>
                        <td>Tomiko Van</td>
                        <td>user1@example.com</td>
                        <td>Kasir</td>
                        <td>Aktif</td>
                    </tr>
                    <tr>
                        <td>Elder Titan</td>
                        <td>user2@example.com</td>
                        <td>Admin</td>
                        <td>Nonaktif</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
