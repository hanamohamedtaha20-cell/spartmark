<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign in | SparkMart</title>
  <link rel="stylesheet" href="login.css">
  
</head>
<body>

  <div class="login-container">
    <div class="login-box">
      
      <!-- Logo -->
      <div class="logo">
        <h1><a href="#">SparkMart</a></h1>
        <form method="post" action="login_post.php">
      </div><br>

      

      <!-- Form -->
      <form>
        <div class="input-group">
          <label>Email or Mobile Number</label>
          <input type="text" placeholder="Enter your email or mobile" required />
        </div>

        <div class="input-group">
          <label>Password</label>
          <input type="password" placeholder="Enter your password" required />
        </div>

        <div class="options">
          <label class="remember">
            <input type="checkbox" checked>
            <span class="checkmark"></span>
            Keep me signed in
          </label>
          <a href="#" class="forgot">Forgot password?</a>
        </div>

        <button type="submit" class="signin-btn">Sign In</button>
      </form>

      <div class="divider">
        <span>or</span>
      </div>

      <!-- Sign up link -->
      <p class="signup-text">
        Don't have an account? <a href="register.php">Create account</a>
      </p>
    </div>
  </div>

</body>
</html>