
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Me</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0 20px;
      background: #121212;
      color: #eee;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
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
      background: #1e1e1e;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(255, 111, 0, 0.15);
      max-width: 600px;
      width: 100%;
      margin-bottom: 60px;
    }

    h1 {
      text-align: center;
      color: #ff6f00;
      margin-bottom: 30px;
    }

    label {
      font-weight: 600;
      display: block;
      margin-bottom: 8px;
      color: #ccc;
    }

    input, textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      background: #292929;
      border: 1px solid #444;
      color: #eee;
      border-radius: 8px;
      font-size: 16px;
      outline: none;
      transition: border 0.3s ease;
    }

    input:focus,
    textarea:focus {
      border-color: #ff6f00;
    }

    button {
      background: #ff6f00;
      color: #121212;
      border: none;
      padding: 12px 25px;
      cursor: pointer;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      transition: background 0.3s;
      box-shadow: 0 6px 20px rgba(255, 111, 0, 0.3);
      display: block;
      margin: auto;
    }

    button:hover {
      background: #ffa040;
      box-shadow: 0 8px 25px rgba(255, 111, 0, 0.5);
    }

    p a {
      display: inline-block;
      margin-top: 25px;
      text-align: center;
      width: 100%;
      color: #ff6f00;
      text-decoration: none;
      transition: color 0.3s;
    }

    p a:hover {
      color: #ffa040;
    }

    @media (max-width: 600px) {
      nav {
        flex-direction: column;
      }

      .container {
        padding: 25px;
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
    <a href="{{ url('/achievements') }}">Achievements</a>
    <a href="{{ url('/education') }}">Education</a>
    <a href="{{ url('/experiences') }}">Experiences</a>
    <a href="{{ url('/skills') }}">Skills</a>
    <a href="{{ url('/projects') }}">Projects</a>
    <a href="{{ url('/infos') }}">Infos</a>
  </nav>

  <div class="container">
    <h1>Contact Me</h1>
    <form method="POST" action="#">
      @csrf
      <label for="name">Name:</label>
      <input id="name" type="text" name="name" required />

      <label for="email">Email:</label>
      <input id="email" type="email" name="email" required />

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Send Message</button>
    </form>

    <p><a href="{{ url('/') }}">← Back to Home</a></p>
  </div>

</body>
</html>
