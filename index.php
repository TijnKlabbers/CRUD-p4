<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      projectje
    </title>

 

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />


    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <?php include_once "includes/header.php" ?>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <form action="index.php" method="post">
        <h3>login</h3>
        <input type="username" class="box" placeholder="enter your username" name="username" />
        <input type="password" class="box" placeholder="enter your password" name="password"/>
        <input type="submit" value="login now" class="btn" name="loginButton"/>
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="register.php">register now</a></p>
      </form>
      <?php
          if(isset($_POST['loginButton'])){
            $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":username", $_POST['username']);
            $stmt->bindParam(":password", $_POST['password']);
            $stmt->execute();
            $result = $stmt->fetch();

            if(count($result) > 0){
              header("Location: reizen.php");
            }
            else{
                header("Location: login.php");
            }
          }
      ?>
    </div>

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3>naam van ons bedrijf</h3>
        <p>tekst bla bla bla bla</p>
        <a href="#" class="btn">search now</a>
      </div>



      <div class="video-container">
        <video
          src="images/sea.mp4"
          id="video-slider"
          loop
          autoplay
          muted
        ></video>
      </div>
    </section>

    <!-- home section ends -->
  
    <!-- book section starts  -->

    <section class="book" id="book">
      <h1 class="heading">
        <span style="border: 1px solid #3da17b">search now </span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/zand.jpg" alt="" />
        </div>

        <form action="">
          <div class="inputBox">
            <h3>where to</h3>
            <input type="text" placeholder="place name" />
          </div>
          <div class="inputBox">
            <h3>how many</h3>
            <input type="number" placeholder="number of guests" />
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" />
          </div>
          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" />
          </div>
          <input type="submit" class="btn" value="book now" />
        </form>
      </div>
    </section>

    <!-- book section ends -->

   
    <script src="script.js"></script>
  </body>
</html>
