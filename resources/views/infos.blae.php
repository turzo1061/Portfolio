<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Personal Info</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0 20px;
      background: #121212;
      color: #eee;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    nav {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #1e1e1e;
      padding: 16px 30px;
      box-shadow: 0 4px 12px rgba(255, 111, 0, 0.4);
      width: 100%;
      max-width: 900px;
      border-radius: 12px;
      margin: 30px 0 40px;
      gap: 25px;
      flex-wrap: wrap;
      font-weight: 600;
      font-size: 1rem;
    }
    nav a {
      color: #ff6f00;
      text-decoration: none;
      padding: 8px 14px;
      border-radius: 8px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    nav a:hover {
      background-color: #ff6f00;
      color: #121212;
      box-shadow: 0 4px 15px rgba(255, 111, 0, 0.7);
    }
    .container {
      max-width: 900px;
      width: 100%;
      background: #1e1e1e;
      padding: 40px 50px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(255, 111, 0, 0.15);
      margin-bottom: 40px;
    }
    h1 {
      color: #ff6f00;
      margin-bottom: 20px;
      font-weight: 700;
      font-size: 36px;
      border-bottom: 3px solid #ff6f00;
      padding-bottom: 10px;
      text-align: center;
    }
    .info-list {
      margin-top: 30px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
    .info-item {
      background: #292929;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 18px;
      box-shadow: 0 4px 15px rgba(255, 111, 0, 0.12);
      color: #eee;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .info-label {
      color: #ff6f00;
      font-weight: 600;
      margin-right: 20px;
      min-width: 120px;
    }
    .back-link {
      display: inline-block;
      margin-top: 40px;
      font-weight: 600;
      color: #ff6f00;
      text-decoration: none;
      font-size: 16px;
      border: 2px solid transparent;
      padding: 10px 18px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }
    .back-link:hover {
      background-color: #ff6f00;
      color: #121212;
      box-shadow: 0 4px 15px rgba(255, 111, 0, 0.7);
      border-color: #ff6f00;
      text-decoration: none;
    }
    @media (max-width: 700px) {
      .container {
        padding: 25px;
      }
      .info-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
      }
      .info-label {
        margin-right: 0;
      }
    }
  </style>
</head>
<body>
<nav>
  <a href="{{ url('/') }}">Home</a>
  <a href="{{ url('/about') }}">About</a>
  <a href="{{ url('/works') }}">Works</a>
  <a href="{{ url('/contact') }}">Contact</a>
  <a href="{{ url('/achievements') }}">Achievements</a>
  <a href="{{ url('/education') }}">Education</a>
  <a href="{{ url('/experiences') }}">Experiences</a>
  <a href="{{ url('/skills') }}">Skills</a>
  <a href="{{ url('/projects') }}">Projects</a>
  <a href="{{ url('/infos') }}">Infos</a>
</nav>
<div class="container">
  <h1>Personal Info</h1>
  <div class="info-list">
    <div class="info-item">
      <span class="info-label">Name:</span>
      <span>Your Name</span>
    </div>
    <div class="info-item">
      <span class="info-label">Email:</span>
      <span>your.email@example.com</span>
    </div>
    <div class="info-item">
      <span class="info-label">Phone:</span>
      <span>+8801XXXXXXXXX</span>
    </div>
    <div class="info-item">
      <span class="info-label">Address:</span>
      <span>Your Address Here</span>
    </div>
    <div class="info-item">
      <span class="info-label">Nationality:</span>
      <span>Bangladeshi</span>
    </div>
    <!-- Add more info as needed -->
  </div>
  <a href="{{ url('/') }}" class="back-link">← Back to Home</a>
</div>
</body>
</html>