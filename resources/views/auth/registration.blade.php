<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Register</title>
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
    .register-container {
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
    input[type="text"],
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
    input[type="text"]:focus,
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
    .login-link {
      margin-top: 18px;
      text-align: center;
    }
    .login-link a {
      color: #ff6f00;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s;
    }
    .login-link a:hover {
      color: #ffa040;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Register</h2>
    <form method="POST" action="/register">
      @csrf
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required autocomplete="name" autofocus>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required autocomplete="email">

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required autocomplete="new-password">

      <label for="password_confirmation">Confirm Password</label>
      <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">

      <button type="submit">Register</button>
    </form>
    <div class="login-link">
      Already have an account? <a href="/login">Login</a>
    </div>
  </div>
</body>