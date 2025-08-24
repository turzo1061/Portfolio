<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Poppins', sans-serif; background: #121212; color: #eee; margin: 0; padding: 0; }
    .container { max-width: 1100px; margin: 40px auto; background: #1e1e1e; border-radius: 16px; box-shadow: 0 8px 32px rgba(255,111,0,0.15); padding: 40px; }
    h1 { color: #ff6f00; text-align: center; margin-bottom: 32px; }
    .dashboard-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 32px; }
    .card { background: #232323; border-radius: 12px; padding: 28px 20px; box-shadow: 0 4px 16px rgba(255,111,0,0.08); text-align: center; }
    .card h2 { color: #ff6f00; margin-bottom: 10px; font-size: 1.3rem; }
    .card p { font-size: 1.1rem; color: #ccc; }
    .card a { display: inline-block; margin-top: 12px; color: #ff6f00; text-decoration: none; font-weight: 600; }
    .card a:hover { text-decoration: underline; }
  </style>
</head>
<body>
<div class="container">
  <h1>Dashboard</h1>
  <div class="dashboard-grid">
    <div class="card">
      <h2>Skills</h2>
      <p>Manage your skills</p>
      <a href="{{ url('/skills') }}">View Skills</a>
    </div>
    <div class="card">
      <h2>Projects</h2>
      <p>Manage your projects</p>
      <a href="{{ url('/projects') }}">View Projects</a>
    </div>
    <div class="card">
      <h2>Experiences</h2>
      <p>Manage your experiences</p>
      <a href="{{ url('/experiences') }}">View Experiences</a>
    </div>
    <div class="card">
      <h2>Achievements</h2>
      <p>Manage your achievements</p>
      <a href="{{ url('/achievements') }}">View Achievements</a>
    </div>
    <div class="card">
      <h2>Education</h2>
      <p>Manage your education</p>
      <a href="{{ url('/education') }}">View Education</a>
    </div>
    <div class="card">
      <h2>Infos</h2>
      <p>Manage your info</p>
      <a href="{{ url('/infos') }}">View Infos</a>
    </div>
  </div>
</div>
</body>
</html>
