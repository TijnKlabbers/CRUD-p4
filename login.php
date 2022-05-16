<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
  <link rel="stylesheet" href="css/login.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <!--<img src="images/frontImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login</div>
          <form id="loginForm" name="loginForm" action="login.php" method="post">  <!--loginForm-->
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your username" name="username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="loginButton">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">Signup</div>
          <form action="login.php" method="post">   <!--SignupForm-->
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="signupButton">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
          </form>
          <?php include_once "includes/connect.php";
    
    if(isset($_POST['loginButton'])){
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $resultCount = $stmt->rowCount();

        // var_dump($resultCount);


        if($resultCount > 0){
            header("Location: index.php");
        }
        else{
            header("Location: login.php");
        }
    }

    if(isset($_POST['signupButton']))


?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>