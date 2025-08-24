<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Achievements</title>
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
    .achievement-list {
      margin-top: 30px;
    }
    .achievement-item {
      background: #292929;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 18px;
      box-shadow: 0 4px 15px rgba(255, 111, 0, 0.12);
      color: #eee;
    }
    .achievement-item h3 {
      color: #ff6f00;
      margin-bottom: 8px;
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
  <h1>Achievements</h1>
  <div class="achievement-list">
    @if(count($achievements) > 0)
      @foreach($achievements as $achievement)
        <div class="achievement-item">
          <h3>{{ $achievement->title }}</h3>
          <p>{{ $achievement->description }}</p>
        </div>
      @endforeach
    @else
      <div style="text-align:center; margin:40px 0; color:#aaa;">
        <p>No achievements yet. Here are some sample achievements:</p>
      </div>
      <div class="achievement-item">
        <h3>High School Topper</h3>
        <p>Graduated as the top student in high school, excelling in academics and extracurricular activities.</p>
      </div>
      <div class="achievement-item">
        <h3>College Science Fair Winner</h3>
        <p>Won first place in the inter-college science fair for an innovative project on renewable energy.</p>
      </div>
      <div class="achievement-item">
        <h3>University Gold Medalist</h3>
        <p>Awarded the university gold medal for outstanding academic performance and leadership.</p>
      </div>
    @endif
    <form action="{{ url('/achievements') }}" method="POST" style="margin-top:30px; background:#232323; padding:24px; border-radius:10px; box-shadow:0 2px 8px rgba(255,111,0,0.08);">
      @csrf
      <h3 style="color:#ff6f00; margin-bottom:12px;">Add Achievement</h3>
      <input type="text" name="title" placeholder="Title" required style="width:100%;padding:10px;margin-bottom:10px;border-radius:6px;border:1px solid #444;background:#292929;color:#eee;">
      <textarea name="description" placeholder="Description" required style="width:100%;padding:10px;margin-bottom:10px;border-radius:6px;border:1px solid #444;background:#292929;color:#eee;"></textarea>
      <button type="submit" style="background:#ff6f00;color:#fff;border:none;padding:10px 24px;border-radius:6px;font-weight:600;cursor:pointer;">Add Achievement</button>
    </form>
  </div>
  <a href="{{ url('/') }}" class="back-link">← Back to Home</a>
</div>
</body>
</html>