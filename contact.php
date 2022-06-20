<!DOCTYPE html>
<html class="html2 " lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    complete responsive tour and travel agency website design tutorial
  </title>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- header  -->

  <?php include_once "includes/header.php" ?>


  <!-- header  -->

  <!-- login container  -->

  <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="contact.php" method="post">
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

  <section class="contact" id="contact">

    <h1 class="heading">
      <span>contact</span>


      <div class="row">
        <form action="contact.php" method="post">
          <div class="inputBox">
            <input type="text" placeholder="name" name="naam" required />
            <input type="email" placeholder="email" name="email" required />
          </div>
          <div class="inputBox">
            <input type="number" placeholder="number" name="telefoonNummer" required />
            <input type="text" placeholder="subject" name="subject" required />
          </div>
          <textarea placeholder="message" name="bericht" id="" cols="30" rows="10" required></textarea>
          <input type="submit" class="btn" value="send message" name="send" />
        </form>
        <?php
  if(isset($_POST['send'])){

      $sql = "INSERT INTO contact (naam, email, telefoonNummer, bericht, subject)
      VALUES (:naam, :email, :telefoonNummer, :bericht, :subject)";

      $stmt = $connect->prepare($sql);

      $stmt->bindParam(":naam", $_POST['naam']);
      $stmt->bindParam(":email", $_POST['email']);
      $stmt->bindParam(":telefoonNummer", $_POST['telefoonNummer']);
      $stmt->bindParam(":subject", $_POST['subject']);
      $stmt->bindParam(":bericht", $_POST['bericht']);
      $stmt->execute();
  }
?>
      </div>
      </div>

  </section>

  <!-- contact -->



  <!-- custom js file link  -->
  <script src="script.js"></script>
</body>

</html>