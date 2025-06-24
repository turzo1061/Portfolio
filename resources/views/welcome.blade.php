<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Shovan's Portfolio</title>
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
    header.intro {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }
    .intro-text h2 {
      font-size: 32px;
      color: #2d3436;
    }
    .intro-text p {
      font-size: 18px;
      color: #636e72;
    }
    .profile-image img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    section.cards {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }
    .card {
      flex: 1;
      background: white;
      padding: 25px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      transition: transform 0.2s;
      min-width: 200px;
    }
    .card:hover {
      transform: scale(1.03);
      background: #ffeaa7;
    }
    .card h3 {
      margin-top: 0;
      color: #d35400;
    }
    section.skills-exp {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    .skills, .experience {
      flex: 1;
      background: white;
      padding: 25px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      min-width: 280px;
    }
    .skills h3, .experience h3 {
      color: #0984e3;
      margin-top: 0;
    }
    .skill-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
      padding: 8px;
      border-bottom: 1px solid #eee;
    }
    .skill-item img {
      height: 28px;
    }
    ul {
      padding-left: 20px;
      line-height: 1.6;
    }
    /* Toast Notification */
    #toast {
      visibility: hidden;
      min-width: 220px;
      background-color: #2d3436;
      color: #fff;
      text-align: center;
      border-radius: 8px;
      padding: 12px 16px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
      transform: translateX(-50%);
      font-size: 14px;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }
    #toast.show {
      visibility: visible;
      opacity: 1;
    }
    @media (max-width: 768px) {
      header.intro {
        flex-direction: column;
        text-align: center;
      }
      section.cards, section.skills-exp {
        flex-direction: column;
      }
      .profile-image {
        margin-top: 20px;
      }
      nav {
        flex-wrap: wrap;
      }
      nav a {
        margin: 10px 10px;
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
      <h2>Hello, I'm <span style="color:#d63031;">Shovan</span></h2>
      <p>Creative Developer with 2 years of experience</p>
    </div>
    <div class="profile-image">
      <img src="https://scontent.fzyl2-2.fna.fbcdn.net/v/t39.30808-1/427908708_3536605320003046_8333136275094364885_n.jpg?stp=cp6_dst-jpg_s200x200_tt6&_nc_cat=103&ccb=1-7&_nc_sid=1d2534&_nc_ohc=fm1pP1U1WNEQ7kNvwF5EsOI&_nc_oc=AdmyHC4oxcggre1yPtGwqf2R2-FIftDCo7P45VBvzI20T9H9xqjU9DfbWO9NI8ChFEU&_nc_zt=24&_nc_ht=scontent.fzyl2-2.fna&_nc_gid=SGHTNAgOJ54gbUvDj8-reg&oh=00_AfP5xqJxEMpW7rCHZtLphjeKCV55EaoQKhEGUdRn0D9d_g&oe=68602E3F" alt="Shovan's Profile">
    </div>
  </header>

  <section class="cards" id="services">
    <div class="card">
      <h3>Website Design</h3>
      <p>2 modern web design projects</p>
    </div>
    <div class="card">
      <h3>Mobile App Design</h3>
      <p>3 beautiful mobile apps built</p>
    </div>
    <div class="card">
      <h3>About Me</h3>
      <p>I specialize in creating elegant and user-friendly websites and apps.</p>
    </div>
  </section>

  <section class="skills-exp" id="experience">
    <div class="skills">
      <h3>Skills</h3>
      <div class="skill-item">
        <label><input type="checkbox" checked> Python</label>
        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python">
      </div>
      <div class="skill-item">
        <label><input type="checkbox" checked> C++</label>
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" alt="C++">
      </div>
      <div class="skill-item">
        <label><input type="checkbox" checked> Flutter</label>
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png" alt="Flutter">
      </div>
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

<div id="toast"></div>

<script>
  function showToast(message) {
    const toast = document.getElementById("toast");
    toast.textContent = message;
    toast.className = "show";
    setTimeout(() => {
      toast.className = toast.className.replace("show", "");
    }, 3000);
  }

  document.querySelectorAll('input[type=checkbox]').forEach(box => {
    box.addEventListener('change', function () {
      showToast(this.checked ? "Skill selected ✅" : "Skill deselected ❌");
    });
  });
</script>

</body>
</html>
