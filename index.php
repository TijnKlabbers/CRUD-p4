<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/main.css" />

  <header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>T</span>ravel</a>

    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#over ons">about us</a>
      <a href="#locaties">locations</a>
      <a href="#contact">contact</a>

    </nav>

    <div class="icons">
      <i class="fas fa-user" id="login-btn"></i>
    </div>

  </header>
</head>

<body>
<video autoplay loop muted plays-inline class= "back-video">
  <source src="Beach.mp4" type="video/mp4">
</video>

  <div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>


    <form action="">
      <h3>login</h3>
      <input type="email" class="box" placeholder="enter your email">
      <input type="password" class="box" placeholder="enter your password">
      <input type="submit" value="login now" class="btn">
      <input type="checkbox" id="remember">
      <label for="remember">remember me</label>
      <p>forget password? <a href="#">click here</a></p>
      <p>don't have an account? <a href="#">register now</a></p>
    </form>

  </div>

  <section class="home" id="home".>
    <div class="content">

    <div class="container">
<form>

  <div class="wrapper">
    <p>search for your dream destination now!</p>
    <div class="search-container">
      <input type="text" class="search" placeholder="Location">
      <input type="text" class="date-from" placeholder="what kind of travel">
      <input type="text" class="date-to" placeholder="which month">
      <button type="submit" class="button">Search</button>
    </div>
  </div>
  
  
</form>
  

</div>

  
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="index.js"></script>
</body>

</html>