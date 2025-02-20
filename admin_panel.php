<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #333;
            color: white;
            position: fixed;
            padding: 20px;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .button {
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li>Dashboard</li>
            <li>Bookings</li>
            <li>Users</li>
            <li>Packages</li>
            <li>Settings</li>
        </ul>
    </div>
    <div class="content">
        <h1>Welcome to Admin Dashboard</h1>
        <div class="card">
            <h2>Total Bookings: 50</h2>
            <button class="button">Manage Bookings</button>
        </div>
        <div class="card">
            <h2>Total Users: 100</h2>
            <button class="button">Manage Users</button>
        </div>
        <div class="card">
            <h2>Total Packages: 20</h2>
            <button class="button">Manage Packages</button>
        </div>
    </div>
</body>
</html>
