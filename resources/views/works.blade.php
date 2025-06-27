<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My Works</title>
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
      padding: 35px 40px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(255, 111, 0, 0.15);
      margin-bottom: 60px;
      color: #eee;
    }

    h1 {
      color: #ff6f00;
      margin-bottom: 20px;
      font-weight: 700;
      font-size: 32px;
      border-bottom: 3px solid #ff6f00;
      padding-bottom: 8px;
    }

    p {
      font-size: 18px;
      color: #ccc;
      margin-bottom: 30px;
      max-width: 650px;
    }

    ul.projects {
      list-style: none;
      padding: 0;
      margin: 0;
      max-width: 650px;
    }

    ul.projects li {
      background: #292929;
      margin-bottom: 20px;
      border-radius: 12px;
      padding: 18px 20px;
      display: flex;
      align-items: center;
      gap: 15px;
      box-shadow: 0 8px 25px rgba(255, 111, 0, 0.1);
      transition: background-color 0.3s ease;
      cursor: default;
    }

    ul.projects li:hover {
      background-color: #ff6f0030;
      box-shadow: 0 15px 40px rgba(255, 111, 0, 0.4);
    }

    .project-name {
      flex-grow: 1;
      font-weight: 600;
      font-size: 18px;
      color: #ff6f00;
    }

    .icon {
      width: 28px;
      height: 28px;
      fill: #ff6f00;
      flex-shrink: 0;
    }

    /* Cart icon */
    .cart-icon {
      margin-left: 6px;
      stroke: #ff6f00;
      stroke-width: 1.5;
      fill: none;
    }

    /* Language icons */
    .lang-icon {
      width: 24px;
      height: 24px;
      border-radius: 4px;
      background: #ff6f00;
      color: #121212;
      font-size: 14px;
      font-weight: 700;
      display: flex;
      justify-content: center;
      align-items: center;
      user-select: none;
      text-transform: uppercase;
      font-family: monospace;
    }

    /* Back to home link */
    .back-link {
      display: inline-block;
      margin-top: 30px;
      font-weight: 600;
      color: #ff6f00;
      text-decoration: none;
      font-size: 16px;
      border: 2px solid transparent;
      padding: 8px 14px;
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

    /* Responsive */
    @media (max-width: 600px) {
      ul.projects li {
        flex-direction: column;
        align-items: flex-start;
      }

      .icon,
      .lang-icon {
        margin-bottom: 8px;
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
  <h1>My Works</h1>
  <p>Here are some of my recent projects:</p>
  <ul class="projects" aria-label="Projects list">

    <li>
      <span class="project-name">Portfolio Website</span>
      <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false" title="Language: HTML">
        <path fill="#ff6f00" d="M1.5 0h21l-1.9 21.5L12 24l-8.6-2.5L1.5 0zM17.8 6.7H6.2l.3 3h11l-.7 7.3-3.3.9-3.3-1v-2.4h2.7l.1.5 1.7-.5.1-2.3H6.1l-.2-2H18l-.2-2.2z"/>
      </svg>
    </li>

    <li>
      <span class="project-name">Mobile App for Booking</span>
      <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false" title="Language: Flutter">
        <path fill="#ff6f00" d="M20.5 3L6.6 16.9l4.7 4.7 9.2-9.2-4.6-9.4zM11 20.4L7.7 17.1 2.8 22l6.2-1.6z"/>
      </svg>
    </li>

    <li>
      <span class="project-name">E-commerce UI Design</span>
      <svg
        class="icon cart-icon"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        stroke="#ff6f00"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        viewBox="0 0 24 24"
        aria-hidden="true"
        focusable="false"
        title="E-commerce project with cart"
      >
        <circle cx="9" cy="21" r="1"></circle>
        <circle cx="20" cy="21" r="1"></circle>
        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
      </svg>
      <span class="lang-icon" title="UI/UX">UX</span>
    </li>

  </ul>
  <a href="{{ url('/') }}" class="back-link">← Back to Home</a>
</div>

</body>
</html>
