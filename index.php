<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container"  id="signup" style="display: none;">
    <h1 class="form-title">Register</h1>
    <form action="register.php" method="post">
      <div class="input-guroup">
        <input type="text" name="fname" id="fname" placeholder="first name">
        <label for="fname">Fname</label>
      </div>
       <div class="input-guroup">
        <input type="text" name="lname" id="lname" placeholder="flast name">
        <label for="lname">Lname</label>
      </div>
       <div class="input-guroup">
        <input type="email" name="email" id="email" placeholder="email">
        <label for="email">Email</label>
      </div>
       <div class="input-guroup">
        <input type="password"  id="password" placeholder="password" name="password">
        <label for="password">Password</label>
      </div>
      <input type="submit" class="btn" value="signup" name="signup">
    </form>
    <p class="or">----------or---------</p>
    <div class="links">
      <p>Already have account</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>


    <div class="container"  id="signin">
    <h1 class="form-title">Sign In</h1>
    <form action="register.php" method="post">
    
       <div class="input-guroup">
        <input type="email" name="email" id="email" placeholder="email">
        <label for="email">Email</label>
      </div>
       <div class="input-guroup">
        <input type="password"  id="password" placeholder="password" name="password">
        <label for="password">Password</label>
      </div>
      <p class="recover">

        <a href="#">Recover Password</a>
      </p>
      <input type="submit" class="btn" value="sign In" name="signin">
    </form>
    <p class="or">----------or---------</p>
    <div class="links">
      <p>Dont't have account yet?</p>
      <button id="signUpButton">Sign Up</button>
    </div>
  </div>

  <script src="pacman.js"></script>
  
</body>
</html>
