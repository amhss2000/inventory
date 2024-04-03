<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #87CEEB; 
    font-family: Lucida, sans-serif;
  }

  .glow-container {
    position: relative;
    display: inline-block;
    margin-bottom: 20px;
  }

  .glow-img {
    width: 200px; 
    height: 200px; 
    animation: glow 2s ease-in-out infinite alternate;
  }

  @keyframes glow {
    0% {
      box-shadow: 0 0 10px #00f, 0 0 20px #00f, 0 0 30px #00f;
    }
    100% {
      box-shadow: 0 0 20px #00f, 0 0 30px #00f, 0 0 40px #00f;
    }
  }

  .name {
    font-size: 24px;
    color: white;
  }

  .glow-button {
    display: inline-block;
    padding: 10px 20px;
    margin: 10px;
    border: none;
    border-radius: 5px;
    background-color: #f00; /* Red color */
    color: white;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
    animation: glowButton 2s ease-in-out infinite alternate;
  }

  @keyframes glowButton {
    0% {
      box-shadow: 0 0 10px #f00;
    }
    100% {
      box-shadow: 0 0 20px #f00, 0 0 30px #f00, 0 0 40px #f00;
    }
  }
</style>
</head>
<body>
  <div class="glow-container">
    <img class="glow-img" src="applogo.jpg" alt="Glowing Logo">
  </div>
  <div class="name">AMHSS-INVENTORY MANAGEMENT</div>
  <div>
    <a href="entry.php" class="glow-button">Redirect 1</a>
    <a href="admin.php" class="glow-button">Redirect 2</a>
  </div>
</body>
</html>
