<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        projectje
    </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body> 

     <header>
    <?php include_once "includes/header.php";

    $sql = "SELECT * FROM bookingen WHERE users_id = :users_id LIMIT 1";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":users_id", $_SESSION['users_id']);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $item){
        $booking = $item['flights_id'];
    }

    $sql = "SELECT * FROM flights WHERE flights_id = :booking LIMIT 1";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":booking", $booking);
    $stmt->execute();
    $flight = $stmt->fetchAll();


    ?>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->



    <!-- contact section starts  -->

    <section class="contact" id="contact">
        <h1 class="heading">
            <span>Account</span>
        </h1>
        <form action="#" method="post">
        <button name="logout">logout</button>
        <a href="userpanel-edit.php">Edit Account</a>
        </form>
        <?php if(isset($_POST['logout'])){
                session_destroy();
                header('Location: index.php');
            } ?>
        <div class="row">
            <div class="image">
                <img src="images/overOns.jpg" alt="" />
            </div>
            <form action="#" method="post">
            <?php foreach($flight as $item){ ?>
                <input type="hidden" name="booking" value="<?php echo $item['flights_id'] ?>">
                <h1><?php echo $item['destination']; ?></h1>
                <p>€ <?php echo $item['price']; ?></p>
                <p>Start date: <?php echo $item['startDate']; ?></p>
                <p>End date:<?php echo $item['endDate']; ?></p>
                <p>Persons: <?php echo $item['persons']; ?></p>
                <form action="#" method="post">
                    <input type='hidden' value="<?php $item['flights_id']; ?>" name="flights_id" />
                    <button name="cancel">Cancel</button>
                </form>
            <?php
            }
            if(isset($_POST['cancel'])){
                $sql = "DELETE FROM bookingen WHERE flights_id = :flights_id";
                $stmt = $connect->prepare($sql);
                $stmt->bindParam(":flights_id", $_POST['booking']);
                $stmt->execute();
                header("Location: userpanel.php");
            }
            ?>
            </form>
        </div>
    </section>

    <!-- contact section ends -->



    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>
</html>