<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>

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


      <form id="form" action="index.php" method="post">
        <h3>login</h3>
        <input id="username" type="username" class="box" placeholder="enter your username" name="username" required/>
        <input id="password" type="password" class="box" placeholder="enter your password" name="password" required/>
        <input type="submit" value="login now" class="btn" name="loginButton"/>
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forget password? <a href="contact.php">click here</a></p>
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
                $_SESSION['admin'] = true;
                $_SESSION['users_id'] = $result['users_id'];
                header("Location: adminpanel.php");

              }
              elseif($result['admin'] == 0){
                $_SESSION['users_id'] = $result['users_id'];
                $_SESSION['loged'] = true;
                header("Location: userpanel.php?users_id=" . $result['users_id']);
              }
              else{
                header("Location: index.php");

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
            <select name="destination" required>
              <?php foreach($destinationResult as $item){ ?>
              <option><?php echo $item['destination'] ?></option>
                <?php } ?>
            </select>
          </div>
          <div class="inputBox">
            <h3>how many guests</h3>
            <select name="persons" required>
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" name="startDate" required/>
          </div>
          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" name="endDate" required/>
          </div>
          <input type="submit" class="btn" value="book now" name="bookNow"/>
        </form>

      </div>
    </section>

    <!-- book section ends -->

   
    <script src="script.js"></script>
    <?php include_once "includes/footer.php" ?>
    <script src="js/login.js"></script>
  </body>
</html>
