<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      complete responsive tour and travel agency website design tutorial
    </title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />



    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
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



    <!-- contact section starts  -->

    <section class="contact" id="contact">

      <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/contact-img.svg" alt="" />
        </div>

        <form action="">
          <div class="inputBox">
            <input type="text" placeholder="name" />
            <input type="email" placeholder="email" />
          </div>
          <div class="inputBox">
            <input type="number" placeholder="number" />
            <input type="text" placeholder="subject" />
          </div>
          <textarea
            placeholder="message"
            name=""
            id=""
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" class="btn" value="send message" />
        </form>
      </div>

    </section>

    <!-- contact section ends -->

  

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>

