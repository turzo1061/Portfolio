<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Projects</title>
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
    .projects-list {
      margin-top: 30px;
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
      justify-content: center;
    }
    .project-item {
      background: #292929;
      border-radius: 12px;
      padding: 24px 20px;
      box-shadow: 0 4px 15px rgba(255, 111, 0, 0.12);
      color: #eee;
      width: 320px;
      max-width: 100%;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .project-item:hover {
      transform: translateY(-6px) scale(1.03);
      box-shadow: 0 8px 30px rgba(255, 111, 0, 0.25);
    }
    .project-item h3 {
      color: #ff6f00;
      margin-bottom: 10px;
      font-size: 22px;
      font-weight: 600;
    }
    .project-item p {
      color: #bbb;
      margin-bottom: 10px;
      font-size: 15px;
    }
    .project-link {
      color: #ff6f00;
      text-decoration: none;
      font-weight: 600;
      margin-top: auto;
      transition: color 0.3s;
    }
    .project-link:hover {
      color: #ffa040;
      text-decoration: underline;
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
      .projects-list {
        flex-direction: column;
        gap: 18px;
      }
      .project-item {
        width: 100%;
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
  <h1>Projects</h1>
  <div class="projects-list">
    <div class="project-item">
      <h3>Portfolio Website</h3>
      <p>A personal portfolio website built with Laravel and Blade, showcasing my skills and projects.</p>
      <a href="#" class="project-link" target="_blank">View Project</a>
    </div>
    <div class="project-item">
      <h3>Task Manager App</h3>
      <p>A simple task management application using Laravel and Vue.js for productivity tracking.</p>
      <a href="#" class="project-link" target="_blank">View Project</a>
    </div>
    <div class="project-item">
      <h3>Blog Platform</h3>
      <p>A multi-user blog platform with authentication, built using Laravel and Bootstrap.</p>
      <a href="#" class="project-link" target="_blank">View Project</a>
    </div>
    <!-- Add more projects as needed -->
  </div>
  <a href="{{ url('/') }}" class="back-link">← Back to Home</a>
</div>
</body>
</html>