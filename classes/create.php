<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Class qo'shish</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            background: linear-gradient(135deg, #ff416c, #0072ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: transparent;
            padding: 30px;
            width: 420px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            font-size: 14px;
            outline: none;
        }

        input, textarea {
            background: rgba(255,255,255,0.2);
            color: white;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(255,255,255,0.7);
        }

        textarea {
            resize: none;
            height: 80px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            background: rgba(255,255,255,0.3);
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: rgba(255,255,255,0.5);
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Class qo‘shish</h2>

    <form action="store.php" method="POST">
        
        <div class="form-group">
            <label>Class_name</label>
            <input type="text" name="class_name" placeholder="class_name" required>
        </div>

        <div class="form-group">
            <label>Teacher_id</label>
            <input type="text" name="teacher_id" placeholder="teacher_id" required>
        </div>

        <button type="submit" class="btn">Saqlash</button>
    </form>
</div>

</body>
</html>