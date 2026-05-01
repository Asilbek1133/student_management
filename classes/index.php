<?php
include "../config/db.php";
$sql = "SELECT * FROM classes";
$data=$conn->prepare($sql);
$data->execute();
$classes = $data-> fetchAll();
$cnt = 1; 
?>
<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Classes ro'yxati</title>
  <style>
    body {
      font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff416c, #0072ff);
      margin: 0;
      padding: 150px;
    }

    .container {
      max-width: 1100px;
      margin: auto;
      background: #f1eded;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .header h2 {
      margin: 0;
    }

    .btn {
      padding: 7px 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 13px;
      text-decoration: none;  
      display: inline-block;
    }

    .btn-add {
      background: #28a745;
      color: #fff;
    }

    .view {
      background: #17a2b8;
      color: #fff;
      padding: 7px;
      border-radius: 10px;
      text-decoration: none;
    }

    .edit {
      background: #ffc107;
      color: #ffffff;
            padding: 7px;
      border-radius: 10px;
      text-decoration: none;
    }
    .delete {
      background: #dc3545;
      color: #fff;
            padding: 7px;
      border-radius: 10px;
      text-decoration: none;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 14px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #e6e6e6;
    }

    th {
      background: #f1f1f1;
    }

    tr:hover {
      background: #f9f9f9;
    }

    .actions a {
      margin-right: 5px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="header">
    <h2>Classes ro'yxati</h2>
    <a href="create.php" class="btn btn-add">+ Class qo'shish</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Class_name</th>
        <th>teacher_id</th>>
        <th>Amallar</th>>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($classes as $class):?>
      <tr>
        <td><?= $class['id' ]?></td>
        <td><?= $class['class_name' ]?></td>
        <td><?= $class['teacher_id']?></td>
        <td class="actions">
          <a href="#" class="view">Ko'rish</a>
          <a href="edit.php?id=<?=$class['id']?>" class="edit">Tahrirlash</a>
          <a href="delete.php?id=<?=$class['id'] ?>" class="dalete"
          onclick="return confirm('O\'chirasizmi!')" >O'chirish</a>
        </td>
      </tr>

    <?php endforeach; ?>
  </table>
</div>

</body>
</html>