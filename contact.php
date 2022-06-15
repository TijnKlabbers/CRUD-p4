<!DOCTYPE html>
<html lang="en">

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
  <!-- header section starts  -->

  <?php include_once "includes/header.php" ?>


  <!-- header section ends -->

  <!-- login form container  -->

  <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <?php include_once "includes/loginForm.php" ?>

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

  <!-- contact section ends -->



  <!-- custom js file link  -->
  <script src="script.js"></script>
</body>

</html>