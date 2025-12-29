<?php
session_start();
include "../config/db.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
        "SELECT * FROM admin WHERE username='$username' AND password='$password'"
    );

    if (mysqli_num_rows($query) == 1) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: url('bg.png') no-repeat;
      background-size: cover;
      background-position: center;
    }
    .wrapper{
      width: 420px;
      background: transparent;
      border: 2px solid rgba(255, 255, 255, .2);
      backdrop-filter: blur(9px);
      color: #fff;
      border-radius: 12px;
      padding: 30px 40px;
    }
    .wrapper h1{
      font-size: 36px;
      text-align: center;
    }
    .wrapper .input-box{
      position: relative;
      width: 100%;
      height: 50px;
      margin: 30px 0;
    }
    .input-box input{
      width: 100%;
      height: 100%;
      background: transparent;
      border: none;
      outline: none;
      border: 2px solid rgba(255, 255, 255, .2);
      border-radius: 40px;
      font-size: 16px;
      color: #fff;
      padding: 20px 45px 20px 20px;
    }
    .input-box input::placeholder{
      color: #fff;
    }
    .input-box i{
      position: absolute;
      right: 20px;
      top: 30%;
      transform: translate(-50%);
      font-size: 20px;
    }
    .wrapper .remember-forgot{
      display: flex;
      justify-content: space-between;
      font-size: 14.5px;
      margin: -15px 0 15px;
    }
    .remember-forgot label input{
      accent-color: #fff;
      margin-right: 3px;
    }
    .remember-forgot a{
      color: #fff;
      text-decoration: none;
    }
    .remember-forgot a:hover{
      text-decoration: underline;
    }
    .wrapper .btn{
      width: 100%;
      height: 45px;
      background: #fff;
      border: none;
      outline: none;
      border-radius: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: #333;
      font-weight: 600;
    }
    .wrapper .register-link{
      font-size: 14.5px;
      text-align: center;
      margin: 20px 0 15px;
    }
    .register-link p a{
      color: #fff;
      text-decoration: none;
      font-weight: 600;
    }
    .register-link p a:hover{
      text-decoration: underline;
    }
    .error-msg{
      color: #ff6b6b;
      text-align: center;
      margin-bottom: 10px;
      font-weight: 600;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <form method="post">
      <h1>Admin Login</h1>

      <?php if(isset($error)){ echo "<div class='error-msg'>{$error}</div>"; } ?>

      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" name="login" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
