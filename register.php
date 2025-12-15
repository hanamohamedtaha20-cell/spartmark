<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container" id="signup" >
      <h1 class="input-title">Register</h1>
      <form method="post" action="register_post.php">
       <?php 
if (isset($user_error)) {
    echo $user_error;
}
?>
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" >
           <label for="fname">First Name</label>
        </div>
        <span style="color: red;">
        <?php 
if (isset($_GET['user_error'])) {
    echo $_GET['user_error'];
}
?>
</span>

        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" >
            <label for="lName">Last Name</label>
        </div>
        <span style="color: red;">
        <?php 
if (isset($_GET['last_name_error'])) {
    echo $_GET['last_name_error'];
}
?>
</span>

        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="text" name="email" id="email" placeholder="Email" >
            <label for="email">Email</label>
        </div>
        <span style="color: red;">
        <?php 
        if (isset($_GET['email_error'])) {
            echo $_GET['email_error'];
        }
?>

</span>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" >
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or-------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton"><a href="login.php">Sign in</a></button>
      </div>
    </div>

    <div class="container" id="signIn" style="display:none;">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" >
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" >
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton" > Sign up
        </button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>