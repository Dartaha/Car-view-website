<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Log in | Ancient Motor</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body class="login-page">
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
        <a class="secondary-button header-cta-secondary" href="singup.php">Sign up</a>
        <a class="cta-button" href="login.php" aria-current="page">Log in</a>
      </div>
    </div>
  </header>

  <main class="login-main">
    <div class="container login-wrap">
      <div class="login-card">
        <p class="eyebrow login-eyebrow">Welcome back</p>
        <h1 class="login-title">Sign in to your account</h1>
        <p class="login-lead">Choose how you use Ancient Motor, then enter your details.</p>

        <form class="login-form" action="acc_type.php" method="post">
          <input type="hidden" name="form_type" value="login" />

          <fieldset class="role-fieldset" aria-label="Account type">
            <div class="role-switch" role="radiogroup" aria-label="Buyer or seller">
              <label class="role-option">
                <input type="radio" name="role" value="buyer" checked />
                <span class="role-text">
                  <span class="role-label">Buyer</span>
                  <span class="role-hint">Browse &amp; buy cars</span>
                </span>
              </label>
              <label class="role-option">
                <input type="radio" name="role" value="seller" />
                <span class="role-text">
                  <span class="role-label">Seller</span>
                  <span class="role-hint">List &amp; sell cars</span>
                </span>
              </label>
            </div>
          </fieldset>

          <label>
            <span>Email</span>
            <input type="email" name="email" autocomplete="email" placeholder="you@example.com" required />
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password" autocomplete="current-password" placeholder="••••••••" required />
          </label>

          <div class="login-row">
            <label class="login-remember">
              <input type="checkbox" name="remember" />
              <span>Remember me</span>
            </label>
            <a class="login-forgot muted-link" href="#">Forgot password?</a>
          </div>

          <button class="primary-button full" type="submit">Sign in</button>
          <p class="form-note login-note">
            New here? <a class="muted-link" href="singup.php">Create an account</a> ·
            <a class="muted-link" href="home.php">Home</a>
          </p>
        </form>
      </div>
    </div>
  </main>

  <footer class="site-footer login-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <span class="brand-mark" aria-hidden="true">AM</span>
        <div>
          <div class="footer-title">Ancient Motor</div>
          <div class="footer-subtitle">Quality used cars • Transparent deals</div>
        </div>
      </div>

      <div class="footer-links" aria-label="Footer links">
        <a href="home.php#featured">Featured</a>
        <a href="home.php#about">About</a>
        <a href="home.php#contact">Contact</a>
        <a href="login.php">Log in</a>
        <a href="singup.php">Sign up</a>
      </div>

      <div class="footer-copy">
        <p>© <?php echo date('Y'); ?> Ancient Motor. All rights reserved.</p>
      </div>
    </div>
  </footer>
</body>
</html>
