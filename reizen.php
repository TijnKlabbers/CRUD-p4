<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      complete responsive tour and travel agency website design tutorial
    </title>


    <link rel="stylesheet" href="css/style.css">


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

  <?php include_once "includes/header.php";
    if(isset($_GET['locationItem'])){

      $sql = "SELECT * FROM flights WHERE destination LIKE CONCAT('%', :destination, '%')";
  
      $stmt = $connect->prepare($sql);

      $stmt->bindParam(":destination", $_GET['locationItem']);
  
    }
    elseif(isset($_GET['bookNow'])){

      $sql = "SELECT * FROM flights WHERE destination LIKE CONCAT('%', :destnation, '%')

      AND persons LIKE (:persons)
      AND startDate LIKE (:startDate)
      AND endDate LIKE (:endDate)";

      $stmt = $connect->prepare($sql);

      $stmt->bindParam(":destination", $_GET['destination']);
      $stmt->bindParam(":persons", $_GET['persons']);
      $stmt->bindParam(":startDate", $_GET['startDate']);
      $stmt->bindParam(":endDate", $_GET['endDate']);

    }
    else {
  
      $sql = "SELECT * FROM flights";
  
      $stmt = $connect->prepare($sql);
      
    }
  $stmt->execute();
  $result = $stmt->fetchAll();
  ?>


    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">

      <i class="fas fa-times" id="form-close"></i>

<?php include_once "includes/loginForm.php"; ?>
    </div>

   

    <!-- book section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">

      <h1 class="heading2">
        <span>locations</span>
 
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
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">$<?php echo $item['price'] ?></div>
            <a href="#" class="btn">book now</a>
          </div>
      </div>  
        <?php } ?>
</div>

    <!-- packages section ends -->

   
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
  </body>
</html>
