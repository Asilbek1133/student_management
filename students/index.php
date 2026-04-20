<?php
include "../config/db.php";
$sql = "SELECT * FROM students";
$data =$conn->prepare($sql);
$data->execute();
$students = $data-> fetchAll();
$cnt = 1; 
?>
<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Studentlar ro'yxati</title>
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

    .btn-view {
      background: #17a2b8;
      color: #fff;
    }

    .btn-edit {
      background: #ffc107;
      color: #000;
    }

    .btn-delete {
      background: #dc3545;
      color: #fff;
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
    <h2>Studentlar ro'yxati</h2>
    <a href="create.php" class="btn btn-add">+ Student qo'shish</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Ism</th>
        <th>Familiya</th>
        <th>Yosh</th>
        <th>Sinf</th>
        <th>Telefon</th>
        <th>Manzil</th>
        <th>Amallar</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $student):?>


      <tr>
        <td> <?= $cnt++ ?></td>
        <td><?= $student['first_name' ]?></td>
        <td><?= $student[ 'last_name']?></td>
        <td><?= $student[ 'age']?></td>
        <td><?= $student[ 'class_name']?></td>
        <td><?= $student[ 'phone']?></td>
        <td><?= $student[ 'address']?></td>
        <td class="actions">
          <a href="#" class="view">Ko'rish</a>
          <a href="edit.php?id=<?=$student['id']?>" class="edit">Tahrirlash</a>
          <a href="delete.php?id=<?=$student['id'] ?>" class="delete"
          onclick="return confirm('O\'chirasizmi!')" >O'chirish</a>
        </td>
      </tr>

    <?php endforeach; ?>
  </table>
</div>

</body>
</html>