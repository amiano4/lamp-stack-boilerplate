<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP Development Workspace</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
      background: linear-gradient(120deg, #f9f9f9, #e3e8f0);
      color: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      text-align: center;
      max-width: 600px;
      padding: 40px;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
      animation: fadeIn 1s ease-out;
    }

    h1 {
      font-size: 2rem;
      margin-bottom: 0.6em;
      color: #1a73e8;
    }

    p {
      color: #555;
      font-size: 1rem;
      margin: 0.5em 0;
    }

    code {
      background-color: #f1f3f4;
      padding: 0.25em 0.5em;
      border-radius: 5px;
      font-family: Menlo, Consolas, monospace;
      font-size: 0.95em;
    }

    .emoji {
      font-size: 2rem;
      margin-bottom: 0.5em;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="emoji">🚀</div>
    <h1>Welcome to Your PHP Workspace</h1>
    <p>This is your <code>/projects</code> directory — a clean slate for all your future web projects.</p>
    <p>To begin, add a new folder inside <code>projects/</code></p>
    <p>Then access it via <code>http://localhost:8080/your-project/</code></p>
  </div>
</body>

</html>
