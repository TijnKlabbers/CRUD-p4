<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        projectje
    </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    
    <!-- header section starts  -->

    <header>
    <?php include_once "includes/header.php";
    ?>
    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>

        <form class="form2" action="overOns.php" method="post">
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
            }
            else{
              header("Location: index.php");
            }
          }
      ?>
    </div>

    <!-- home section starts  -->



    <!-- contact section starts  -->

    <section class="flex-section alt-hero-banner">
   <div class="column-left">
   <img class="overOnsimg">
   </div>
  <div class="column-right">
          <h1>Shop our most luxurious collection this year</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ante lacinia, congue ante id, ultricies mauris.</p>
    <a href="#"><button class="cta-btn">Shop Now<span class="arrow">❯</span></button></a>
   </div>
  
  
    
</section>

    <!-- contact section ends -->



    <!-- custom js file link  -->
    <script src="script.js"></script>
    <?php include_once "includes/footer.php" ?>
</body>

</html>