<!DOCTYPE html>
<html lang="en">

<head>
  <title>Đăng Nhập Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- Font-icon css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <style>
    body {
      background-color: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    .login-container h2 {
      margin-bottom: 20px;
      text-align: center;
      color: #333;
    }

    .login-container .form-group {
      margin-bottom: 15px;
    }

    .login-container .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
    }

    .login-container .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .login-container .btn-primary {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .login-container .btn-primary:hover {
      background-color: #0056b3;
    }

    .login-container .form-group .error {
      color: red;
      font-size: 0.875rem;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>Đăng Nhập Admin</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Tên đăng nhập</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn-primary">Đăng Nhập</button>
    </form>
    <div class="form-group">
      <p class="error">
        <?php
        // Hiển thị lỗi nếu có
        if (isset($_GET['error'])) {
          echo htmlspecialchars($_GET['error']);
        }
        ?>
      </p>
    </div>
  </div>
</body>

</html>
        