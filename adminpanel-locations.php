<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>--> 
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
          <div class="title">Travel locations</div>
          <div class="sales-details">
            <ul class="details">
            </ul>
            <ul class="details">
            <li class="topic">Location</li>
            <?php
            $sql = "SELECT * FROM flights";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $item){?>
            <li><a href="adminpanel-edit-flights.php?flights_id=<?php echo $item['flights_id'] ?>"><?php echo $item['destination']; ?></a></li>
            <?php } ?>
          </ul>
          <ul class="details">
            <li class="topic">Persons</li>
            <?php foreach($result as $item){ ?>
            <li><a href="adminpanel-edit-flights.php?flights_id=<?php echo $item['flights_id'] ?>"><?php echo $item['persons'] ?></a></li>
            <?php } ?>  
          </ul>
          <ul class="details">
            <li class="topic">Price</li>
            <?php foreach($result as $item){ ?>
            <li><a href="adminpanel-edit-flights.php?flights_id=<?php echo $item['flights_id'] ?>"><?php echo $item['price'] ?></a></li>
            <?php } ?>
          </ul>
          <ul>
            <li class="topic">delete</li>
            <form action="adminpanel-locations.php" method="post">
            <?php foreach($result as $item){?>
            <input type="hidden" name="id" value="<?php echo $item['flights_id'] ?>">
            <li><button class="delete" name="delete">delete</button></li>
            <?php } 
            if(isset($_POST['delete'])){
            $sql = "DELETE FROM flights WHERE flights_id = :id";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":id", $_POST['id']);
            $stmt->execute();
            header("Location: adminpanel.php");
            }
            ?>
            </form>
          </ul>
          </div>
          <a class="add" href="adminpanel-add-flights.php">add</a>
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

