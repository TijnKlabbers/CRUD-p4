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
     $sql = "SELECT * FROM bookingen";
     $stmt = $connect->prepare($sql);
     $stmt->execute();
     $result = $stmt->fetchAll();
     ?>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->



    <!-- contact section starts  -->

    <section class="contact" id="contact">
        <h1 class="heading">
            <span>Account</span>
         
        </h1>

        <div class="row">
            <div class="image">
                <img src="images/overOns.jpg" alt="" />
            </div>

            <form action="#" method="post">
            <button name="logout">logout</button>
            </form>
            <?php if(isset($_POST['logout'])){
                session_destroy();
                header('Location: index.php');
            } ?>
        </div>
    </section>

    <!-- contact section ends -->



    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>
</html>