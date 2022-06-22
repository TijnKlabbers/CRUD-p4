<header> 
  <?php include_once "includes/connect.php";?>
  <div id="menu-bar" class="fas fa-bars"></div>

  <a href="#" class="logo"><span>TRAVEL</span><span></span>point</a>

  <nav class="navbar">
    <a href="index.php" >HOME</a>
    <a href="reizen.php">LOCATIONS</a>
    <a href="overOns.php">ABOUT US</a>
    <a href="contact.php">CONTACT</a>
  </nav>

  <?php  
  if(isset($_SESSION['loged'])){
    if($_SESSION['loged'] == false){
      $account = "<a href='userpanel.php' class='fas fa-user'></a>";
    }
    else{
      $account = "<i class='fas fa-user' id='login-btn'></i>";
    }
  }
  else{
    $account = "<i class='fas fa-user' id='login-btn'></i>";
  }
  ?>

  <div class="icons">
    <i class="fas fa-search" id="search-btn"></i>
    <?php echo $account ?>
  </div>

  <form action="reizen.php" class="search-bar-container">
    <input type="search" id="search-bar" placeholder="search here..." name="locationItem"/>
  </form>
</header>
