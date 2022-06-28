<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
  </title>


  <link rel="stylesheet" href="css/style.css">


  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- header section starts  -->

  <?php include_once "includes/header.php";
    if(isset($_GET['locationItem'])){

      $sql = "SELECT * FROM flights WHERE destination LIKE CONCAT('%', :destination, '%')";
  
      $stmt = $connect->prepare($sql);

      $stmt->bindParam(":destination", $_GET['locationItem']);
  
    }
    else {
      if(isset($_GET['bookNow'])){
        $searchQuery = '%'.$_GET['destination'].'%';
  
        $sql = "SELECT * FROM flights WHERE destination LIKE :destination
        AND persons = :persons
        AND startDate < :startDate
        AND endDate > :endDate";
  
        $stmt = $connect->prepare($sql);
  
        $startDateConverted = date("Y-m-d", strtotime($_GET['startDate']));
        $endDateConverted = date("Y-m-d", strtotime($_GET['endDate']));
  
        $stmt->bindParam(":destination", $searchQuery);
        $stmt->bindParam(":persons", $_GET['persons']);
        $stmt->bindParam(":startDate", $startDateConverted);
        $stmt->bindParam(":endDate", $endDateConverted);
  
      }else{
  
        $sql = "SELECT * FROM flights";
  
        $stmt = $connect->prepare($sql);
      }
      
    }
  $stmt->execute();
  $result = $stmt->fetchAll();
  ?>


  <!-- header section ends -->

  <!-- login form container  -->

  <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="reizen.php" method="post">
        <h3>login</h3>
        <input type="username" class="box" placeholder="enter your username" name="username" required/>
        <input type="password" class="box" placeholder="enter your password" name="password" required/>
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
            $login = $stmt->fetch();

            if($login && count($login) > 0){
              
              if ($login['admin'] == 1) {
                $_SESSION['admin'] = true;
                $_SESSION['users_id'] = $login['users_id'];
                header("Location: adminpanel.php");

              }
              elseif($login['admin'] == 0){
                $_SESSION['users_id'] = $login['users_id'];
                $_SESSION['loged'] = true;
                header("Location: userpanel.php?users_id=" . $login['users_id']);
              }
              else{
                header("Location: index.php");

              }
            }
            else{
              header("Location: index.php");
            }
          }

          $sql = "SELECT AVG(stars) as avgstars FROM reviews WHERE flights_id = flights_id";
          $stmt = $connect->prepare($sql);
          $stmt->execute();
          $AVGstars = $stmt->fetch();
      ?>
  </div>



  <!-- book section ends -->

  <!-- packages section starts  -->

  <section class="packages" id="packages">

    <h1 class="heading">
      <span>LOCATIONS</span>

    </h1>
    <div class="box-container">
      <?php foreach ($result as $item){ ?>

      <div class="box">
        <img src="img/paris.jpg" alt="" />
        <div class="content">
          <h3><i class="fas fa-map-marker-alt"></i> <?php echo $item['destination'] ?></h3>
          <p>
            <?php echo $item['description'] ?>
          </p>

            <!-- Gemiddeld ophalen van DEZE SPECIFIEKE REISID - Dan de class ACTIVE geven aan de gemiddelde. Doen met PHP -->
          <form action='includes/addReview.php' method='post'>
            <input type='text' name='flights_id' value='<?php echo $item['flights_id'] ?>' />
          <ul class="rating">
            <?php for ($i = 1; $i < 6; $i++){?>
            <li class="rating-item" data-rate="<?php echo $i ?>"></i>
            <?php } ?>
          </ul>
          <form action='includes/addReview.php' method='post'>
            <input type='text' name='flights_id' value='<?php echo $AVGstars['avgstars'] ?>' />

            <input type='text' name='stars' id='rating' />
            <input type='submit' name='submit' id='submit' value='Geef review' />
          </form>
          <div class="price">$<?php echo $item['price'] ?></div>
          <form action="#" method="post">
            <?php 
            if(isset($_SESSION['loged'])){
              if($_SESSION['loged'] == true){ ?>
            <button name="book">Book now</button>
            <?php }} else {?>
              <p>Log in</p>
           <?php } ?>
          </form>
          <?php
          if(isset($_POST['book'])){

            $users_id = $_SESSION['users_id'];

            $sql = "INSERT INTO bookingen (users_id, flights_id)
            VALUES (:users_id, :flights_id)";

            $stmt = $connect->prepare($sql);

            $stmt->bindParam(":users_id", $users_id);
            $stmt->bindParam(":flights_id", $item['flights_id']);

            $stmt->execute();
            header("Location: userpanel.php");
          }
          ?>
        </div>
      </div>
      <?php } ?>
    </div>

    <!-- packages section ends -->

    <?php include_once "includes/footer.php" ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      const items = document.querySelectorAll('.rating-item')
      const input = document.querySelector('#rating');
      const submit = document.querySelector('#submit');

      items.forEach(
        (item) => {
          item.addEventListener('click', (e) => {
            items.forEach(
              (itempie) => {
                itempie.classList.remove('active');
              });
            const rating = e.target.getAttribute("data-rate");
            console.log(rating);
            input.value = rating;
            item.classList.add('active');

            submit.style.display = 'block';
          })
        }
      );
    </script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
 
</body>

</html>