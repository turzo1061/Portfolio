<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Me</title>
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

    .intro {
      display: flex;
      align-items: center;
      gap: 30px;
      margin-bottom: 30px;
      flex-wrap: wrap;
    }

    .intro-text {
      flex: 1 1 400px;
    }

    .intro-text p {
      font-size: 18px;
      color: #ccc;
      margin-bottom: 15px;
    }

    .profile-image {
      flex-shrink: 0;
      width: 160px;
      height: 160px;
      border-radius: 50%;
      overflow: hidden;
      border: 4px solid #ff6f00;
      box-shadow: 0 8px 25px rgba(255, 111, 0, 0.6);
      transition: transform 0.3s ease;
      cursor: default;
    }

    .profile-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-image:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 35px rgba(255, 111, 0, 0.9);
    }

    h1 {
      color: #ff6f00;
      margin-bottom: 20px;
      font-weight: 700;
      font-size: 36px;
      border-bottom: 3px solid #ff6f00;
      padding-bottom: 10px;
    }

    .section-title {
      font-size: 24px;
      font-weight: 700;
      color: #ff6f00;
      margin-top: 40px;
      margin-bottom: 15px;
      border-bottom: 2px solid #ff6f00;
      padding-bottom: 6px;
    }

    /* Skills */
    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 10px;
    }

    .skill-icon {
      background: #292929;
      padding: 20px 15px 15px;
      border-radius: 16px;
      text-align: center;
      width: 110px;
      box-shadow: 0 5px 15px rgba(255, 111, 0, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: default;
      user-select: none;
    }

    .skill-icon img {
      width: 48px;
      height: 48px;
      margin-bottom: 10px;
      filter: drop-shadow(0 0 2px #ff6f00);
      transition: filter 0.3s ease;
    }

    .skill-icon span {
      display: block;
      color: #eee;
      font-size: 15px;
      font-weight: 600;
    }

    .skill-icon:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 40px rgba(255, 111, 0, 0.6);
    }

    .skill-icon:hover img {
      filter: drop-shadow(0 0 6px #ff6f00);
    }

    /* Education */
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

    /* Contact info */
    .contact-info {
      margin-top: 30px;
      max-width: 700px;
      font-size: 16px;
      color: #ccc;
    }

    .contact-info strong {
      color: #ff6f00;
    }

    /* Back link */
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

    /* Footer */
    footer {
      width: 100%;
      max-width: 900px;
      margin: 0 auto 30px;
      padding: 20px 20px;
      text-align: center;
      color: #aaa;
      font-size: 0.9rem;
      border-top: 1px solid #2a2a2a;
      user-select: none;
    }

    footer strong {
      color: #ff6f00;
    }

    @media (max-width: 700px) {
      .intro {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
      .profile-image {
        margin-bottom: 20px;
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

  <div class="intro">
    <div class="profile-image" aria-label="Profile photo of Shovan">
      <img src="https://scontent.fzyl2-2.fna.fbcdn.net/v/t39.30808-1/427908708_3536605320003046_8333136275094364885_n.jpg?stp=cp6_dst-jpg_s200x200_tt6&_nc_cat=103&ccb=1-7&_nc_sid=1d2534&_nc_ohc=fm1pP1U1WNEQ7kNvwF5EsOI&_nc_oc=AdmyHC4oxcggre1yPtGwqf2R2-FIftDCo7P45VBvzI20T9H9xqjU9DfbWO9NI8ChFEU&_nc_zt=24&_nc_ht=scontent.fzyl2-2.fna&_nc_gid=SGHTNAgOJ54gbUvDj8-reg&oh=00_AfP5xqJxEMpW7rCHZtLphjeKCV55EaoQKhEGUdRn0D9d_g&oe=68602E3F" alt="Shovan's Profile Photo" />
    </div>
    <div class="intro-text">
      <p>Hello! I’m <strong>Shovan</strong>, a creative web and app developer with over 2 years of hands-on experience building modern, responsive, and user-friendly digital solutions.</p>
      <p>I specialize in crafting beautiful, functional websites and mobile applications that help businesses grow and users enjoy a seamless experience.</p>
    </div>
  </div>

  <section aria-labelledby="skills-title">
    <h2 class="section-title" id="skills-title">Skills</h2>
    <div class="skills-list" aria-label="List of skills with icons">
      <div class="skill-icon" tabindex="0">
        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python logo" />
        <span>Python</span>
      </div>
      <div class="skill-icon" tabindex="0">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" alt="C++ logo" />
        <span>C++</span>
      </div>
      <div class="skill-icon" tabindex="0">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png" alt="Flutter logo" />
        <span>Flutter</span>
      </div>
      <div class="skill-icon" tabindex="0">
        <img src="https://cdn-icons-png.flaticon.com/512/919/919828.png" alt="JavaScript logo" />
        <span>JavaScript</span>
      </div>
      <div class="skill-icon" tabindex="0">
        <img src="https://cdn-icons-png.flaticon.com/512/732/732190.png" alt="HTML5 logo" />
        <span>HTML5</span>
      </div>
      <div class="skill-icon" tabindex="0">
        <img src="https://cdn-icons-png.flaticon.com/512/919/919836.png" alt="CSS3 logo" />
        <span>CSS3</span>
      </div>
      <div class="skill-icon" tabindex="0">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel logo" style="filter: invert(1);" />
        <span>Laravel</span>
      </div>
    </div>
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

<footer>
  &copy; 2025 <strong>Shovan Samanta Turzo</strong>. All rights reserved.
</footer>

</body>
</html>
