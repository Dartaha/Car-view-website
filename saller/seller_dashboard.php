<?php
$name = $_GET['name'];
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
</head>
<link rel="stylesheet" href="../style.css">
<body>
    <header class="site-header">
        <div class="container header-inner">
          <a class="brand" href="home.php">
            <span class="brand-mark" aria-hidden="true">AM</span>
            <span class="brand-name">Ancient Motor</span>
          </a>

          <nav class="nav" aria-label="Primary">
            <a href="home.php#featured">Featured</a>
            <a href="home.php#about">About</a>
            <a href="home.php#contact">Contact</a>
          </nav>

          <div class="header-cta">
            <a class="secondary-button header-cta-secondary" href="login.php">Log in</a>
            <a class="cta-button" href="singup.php">Sign up</a>
          </div>
        </div>
    </header>
  <main>
    <div class="profil">
        <div class="pfp">
            <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?cs=srgb&dl=pexels-pixabay-415829.jpg&fm=jpg" alt="prodile">
        </div>
        <div class="details">
            <h1><?php echo $name ?></h1>
            <div class="sellsinfo">
                <h3>Total car sells</h3>
            </div>
        </div>
    </div>
</div>
  </main>
</body>
</html>