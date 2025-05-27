<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shovan's Portfolio</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #f2f2f2;
    }

    header {
      background-color: #333;
      padding: 10px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-right: 15px;
    }

    .intro {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
    }

    .main {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .main > div {
      width: 48%;
    }

    h3 {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <a href="#services">Services</a>
      <a href="#works">Works</a>
      <a href="#experience">Experience</a>
    </nav>
  </header>

  <section class="intro">
    <div>
      <h2>Hey there,<br />I am Shovan</h2>
      <p>2 years experience</p>
    </div> 
    <img
      class="profile-img"
      src="https://example.com/your-image.jpg"
      alt="Profile Image"
    />
  </section>

  <section class="main">
    <div class="services" id="services">
      <h3>Website Design</h3>
      <p>2</p>
      <h3>Mobile App Design</h3>
      <p>3</p>
    </div>

    <div class="about">
      <h3>About Me</h3>
      <p>I am a professional website and app developer</p>
    </div>
  </section>
</body>
</html>
