<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login • YourBrand</title>


  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>

  <script src="https://kit.fontawesome.com/a2e0e6b1e3.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="logo"></div>
      <form action="../Back-End/index.php" method="GET" class="form">

        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="user-login" required />
          <label>Username</label>
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password-login" required />
          <label>Password</label>
        </div>

        <div class="buttons-row">
          <a href="../SignIn/Froent-End/index.php" class="btn-link">Sign in</a>
          <button class="btn-submit" type="submit">Login</button>
        </div>

      </form>
      <div class="footer-text">
        © 2025 Ammar. All rights reserved.
      </div>
    </div>
  </div>
  <?php if(isset($_GET["error"])): ?>
    <p class="use">Bad username or password</p>
  <?php elseif(isset($_GET["success"])): ?>
    <p class="suc">good login</p>
  <?php endif; ?>
</body>
</html>

