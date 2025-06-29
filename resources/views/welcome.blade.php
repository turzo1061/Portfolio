<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Shovan's Portfolio</title>
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

    nav a:hover,
    nav a:focus {
      background-color: #ff6f00;
      color: #121212;
      box-shadow: 0 4px 15px rgba(255, 111, 0, 0.7);
    }

    .container {
      max-width: 900px;
      width: 100%;
      background: #1e1e1e;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(255, 111, 0, 0.15);
      margin-bottom: 60px;
    }

    header.intro {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      margin-bottom: 50px;
    }

    .intro-text h2 {
      font-size: 38px;
      color: #ff6f00;
      margin-bottom: 12px;
      font-weight: 700;
    }

    .intro-text h2 span {
      color: #ff9a2c;
    }

    .intro-text p {
      font-size: 20px;
      color: #ccc;
      max-width: 450px;
    }

    .profile-image img {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #ff6f00;
      box-shadow: 0 8px 25px rgba(255, 111, 0, 0.6);
      transition: transform 0.3s ease;
    }

    .profile-image img:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 35px rgba(255, 111, 0, 0.9);
    }

    section.cards {
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
      margin-bottom: 50px;
      justify-content: center;
    }

    .card {
      flex: 1 1 250px;
      background: #292929;
      padding: 30px 25px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(255, 111, 0, 0.1);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      text-align: center;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 40px rgba(255, 111, 0, 0.4);
      background: #ff6f0020;
    }

    .card h3 {
      color: #ff6f00;
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 16px;
      color: #ddd;
    }

    section.skills-exp {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .skills, .experience {
      flex: 1 1 320px;
      background: #292929;
      padding: 30px 25px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(255, 111, 0, 0.1);
    }

    .skills h3, .experience h3 {
      color: #ff6f00;
      font-size: 26px;
      border-bottom: 3px solid #ff6f00;
      padding-bottom: 6px;
    }

    .skill-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
      padding: 10px 0;
      border-bottom: 1px solid #3c3c3c;
    }

    .skill-item label {
      font-weight: 600;
      cursor: pointer;
    }

    .skill-item img {
      height: 28px;
      filter: drop-shadow(0 0 1px rgba(0, 0, 0, 0.8));
    }

    ul {
      padding-left: 20px;
      font-size: 16px;
      color: #ccc;
    }

    ul li {
      margin-bottom: 10px;
    }

    #toast {
      visibility: hidden;
      min-width: 220px;
      background-color: #ff6f00;
      color: #fff; /* FIXED */
      text-align: center;
      border-radius: 8px;
      padding: 12px 16px;
      position: fixed;
      z-index: 9999; /* FIXED */
      left: 50%;
      bottom: 30px;
      transform: translateX(-50%);
      font-size: 14px;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
      pointer-events: none;
      font-weight: 600;
      box-shadow: 0 0 15px #ff6f00;
    }

    #toast.show {
      visibility: visible;
      opacity: 1;
    }

    footer {
      width: 100%;
      max-width: 900px;
      margin: 0 auto;
      padding: 30px 20px;
      text-align: center;
      color: #ddd; /* FIXED */
      font-size: 0.9rem;
      border-top: 1px solid #333; /* FIXED */
    }

    footer .social {
      margin-bottom: 15px;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    footer .social a {
      color: #ff6f00;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    footer .social a:hover {
      color: #ffa040;
    }

    footer svg {
      width: 22px;
      height: 22px;
      fill: currentColor;
      filter: drop-shadow(0 0 3px #ff6f00);
    }

    @media (max-width: 768px) {
      header.intro {
        flex-direction: column;
        text-align: center;
      }

      .intro-text p {
        max-width: 100%;
      }

      section.cards,
      section.skills-exp {
        flex-direction: column;
        align-items: center;
      }

      nav {
        justify-content: center;
        gap: 15px;
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

  <div class="container">
    <header class="intro">
      <div class="intro-text">
        <h2>Hello, I'm <span>Shovan</span></h2>
        <p>Creative Developer with 2 years of experience crafting elegant and user-friendly websites and apps.</p>
      </div>
      <div class="profile-image">
        <img src="https://scontent.fzyl2-2.fna.fbcdn.net/v/t39.30808-1/427908708_3536605320003046_8333136275094364885_n.jpg?stp=cp6_dst-jpg_s200x200_tt6&_nc_cat=103&ccb=1-7&_nc_sid=1d2534&_nc_ohc=4vx24qw45aIQ7kNvwE-3USH&_nc_oc=AdmOH0BSkD2vt-0Ogu30Y0xRMFnZfw1GNcMbglNttpGP3hZ5bZP6byzommT0ZXL1pIs&_nc_zt=24&_nc_ht=scontent.fzyl2-2.fna&_nc_gid=R6tsShpnsKfjvXdrzV2QgQ&oh=00_AfMKOJrshhO3zAXbaK1tFkcv4M0nu8D44CjPeziwBxkgxg&oe=6866FDFF" alt="Shovan's Profile" />
      </div>
    </header>

    <section class="cards">
      <div class="card"><h3>Website Design</h3><p>2 modern web design projects</p></div>
      <div class="card"><h3>Mobile App Design</h3><p>3 beautiful mobile apps built</p></div>
      <div class="card"><h3>About Me</h3><p>I specialize in creating elegant and user-friendly websites and apps.</p></div>
    </section>

    <section class="skills-exp">
      <div class="skills">
        <h3>Skills</h3>
        <div class="skill-item"><label><input type="checkbox" checked /> Python</label><img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python" /></div>
        <div class="skill-item"><label><input type="checkbox" checked /> C++</label><img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" alt="C++" /></div>
        <div class="skill-item"><label><input type="checkbox" checked /> Flutter</label><img src="https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png" alt="Flutter" /></div>
      </div>
      <div class="experience">
        <h3>My Experience</h3>
        <ul>
          <li>Intern at TechFirm (2023)</li>
          <li>Freelance mobile app developer (2022–2024)</li>
          <li>Built 5+ fully responsive websites</li>
        </ul>
      </div>
    </section>
  </div>

  <footer>
    <div class="social">
      <a href="https://facebook.com/your.fb.profile" target="_blank">Facebook</a>
      <a href="https://linkedin.com/in/your.linkedin" target="_blank">LinkedIn</a>
      <a href="https://github.com/your.github" target="_blank">GitHub</a>
    </div>
    <div>&copy; 2025 <strong>Shovan Samanta Turzo</strong>. All rights reserved.</div>
  </footer>

  <div id="toast"></div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const toast = document.getElementById('toast');
      document.querySelectorAll('input[type=checkbox]').forEach(box => {
        box.addEventListener('change', function () {
          toast.textContent = this.checked ? 'Skill selected ✅' : 'Skill deselected ❌';
          toast.className = 'show';
          setTimeout(() => {
            toast.className = toast.className.replace('show', '');
          }, 3000);
        });
      });
    });
  </script>
</body>
</html>
