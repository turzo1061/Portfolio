<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My Works</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    /* COMMON CSS */
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0 20px;
      background: linear-gradient(to right, #fceabb, #f8b500);
      color: #333;
    }
    nav {
      display: flex;
      justify-content: center;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      padding: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      margin-bottom: 30px;
    }
    nav a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s;
    }
    nav a:hover {
      color: #ffe600;
      text-decoration: underline;
    }
    .container {
      max-width: 900px;
      margin: auto;
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    ul {
      line-height: 1.6;
      padding-left: 20px;
    }
    a {
      text-decoration: none;
      color: #2575fc;
      font-weight: 600;
    }
  </style>
</head>
<body>

<nav>
  <a href="{{ url('/') }}">Home</a>
  <a href="{{ url('/about') }}">About</a>
  <a href="{{ url('/works') }}">Works</a>
  <a href="{{ url('/contact') }}">Contact</a>
</nav>

<div class="container">
  <h1>My Works</h1>
  <p>Here are some of my recent projects:</p>
  <ul>
    <li>🌐 Portfolio Website</li>
    <li>📱 Mobile App for Booking</li>
    <li>🛒 E-commerce UI Design</li>
  </ul>
  <p><a href="{{ url('/') }}">← Back to Home</a></p>
</div>

</body>
</html>
