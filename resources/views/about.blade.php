<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Me</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    /* COMMON CSS */
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
      line-height: 1.6;
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
      user-select: none;
    }

    nav a {
      color: #ff6f00;
      text-decoration: none;
      padding: 8px 14px;
      border-radius: 8px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav a:hover,
    nav a:focus {
      background-color: #ff6f00;
      color: #121212;
      box-shadow: 0 4px 15px rgba(255, 111, 0, 0.7);
      text-decoration: none;
    }

    .container {
      max-width: 900px;
      width: 100%;
      background: #1e1e1e;
      padding: 40px 50px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(255, 111, 0, 0.15);
      margin-bottom: 60px;
      color: #eee;
    }

    h1 {
      color: #ff6f00;
      margin-bottom: 20px;
      font-weight: 700;
      font-size: 36px;
      border-bottom: 3px solid #ff6f00;
      padding-bottom: 10px;
    }

    p {
      font-size: 18px;
      color: #ccc;
      margin-bottom: 20px;
      max-width: 700px;
    }

    .section-title {
      font-size: 24px;
      font-weight: 700;
      color: #ff6f00;
      margin-top: 40px;
      margin-bottom: 15px;
      border-bottom: 2px solid #ff6f00;
      padding-bottom: 6px;
      max-width: 220px;
    }

    ul.skills-list {
      list-style: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      max-width: 700px;
      margin-top: 10px;
    }

    ul.skills-list li {
      background: #292929;
      padding: 8px 14px;
      border-radius: 12px;
      font-weight: 600;
      font-size: 14px;
      box-shadow: 0 5px 15px rgba(255, 111, 0, 0.3);
      user-select: none;
    }

    .education-item {
      margin-bottom: 20px;
      max-width: 700px;
    }

    .education-item h3 {
      color: #ff6f00;
      margin-bottom: 6px;
      font-weight: 600;
    }

    .education-item p {
      color: #bbb;
      margin: 0;
      font-size: 16px;
    }

    .contact-info {
      margin-top: 30px;
      max-width: 700px;
      font-size: 16px;
      color: #ccc;
    }

    .contact-info strong {
      color: #ff6f00;
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

    .back-link:hover,
    .back-link:focus {
      background-color: #ff6f00;
      color: #121212;
      box-shadow: 0 4px 15px rgba(255, 111, 0, 0.7);
      border-color: #ff6f00;
      text-decoration: none;
    }

    @media (max-width: 600px) {
      .container {
        padding: 30px 25px;
      }
      ul.skills-list {
        justify-content: center;
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
</nav>

<div class="container" role="main">
  <h1>About Me</h1>

  <p>Hello! I’m <strong>Shovan</strong>, a creative web and app developer with over 2 years of hands-on experience building modern, responsive, and user-friendly digital solutions.</p>

  <p>I specialize in crafting beautiful, functional websites and mobile applications that help businesses grow and users enjoy a seamless experience.</p>

  <section aria-labelledby="skills-title">
    <h2 class="section-title" id="skills-title">Skills</h2>
    <ul class="skills-list" aria-label="List of skills">
      <li>Python</li>
      <li>C++</li>
      <li>Flutter</li>
      <li>JavaScript</li>
      <li>HTML &amp; CSS</li>
      <li>Laravel</li>
    </ul>
  </section>

  <section aria-labelledby="education-title">
    <h2 class="section-title" id="education-title">Education</h2>
    <div class="education-item">
      <h3>Bachelor of Science in Computer Science</h3>
      <p>XYZ University, 2019 - 2023</p>
    </div>
  </section>

  <section aria-labelledby="contact-title">
    <h2 class="section-title" id="contact-title">Contact Info</h2>
    <div class="contact-info">
      <p><strong>Email:</strong> shovan@example.com</p>
      <p><strong>Phone:</strong> +880 1234 567890</p>
      <p><strong>Location:</strong> Dhaka, Bangladesh</p>
    </div>
  </section>

  <a href="{{ url('/') }}" class="back-link" aria-label="Back to home page">← Back to Home</a>
</div>

</body>
</html>
