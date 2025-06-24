<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* General Reset */
    body, h1, h2, p, a, ul, li {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body Styling */
    body {
      font-family: 'Arial', sans-serif;
      background: radial-gradient(ellipse at bottom, #1b2735, #090a0f);
      color: #f0f8ff;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }

    /* Header Styling */
    header {
      width: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      padding: 10px 0;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .nav-bar {
      list-style: none;
      display: flex;
      align-items: center;
      margin: 0;
      padding: 0;
    }

    .nav-bar li {
      margin: 0 15px;
    }

    .nav-bar a {
      color: #f0f8ff;
      text-decoration: none;
      font-size: 1rem;
      font-weight: bold;
      transition: color 0.3s ease, transform 0.2s ease;
    }

    .nav-bar a:hover {
      color: #f39c12;
      transform: scale(1.1);
    }

    .logo {
      height: 50px;
      margin-left: 20px;
    }

    /* Main Content Styling */
    main {
      margin-top: 80px;
      width: 90%;
      max-width: 1200px;
      padding: 30px;
    }

    /* Welcome Content */
    .welcome-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .welcome-header h1 {
      font-size: 2.5rem;
      color: #f39c12;
    }

    .welcome-header p {
      font-size: 1.2rem;
      color: #f0f8ff;
    }

    /* Quick Links */
    .quick-links h2 {
      font-size: 2rem;
      color: #f39c12;
      margin-top: 40px;
      margin-bottom: 20px;
    }

    .links-container {
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .link-item {
      background: rgba(255, 255, 255, 0.1);
      padding: 20px;
      border-radius: 10px;
      width: 30%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
      text-align: center;
    }

    .link-item a {
      font-size: 1.2rem;
      font-weight: bold;
      color: #f39c12;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .link-item a:hover {
      color: #f0f8ff;
    }

    /* About Us */
    .about-section {
      margin-top: 40px;
      text-align: center;
    }

    .about-section h2 {
      font-size: 2rem;
      color: #f39c12;
      margin-bottom: 20px;
    }

    /* Featured Events */
    .featured-events {
      margin-top: 40px;
      text-align: center;
    }

    .event-list {
      display: flex;
      justify-content: space-around;
      gap: 20px;
    }

    .event-item {
      background: rgba(255, 255, 255, 0.1);
      padding: 20px;
      border-radius: 10px;
      width: 30%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
    }

    .event-item h3 {
      font-size: 1.8rem;
      color: #f39c12;
      margin-bottom: 10px;
    }

    .event-item p {
      color: #f0f8ff;
      font-size: 1rem;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.8);
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    footer p {
      color: #f0f8ff;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
      <div style="display: flex; gap: 10px; margin-bottom: 20px;">
        <button style="background-color: #007bff; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease;">
    <a href="login.php" style="color: white; text-decoration: none; display: inline-block;">Login</a>
  </button>

  <button style="background-color: rgb(141, 10, 102); color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease;">
    <a href="register.php" style="color: white; text-decoration: none; display: inline-block;">Register</a>
  </button>
  </div>

  <main>
    <section class="welcome-content">
      <div class="welcome-header">
        <h1>Welcome to Rotalog</h1>
        <p>Get involved in our events, announcements, and exciting community activities!</p>
      </div>

      <div class="quick-links">
        <h2>Quick Links</h2>
        <div class="links-container">
          <div class="link-item">
            <a href="recentevents.php">Recent Events</a>
            <p>Catch up with our latest events and activities.</p>
          </div>
          <div class="link-item">
            <a href="upcoming.php">Upcoming Events</a>
            <p>Stay informed about upcoming events and initiatives.</p>
          </div>
          <div class="link-item">
            <a href="announcements.php">Announcements</a>
            <p>Stay updated with important announcements and news.</p>
          </div>
        </div>
      </div>

      <div class="about-section">
        <h2>About Us</h2>
        <p>We are a group of passionate individuals dedicated to organizing community events that foster engagement, learning, and collaboration. From workshops to social events, we strive to create meaningful experiences that bring people together.</p>
      </div>

      <div class="featured-events">
        <h2>Featured Events</h2>
        <div class="event-list">
          <div class="event-item">
            <h3>World AIDS Day Awareness</h3>
            <p>Date: December 1, 2024</p>
            <p>An impactful awareness campaign aimed at educating the community about World AIDS Day.</p>
          </div>
          <div class="event-item">
            <h3>Old Age Home Visit</h3>
            <p>Date: November 30, 2024</p>
            <p>A heartwarming visit to an old age home to bring joy and engage in activities with the elderly.</p>
          </div>
          <div class="event-item">
            <h3>Industrial Visit to Gadag</h3>
            <p>Date: November 15-17, 2024</p>
            <p>A comprehensive industrial visit that offered insight into various industries and their operations.</p>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
