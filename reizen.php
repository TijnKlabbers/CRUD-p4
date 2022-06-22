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
                $_SESSION['users_id'] = $result['users_id'];
                header("Location: adminpanel.php");
                // //sturen naar admin omgeving
                
                //          } else {
                // admin = false;

                //sturen naar homepage
              }
              else{
                $_SESSION['userss_id'] = $result['user_id'];
                $userId = $result['users_id'];
                header("Location: userpanel.php?user_id=" . $userId);
              }
            }
            else{
              header("Location: index.php");
            }
          }
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
          <ul class="rating">
            <li class="rating-item" data-rate="1"></i>
            <li class="rating-item" data-rate="2"></i>
            <li class="rating-item" data-rate="3"></i>
            <li class="rating-item" data-rate="4"></i>
            <li class="rating-item active" data-rate="5"></i>
          </ul>
          <div class="price">$<?php echo $item['price'] ?></div>
          <a href="#" class="btn">book now</a>
        </div>
      </div>
      <?php } ?>
    </div>

    <!-- packages section ends -->


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      const container = document.querySelector('.rating');
      const items = container.querySelectorAll('rating-item')
      container.onclick = e => {
        const elClass = e.target.classList;
        if (!elClass.contains('active')){
          items.forEach(
            item => item.classList.remove('active')
          );
          console.log(e.target.getAttribute("data-rate"));
          elClass.add('active');
        }
      };
    </script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>

</html>