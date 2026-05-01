<?php include 'config/db.php'?><!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #ffffff;
    }

    /* Navbar */
    .navbar {
        background: linear-gradient(90deg, #007bff, #6610f2);
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        color: white;
        font-size: 20px;
        font-weight: bold;
    }

    .menu {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0;
        padding: 0;
    }

    .menu li {
        display: inline;
    }

    .menu a {
        text-decoration: none;
        color: white;
        font-size: 16px;
        padding: 8px 15px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .menu a:hover {
        background: rgba(255,255,255,0.2);
    }

    .active {
        background: white;
        color: #333 ;
    }

    /* Content */
    .content {
        padding: 40px;
        text-align: center;
    }

    .card {
        display: inline-block;
        width: 200px;
        margin: 15px;
        padding: 20px;
        border-radius: 10px;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card h3 {
        margin: 10px 0;
    }
</style>

</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">School Admin</div>
    <ul class="menu">
        <li><a href="students/index.php">Students</a></li>
        <li><a href="teachers/index.php">Teachers</a></li>
        <li><a href="classes/index.php">Classes</a></li>
    </ul>
</div>

<!-- Content -->
<div class="content">
    <div class="card">
        <h3>Students</h3>
        <p>Talabalar ro'yxati</p>
    </div>

    <div class="card">
        <h3>Teachers</h3>
        <p>O'qituvchilar ro'yxati</p>
    </div>

    <div class="card">
        <h3>Classes</h3>
        <p>Sinf ma'lumotlari</p>
    </div>
</div>

</body>
</html>