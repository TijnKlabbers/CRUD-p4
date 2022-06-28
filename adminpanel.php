<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/adminPanel.css" />
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">Travel Point</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminpanel.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="adminpanel-locations.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">locations</span>
          </a>
        </li>
        <li>
        <a href="adminpanel-userAccounts.php">

            <i class='bx bx-list-ul' ></i>
            <span class="links_name">user accounts</span>
          </a>
        </li>
        <li>
          <a href="adminpanel-bookedTravels.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Bookings</span>
          </a>
        </li>
        <li>
          <a href="adminpanel-contact.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Contact</span>
          </a>
        </li>
        <li class="log_out">
          <form action="adminpanel.php" method="post">
          <button name="logout">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </button>
        </form>
          <?php if(isset($_POST['logout'])){
          $_SESSION['admin'] = false;
          $_SESSION['users_id'] = false;
          header("Location: index.php");
          } ?>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
      </div>
    </nav>

  
    <div class="home-content">
      <div class="overview-boxes">

        <?php include_once "includes/connect.php";
        $sql = "SELECT COUNT(flights_id) as total_flights FROM flights";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $totalTravels = $stmt->fetch();
        ?>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total travels</div>
            <div class="number"><?php echo $totalTravels['total_flights']; ?></div>

            <div class="indicator">
            </div>
          </div>
        </div>

        <?php
        $sql = "SELECT COUNT(users_id) as total_users FROM users WHERE admin = 0";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $totalUsers = $stmt->fetch();
        ?>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total accounts</div>
            <div class="number"><?php echo $totalUsers['total_users']; ?></div>
            <div class="indicator">
            </div>
          </div>
        </div>

        <?php 
        $sql = "SELECT COUNT(contact_id) as total_message FROM contact";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $totalMessage = $stmt->fetch();
        ?>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total messages</div>
            <div class="number"><?php echo $totalMessage['total_message']; ?></div>
            <div class="indicator">
            </div>
          </div>
        </div>

        <?php 
        $sql = "SELECT COUNT(reviews_id) as total_reviews FROM reviews";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $totalReviews = $stmt->fetch();
        ?>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total reviews </div>
            <div class="number"><?php echo $totalReviews['total_reviews']; ?></div>
            <div class="indicator">
            </div>
          </div>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Travel locations</div>
          <div class="sales-details">
            <ul class="details">
            </ul>
            <ul class="details">
            <li class="topic">Location</li>
            <?php 
            $sql = "SELECT destination, persons, price FROM flights LIMIT 9";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $flightsResult = $stmt->fetchAll();

            foreach($flightsResult as $item){
            ?>
            <li><a href="#"><?php echo $item['destination']; ?></a></li>
            <?php } ?>
          </ul>
          <ul class="details">
            <li class="topic">Persons</li>
            <?php 
            foreach($flightsResult as $item){ ?>
            <li><a href="#"><?php echo $item['persons']; ?></a></li>
            <?php } ?>
          </ul>
          <ul class="details">
            <li class="topic">Price</li>
            <?php foreach($flightsResult as $item){ ?>
            <li><a href="#"><?php echo $item['price']; ?></a></li>
            <?php } ?>
          </ul>
          </div>
          <div class="button">
            <a href="adminpanel-locations.php">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Users</div>
          <ul class="top-sales-details">
            <?php
            $sql = "SELECT * FROM users WHERE admin = 0 limit 10";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll();         

            foreach($users as $item){ ?>
            <li>
            <a href="#">
              <!--<img src="images/sunglasses.jpg" alt="">-->
              <span class="product"><?php echo $item['username'] ?></span>
            </a>
          </li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

