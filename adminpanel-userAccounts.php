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
     <link rel="stylesheet" href="css/adminPanel-locations.css" />
   </head>
<body>
  <?php include_once "includes/connect.php"; ?>
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
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">User accounts</div>
          <div class="sales-details">
            <ul class="details">
            </ul>
            <ul class="details">
            <li class="topic">Username</li>
            <?php
            $sql = "SELECT * FROM users";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            foreach($result as $item){ ?>
            <li><a href="#"><?php echo $item['username'] ?></a></li>
            <?php } ?>
          </ul>
          <ul class="details">
            <li class="topic">Sales</li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
             <li><a href="#">Pending</a></li>
            <li><a href="#">Delivered</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">$204.98</a></li>
            <li><a href="#">$24.55</a></li>
            <li><a href="#">$25.88</a></li>
            <li><a href="#">$170.66</a></li>
            <li><a href="#">$56.56</a></li>
            <li><a href="#">$44.95</a></li>
            <li><a href="#">$67.33</a></li>
             <li><a href="#">$23.53</a></li>
             <li><a href="#">$46.52</a></li>
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

