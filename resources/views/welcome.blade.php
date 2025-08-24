<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Portfolio website for Shovan – Creative Developer & Designer" />
    <title>Shovan Samanta | Creative Developer</title>

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icons (Lucide) -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Base Styles -->
    <style>
      :root {
        /* Brand Colors */
        --brand-500: #ff6f00;
        --brand-400: #ffa040;
        --bg-900: #0e0e0e;
        --bg-800: #181818;
        --bg-700: #222222;
        --text-100: #eeeeee;
        --text-200: #cccccc;
        --radius: 1rem;
        --transition: 0.3s ease;
        --shadow-sm: 0 2px 6px rgb(0 0 0 / 0.25);
        --shadow-lg: 0 12px 30px rgb(0 0 0 / 0.4);
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        font-family: "Poppins", sans-serif;
        background: var(--bg-900);
        color: var(--text-100);
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        line-height: 1.6;
        scroll-behavior: smooth;
        padding-inline: 1rem;
      }

      /* ---------- Navigation ---------- */
      nav {
        position: sticky;
        top: 1rem;
        z-index: 100;
        display: flex;
        gap: 1.5rem;
        padding: 0.85rem 2rem;
        background: var(--bg-800);
        border-radius: var(--radius);
        max-width: 56rem;
        width: 100%;
        justify-content: center;
        box-shadow: var(--shadow-sm);
        backdrop-filter: blur(6px);
      }

      nav a {
        font-weight: 600;
        text-decoration: none;
        color: var(--brand-500);
        padding: 0.4rem 0.75rem;
        border-radius: 0.5rem;
        transition: background var(--transition), color var(--transition), box-shadow var(--transition);
      }

      nav a:hover,
      nav a:focus-visible {
        background: var(--brand-500);
        color: var(--bg-900);
        box-shadow: 0 4px 15px rgba(255, 111, 0, 0.6);
      }

      /* ---------- Container ---------- */
      main {
        width: 100%;
        max-width: 56rem;
        background: var(--bg-800);
        box-shadow: var(--shadow-lg);
        border-radius: calc(var(--radius) * 1.2);
        padding: 3rem 2.25rem 4rem;
        margin-block: 2.5rem 4rem;
      }

      /* ---------- Intro ---------- */
      header.intro {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        align-items: center;
        margin-bottom: 3rem;
      }

      .intro-text {
        flex: 1 1 18rem;
        min-width: 16rem;
      }

      .intro-text h1 {
        font-size: clamp(2.25rem, 4vw, 3rem);
        color: var(--brand-500);
        margin-bottom: 0.4rem;
        font-weight: 700;
      }

      .intro-text p {
        font-size: 1.125rem;
        color: var(--text-200);
        max-width: 32ch;
      }

      .profile-image {
        flex: 0 0 160px;
        display: grid;
        place-items: center;
      }

      .profile-image img {
        width: 160px;
        aspect-ratio: 1/1;
        border-radius: 50%;
        object-fit: cover;
        border: 0.35rem solid var(--brand-500);
        box-shadow: 0 8px 25px rgba(255, 111, 0, 0.6);
        transition: transform var(--transition), box-shadow var(--transition);
      }

      .profile-image img:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(255, 111, 0, 0.85);
      }

      /* ---------- Highlight Cards ---------- */
      .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-bottom: 3rem;
      }

      .card {
        background: var(--bg-700);
        padding: 1.75rem 1.5rem;
        border-radius: var(--radius);
        text-align: center;
        transition: background var(--transition), transform var(--transition), box-shadow var(--transition);
        box-shadow: var(--shadow-sm);
      }

      .card:hover {
        background: color-mix(in srgb, var(--brand-500) 15%, var(--bg-700));
        transform: translateY(-6px);
        box-shadow: 0 10px 30px rgba(255, 111, 0, 0.45);
      }

      .card h2 {
        font-size: 1.35rem;
        color: var(--brand-500);
        margin-bottom: 0.4rem;
        font-weight: 600;
      }

      .card p {
        font-size: 0.95rem;
        color: var(--text-200);
      }

      /* ---------- Skills & Experience ---------- */
      .grid-two {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
        gap: 2rem;
      }

      .panel {
        background: var(--bg-700);
        border-radius: var(--radius);
        padding: 2rem 1.5rem 2.25rem;
        box-shadow: var(--shadow-sm);
      }

      .panel h2 {
        font-weight: 600;
        font-size: 1.5rem;
        color: var(--brand-500);
        border-bottom: 3px solid var(--brand-500);
        padding-bottom: 0.4rem;
        margin-bottom: 1.5rem;
      }

      /* Skills list */
      .skill-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.65rem 0;
        border-bottom: 1px solid #343434;
      }

      .skill-item:last-child {
        border-bottom: none;
      }

      .skill-item label {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        font-weight: 500;
        cursor: pointer;
      }

      .skill-item img {
        height: 26px;
        filter: drop-shadow(0 0 2px rgb(0 0 0 / 0.8));
      }

      /* Experience list */
      .experience-list {
        list-style: none;
      }

      .experience-list li {
        margin-bottom: 0.9rem;
        color: var(--text-200);
        font-size: 0.98rem;
      }

      /* ---------- Toast ---------- */
      #toast {
        position: fixed;
        left: 50%;
        bottom: 2rem;
        transform: translateX(-50%);
        background: var(--brand-500);
        color: #fff;
        padding: 0.8rem 1rem;
        border-radius: 0.5rem;
        font-weight: 600;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        box-shadow: 0 0 15px var(--brand-500);
        transition: opacity var(--transition), visibility var(--transition);
        z-index: 9999;
      }

      #toast.show {
        opacity: 1;
        visibility: visible;
      }

      /* ---------- Footer ---------- */
      footer {
        max-width: 56rem;
        width: 100%;
        text-align: center;
        color: var(--text-200);
        font-size: 0.9rem;
        padding-block: 2.5rem 3rem;
        border-top: 1px solid #333;
      }

      .social {
        display: flex;
        justify-content: center;
        gap: 1.25rem;
        margin-bottom: 1.2rem;
      }

      .social a {
        color: var(--brand-500);
        text-decoration: none;
        transition: color var(--transition);
      }

      .social a:hover {
        color: var(--brand-400);
      }

      .social svg {
        width: 22px;
        height: 22px;
        stroke-width: 1.6px;
      }

      /* ---------- Responsive ---------- */
      @media (max-width: 600px) {
        nav {
          gap: 1rem;
          padding-inline: 1rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <nav aria-label="Main Navigation">
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

    <!-- Main Content -->
    <main>
      <!-- Intro Section -->
      <header class="intro">
        <div class="intro-text">
          <h1>Hi, I'm Shovan</h1>
          <p>Creative Developer with 2+ years building delightful, high‑performance digital experiences.</p>
        </div>
        <figure class="profile-image">
          <img
            src="https://scontent.fdac5-2.fna.fbcdn.net/v/t39.30808-6/427908708_3536605320003046_8333136275094364885_n.jpg?stp=cp6_dst-jpg_p526x296_tt6&_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=t02XvP4J4nAQ7kNvwHqL3--&_nc_oc=AdkqDoyrhKnQZSkg24qsqm0GR88g5OeVM4XiKXOnFpbMT1FWPymJlycoKmmhZLvhvQM&_nc_zt=23&_nc_ht=scontent.fdac5-2.fna&_nc_gid=uypv7A3Yb3OdUmt4IySNGg&oh=00_AfVeBu0qih9SW5-FRRYvYZ61U0q3gHGvnRPDJbLkAlyMrQ&oe=68B0A9FD"
            alt="Portrait of Shovan Samanta"
          />
        </figure>
      </header>

      <!-- Highlight Cards -->
      <section class="cards" aria-label="Highlights">
        <article class="card">
          <h2>Website Design</h2>
          <p>Crafted 10+ modern & responsive websites for diverse clients.</p>
        </article>
        <article class="card">
          <h2>Mobile Apps</h2>
          <p>Built 6 cross‑platform apps with Flutter & React Native.</p>
        </article>
        <article class="card">
          <h2>Consulting</h2>
          <p>Helping startups refine product strategy & UX direction.</p>
        </article>
      </section>

      <!-- Skills & Experience -->
      <section class="grid-two">
        <!-- Skills Panel -->
        <div class="panel">
          <h2>Skills</h2>
          <div class="skill-item">
            <label><input type="checkbox" checked /> Python</label>
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python logo" />
          </div>
          <div class="skill-item">
            <label><input type="checkbox" checked /> C++</label>
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" alt="C++ logo" />
          </div>
          <div class="skill-item">
            <label><input type="checkbox" checked /> Flutter</label>
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png" alt="Flutter logo" />
          </div>
        </div>

        <!-- Experience Panel -->
        <div class="panel">
          <h2>Experience</h2>
          <ul class="experience-list">
            <li>Software Engineer, <strong>TechFirm</strong> — 2024‑Present</li>
            <li>Mobile App Developer (Freelance) — 2022‑2024</li>
            <li>Intern, <strong>Nova Digital</strong> — 2023</li>
          </ul>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer>
      <nav class="social" aria-label="Social Links">
        <a href="https://facebook.com/your.fb.profile" target="_blank" rel="noopener" aria-label="Facebook">
          <i data-lucide="facebook"></i>
        </a>
        <a href="https://linkedin.com/in/your.linkedin" target="_blank" rel="noopener" aria-label="LinkedIn">
          <i data-lucide="linkedin"></i>
        </a>
        <a href="https://github.com/your.github" target="_blank" rel="noopener" aria-label="GitHub">
          <i data-lucide="github"></i>
        </a>
      </nav>
      <small>&copy; 2025 <strong>Shovan Samanta Turzo</strong>. All rights reserved.</small>
    </footer>

    <!-- Toast -->
    <div id="toast" role="status" aria-live="polite"></div>

    <!-- Scripts -->
    <script>
      // Activate Lucide Icons
      lucide.createIcons();

      // Toast Functionality
      document.addEventListener("DOMContentLoaded", () => {
        const toast = document.getElementById("toast");
        const checkboxes = document.querySelectorAll("input[type='checkbox']");

        function showToast(message) {
          toast.textContent = message;
          toast.classList.add("show");
          setTimeout(() => toast.classList.remove("show"), 2800);
        }

        checkboxes.forEach((box) => {
          box.addEventListener("change", () => {
            showToast(box.checked ? "Skill selected ✅" : "Skill deselected ❌");
          });
        });
      });
    </script>
  </body>
</html>
