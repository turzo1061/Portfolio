<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #121212;
      color: #eee;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .login-container {
      background: #1e1e1e;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 8px 32px rgba(255, 111, 0, 0.15);
      width: 100%;
      max-width: 350px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    h2 {
      color: #ff6f00;
      margin-bottom: 30px;
      font-weight: 700;
      font-size: 28px;
      text-align: center;
    }
    form {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    label {
      font-weight: 600;
      margin-bottom: 6px;
      color: #ff6f00;
    }
    input[type="email"],
    input[type="password"] {
      padding: 12px 10px;
      border-radius: 8px;
      border: none;
      background: #292929;
      color: #eee;
      font-size: 16px;
      outline: none;
      margin-bottom: 10px;
    }
    input[type="email"]:focus,
    input[type="password"]:focus {
      border: 2px solid #ff6f00;
      background: #232323;
    }
    button[type="submit"] {
      background: #ff6f00;
      color: #121212;
      border: none;
      border-radius: 8px;
      padding: 12px 0;
      font-size: 18px;
      font-weight: 700;
      cursor: pointer;
      transition: background 0.3s;
    }
    button[type="submit"]:hover {
      background: #ffa040;
    }
    .register-link {
      margin-top: 18px;
      text-align: center;
    }
    .register-link a {
      color: #ff6f00;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s;
    }
    .register-link a:hover {
      color: #ffa040;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="/login">
      <!-- CSRF Token for Laravel Blade -->
      @csrf
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required autocomplete="email" autofocus>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required autocomplete="current-password">

      <button type="submit">Login</button>
    </form>
    <div class="register-link">
      Don't have an account? <a href="/register">Register</a>
    </div>
  </div>
</body>
</html>