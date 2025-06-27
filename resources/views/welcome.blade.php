<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Shovan's Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
    rel="stylesheet"
  />
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
      padding: 35px 40px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(255, 111, 0, 0.15);
      margin-bottom: 60px;
      color: #eee;
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
      line-height: 1.5;
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
      cursor: default;
      text-align: center;
      color: #eee;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 40px rgba(255, 111, 0, 0.4);
      background: #ff6f0020;
    }

    .card h3 {
      margin-top: 0;
      color: #ff6f00;
      font-size: 24px;
      margin-bottom: 10px;
      font-weight: 700;
    }

    .card p {
      font-size: 16px;
      line-height: 1.4;
      color: #ddd;
    }

    section.skills-exp {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .skills,
    .experience {
      flex: 1 1 320px;
      background: #292929;
      padding: 30px 25px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(255, 111, 0, 0.1);
      color: #eee;
    }

    .skills h3,
    .experience h3 {
      color: #ff6f00;
      margin-top: 0;
      font-weight: 700;
      font-size: 26px;
      margin-bottom: 20px;
      border-bottom: 3px solid #ff6f00;
      padding-bottom: 6px;
      letter-spacing: 0.02em;
    }

    .skill-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
      padding: 10px 0;
      border-bottom: 1px solid #3c3c3c;
      font-weight: 600;
      font-size: 16px;
    }

    .skill-item label {
      cursor: pointer;
      user-select: none;
    }

    .skill-item img {
      height: 28px;
      width: auto;
      filter: drop-shadow(0 0 1px rgba(0, 0, 0, 0.8));
    }

    ul {
      padding-left: 20px;
      line-height: 1.7;
      font-size: 16px;
      color: #ccc;
    }

    ul li {
      margin-bottom: 10px;
    }

    /* Toast Notification */
    #toast {
      visibility: hidden;
      min-width: 220px;
      background-color: #ff6f00;
      color: #121212;
      text-align: center;
      border-radius: 8px;
      padding: 12px 16px;
      position: fixed;
      z-index: 1000;
      left: 50%;
      bottom: 30px;
      transform: translateX(-50%);
      font-size: 14px;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
      user-select: none;
      pointer-events: none;
      font-weight: 600;
      box-shadow: 0 0 15px #ff6f00;
    }

    #toast.show {
      visibility: visible;
      opacity: 1;
      pointer-events: auto;
    }

    /* Footer */
    footer {
      width: 100%;
      max-width: 900px;
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 20px 0 40px;
      color: #aaa;
      font-size: 0.9rem;
      user-select: none;
    }

    footer a {
      color: #ff6f00;
      transition: color 0.3s ease;
      display: flex;
      align-items: center;
      gap: 6px;
      text-decoration: none;
    }

    footer a:hover,
    footer a:focus {
      color: #ffa040;
    }

    footer a svg {
      width: 22px;
      height: 22px;
      fill: currentColor;
      transition: fill 0.3s ease;
      filter: drop-shadow(0 0 3px #ff6f00);
    }

    /* Responsive */
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

      footer {
        gap: 20px;
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
        <img
          src="https://scontent.fzyl2-2.fna.fbcdn.net/v/t39.30808-1/427908708_3536605320003046_8333136275094364885_n.jpg?stp=cp6_dst-jpg_s200x200_tt6&_nc_cat=103&ccb=1-7&_nc_sid=1d2534&_nc_ohc=fm1pP1U1WNEQ7kNvwF5EsOI&_nc_oc=AdmyHC4oxcggre1yPtGwqf2R2-FIftDCo7P45VBvzI20T9H9xqjU9DfbWO9NI8ChFEU&_nc_zt=24&_nc_ht=scontent.fzyl2-2.fna&_nc_gid=SGHTNAgOJ54gbUvDj8-reg&oh=00_AfP5xqJxEMpW7rCHZtLphjeKCV55EaoQKhEGUdRn0D9d_g&oe=68602E3F"
          alt="Shovan's Profile"
        />
      </div>
    </header>

    <section class="cards" id="services" aria-label="Services">
      <div class="card" tabindex="0" role="article" aria-labelledby="service1-title">
        <h3 id="service1-title">Website Design</h3>
        <p>2 modern web design projects</p>
      </div>
      <div class="card" tabindex="0" role="article" aria-labelledby="service2-title">
        <h3 id="service2-title">Mobile App Design</h3>
        <p>3 beautiful mobile apps built</p>
      </div>
      <div class="card" tabindex="0" role="article" aria-labelledby="service3-title">
        <h3 id="service3-title">About Me</h3>
        <p>I specialize in creating elegant and user-friendly websites and apps.</p>
      </div>
    </section>

    <section class="skills-exp" id="experience">
      <div class="skills" aria-label="Skills">
        <h3>Skills</h3>
        <div class="skill-item">
          <label><input type="checkbox" checked /> Python</label>
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg"
            alt="Python"
            loading="lazy"
            decoding="async"
          />
        </div>
        <div class="skill-item">
          <label><input type="checkbox" checked /> C++</label>
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg"
            alt="C++"
            loading="lazy"
            decoding="async"
          />
        </div>
        <div class="skill-item">
          <label><input type="checkbox" checked /> Flutter</label>
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png"
            alt="Flutter"
            loading="lazy"
            decoding="async"
          />
        </div>
      </div>
      <div class="experience" aria-label="Experience">
        <h3>My Experience</h3>
        <ul>
          <li>Intern at TechFirm (2023)</li>
          <li>Freelance mobile app developer (2022–2024)</li>
          <li>Built 5+ fully responsive websites</li>
        </ul>
      </div>
    </section>
  </div>

  <footer aria-label="Social media links">
    <a href="https://facebook.com/your.fb.profile" target="_blank" rel="noopener" aria-label="Facebook">
      <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path
          d="M22.675 0h-21.35C.595 0 0 .592 0 1.323v21.354C0 23.407.594 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.894-4.788 4.658-4.788 1.325 0 2.466.099 2.797.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.59l-.467 3.622h-3.123V24h6.116C23.406 24 24 23.407 24 22.677V1.323C24 .592 23.406 0 22.675 0z"
        />
      </svg>
    </a>
    <a href="https://linkedin.com/in/your.linkedin" target="_blank" rel="noopener" aria-label="LinkedIn">
      <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path
          d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.854 0-2.137 1.447-2.137 2.942v5.664h-3.554v-11.47h3.413v1.566h.049c.476-.9 1.637-1.852 3.368-1.852 3.602 0 4.268 2.37 4.268 5.455v6.301zM5.337 8.433c-1.144 0-2.069-.927-2.069-2.07a2.069 2.069 0 1 1 4.138 0c0 1.143-.925 2.07-2.069 2.07zM6.897 20.452H3.777v-11.47h3.12v11.47zM22.225 0H1.771C.792 0 0 .774 0 1.728v20.543C0 23.224.792 24 1.771 24h20.451C23.204 24 24 23.224 24 22.271V1.728C24 .774 23.204 0 22.225 0z"
        />
      </svg>
    </a>
    <a href="https://github.com/your.github" target="_blank" rel="noopener" aria-label="GitHub">
      <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path
          d="M12 0C5.37 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.387.6.11.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.757-1.333-1.757-1.09-.745.084-.73.084-.73 1.205.085 1.84 1.238 1.84 1.238 1.07 1.833 2.807 1.303 3.492.996.108-.775.418-1.304.76-1.604-2.665-.3-5.466-1.332-5.466-5.931 0-1.31.465-2.38 1.235-3.22-.124-.303-.535-1.522.116-3.176 0 0 1.005-.322 3.3 1.23a11.49 11.49 0 0 1 3.003-.404c1.02.005 2.045.138 3.003.404 2.28-1.553 3.285-1.23 3.285-1.23.655 1.654.244 2.873.12 3.176.77.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.628-5.475 5.921.43.37.823 1.103.823 2.222 0 1.606-.015 2.9-.015 3.293 0 .32.217.694.825.576C20.565 21.796 24 17.3 24 12c0-6.627-5.373-12-12-12z"
        />
      </svg>
    </a>
  </footer>

  <script>
    function showToast(message) {
      const toast = document.getElementById('toast');
      toast.textContent = message;
      toast.className = 'show';
      setTimeout(() => {
        toast.className = toast.className.replace('show', '');
      }, 3000);
    }

    document.querySelectorAll('input[type=checkbox]').forEach((box) => {
      box.addEventListener('change', function () {
        showToast(this.checked ? 'Skill selected ✅' : 'Skill deselected ❌');
      });
    });
  </script>
</body>
</html>
