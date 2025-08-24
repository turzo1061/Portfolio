<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Infos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
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
  <h1>Infos</h1>
  <div class="infos-list">
    @foreach($infos as $info)
      <div class="info-item">
        <h3>{{ $info->title }}</h3>
        <p>{{ $info->description }}</p>
      </div>
    @endforeach
  </div>
  <a href="{{ url('/') }}" class="back-link">← Back to Home</a>
</div>
</body>
</html>
