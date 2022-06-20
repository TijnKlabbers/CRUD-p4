<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Travel Point

  </title>



  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



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

  <section class="home" id="home">
    <div class="content">

      <h3>TRAVEL POINT</h3>
      <p> Adventure Awaits, Go Find It.</p>
      <a href="#search" class="btn">search now</a>
    </div>



    <div class="video-container">
      <video src="images/sea2.mp4" id="video-slider" loop autoplay muted></video>
      <div class="shadow"></div>
    </div>
    </div>
  </section>


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
        <input type="submit" class="btn" value="book now" name="bookNow" />
      </form>

    </div>
  </section>

  <!-- book section ends -->


  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>