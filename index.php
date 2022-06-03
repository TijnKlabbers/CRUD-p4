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


    <header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="#" class="logo"><span>T</span>ravel</a>

      <nav class="navbar">
        <a href="index.php">home</a>
        <a href="reizen.php">locations</a>
        <a href="overOns.php">about us</a>
        <a href="contact.php">contact</a>

      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here..." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>


      <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email" />
        <input type="password" class="box" placeholder="enter your password" />
        <input type="submit" value="login now" class="btn" />
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
      </form>

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
        <span style="border: 1px solid #3da17b">book now </span>

      </h1>

      <div class="row">
        <div class="image">

          <img src="img/zand.jpg" alt="" />
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
