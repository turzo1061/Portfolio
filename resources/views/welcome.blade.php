<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Shovan's Professional Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    /* Same styling as before */
    /* Only the important parts below are updated/added for professional polish */

    .card p {
      font-size: 15px;
      line-height: 1.5;
    }

    .about-section {
      background: #292929;
      padding: 30px;
      border-radius: 20px;
      margin-bottom: 50px;
      box-shadow: 0 8px 30px rgba(255, 111, 0, 0.1);
    }

    .about-section h3 {
      color: #ff6f00;
      font-size: 26px;
      margin-bottom: 15px;
    }

    .about-section p {
      color: #ccc;
      font-size: 17px;
      line-height: 1.7;
    }

    .projects-section {
      background: #292929;
      padding: 30px;
      border-radius: 20px;
      margin-bottom: 50px;
      box-shadow: 0 8px 30px rgba(255, 111, 0, 0.1);
    }

    .projects-section h3 {
      color: #ff6f00;
      font-size: 26px;
      margin-bottom: 20px;
    }

    .project {
      background: #1e1e1e;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 15px;
      transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(255, 111, 0, 0.1);
    }

    .project:hover {
      background: #2d2d2d;
      transform: translateY(-5px);
    }

    .project h4 {
      color: #ffa040;
      margin-bottom: 10px;
    }

    .project p {
      color: #ccc;
      font-size: 15px;
    }
  </style>
</head>
<body>
  <!-- nav, intro, and container remain same -->

  <div class="container">
    <!-- Header -->
    <!-- Cards -->

    <!-- About Section -->
    <section class="about-section">
      <h3>About Me</h3>
      <p>
        I'm a passionate front-end and mobile developer with a strong foundation in Flutter, C++, and Python.
        With 2+ years of freelance and internship experience, I've developed a keen eye for clean design and optimized user interfaces.
        I enjoy solving real-world problems with code and delivering delightful digital products.
      </p>
    </section>

    <!-- Project Section -->
    <section class="projects-section">
      <h3>Highlighted Projects</h3>
      <div class="project">
        <h4>Travel App UI (Flutter)</h4>
        <p>Developed a full-featured travel app UI with custom animations, search filtering, and elegant layout transitions using Flutter.</p>
      </div>
      <div class="project">
        <h4>Responsive Portfolio Website</h4>
        <p>A sleek and fast-loading personal portfolio built using HTML, CSS, and JavaScript with dark mode support and mobile responsiveness.</p>
      </div>
      <div class="project">
        <h4>E-commerce Dashboard</h4>
        <p>Designed an admin dashboard interface with product analytics, sales statistics, and live data charts using Flutter Web.</p>
      </div>
    </section>

    <!-- Skills and Experience (same as before) -->
  </div>

  <!-- Footer remains unchanged -->
</body>
</html>