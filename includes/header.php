<header> 
  <?php include_once "includes/connect.php";?>
  <div id="menu-bar" class="fas fa-bars"></div>

  <a href="#" class="logo"><span>T</span>errific <span>T</span>ravels</a>

  <nav class="navbar">
    <a href="index.php">HOME</a>
    <a href="reizen.php">LOCATIONS</a>
    <a href="overOns.php">ABOUT US</a>
    <a href="contact.php">CONTACT</a>
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