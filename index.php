<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      complete responsive tour and travel agency website design tutorial

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
        <input type="username" class="box" placeholder="enter your username" name="username" required/>
        <input type="password" class="box" placeholder="enter your password" name="password" required/>
        <input type="submit" value="login now" class="btn" name="loginButton"/>
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="register.php">register now</a></p>
      </form>
      <?php
          if(isset($_POST['loginButton'])){
            $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":username", $_POST['username']);
            $stmt->bindParam(":password", $_POST['password']);
            $stmt->execute();
            $result = $stmt->fetch();

            if($result && count($result) > 0){
              if ($result['admin'] == 1) {
                // sessiON-['admin'] = true;
                $_SESSION['admin'] = true;
                header("Location: adminpanel.php");
                // //sturen naar admin omgeving
                
                //          } else {
                // admin = false;

                //sturen naar homepage
              }
              else{
                $_SESSION['user_id'] = $result['id'];
              }
            }
            else{
              header("Location: index.php");
            }
          }
      ?>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">

        <h3>TRAVEL POINT</h3>
        <p> Adventure Awaits, Go Find It.</p>
        <a href="#search" class="btn">search now</a>
      </div>



      <div class="video-container">
        <video
          src="img/sea.mp4"

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

          <img src="img/zand.jpg" alt="" />
        </div>

        <form id="search" action="reizen.php" method="get">
          <?php 
          $sql = "SELECT destination FROM flights";
          $stmt = $connect->prepare($sql);
          $stmt->execute();
          $destinationResult = $stmt->fetchAll();
          ?>

          <div class="inputBox">
            <h3>where to</h3>
            <select name="destination">
              <?php foreach($destinationResult as $item){ ?>
              <option><?php echo $item['destination'] ?></option>
                <?php } ?>
            </select>
          </div>
          <div class="inputBox">
            <h3>how many guests</h3>
            <select name="persons">
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" name="startDate"/>
          </div>
          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" name="endDate"/>
          </div>
          <input type="submit" class="btn" value="book now" name="bookNow"/>
        </form>

      </div>
    </section>

    <!-- book section ends -->

   
    <script src="script.js"></script>
  </body>
</html>
