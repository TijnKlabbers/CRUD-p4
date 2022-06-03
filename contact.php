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
    
    <!-- header section starts  -->


    <header>
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
  <?php include_once "includes/header.php"; ?>


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
            <span>contact</span>
         
        </h1>

        <div class="row">
            <div class="image">
                <img src="images/contact.jpg" alt="" />
            </div>

            <form action="contact.php" method="post">
                <div class="inputBox">
                    <input type="text" placeholder="name" name="naam" required/>
                    <input type="email" placeholder="email" name="email" required/>
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number" name="telefoonNummer" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "10"/>
                    <input type="text" placeholder="subject" name="subject" required/>
                </div>
                <textarea placeholder="message" name="bericht" id="" cols="30" rows="10" required></textarea>
                <input type="submit" class="btn" value="send message" name="send" />
            </form>
            <?php 
            if(isset($_POST['send'])){
                $sql = "INSERT INTO contact (naam, email, bericht, telefoonNummer, subject)
                VALUES (:naam, :email, :bericht, :telefoonNummer, :subject)";

                $stmt = $connect->prepare($sql);
                $stmt->bindParam(":naam", $_POST['naam']);
                $stmt->bindParam(":email", $_POST['email']);
                $stmt->bindParam(":bericht", $_POST['bericht']);
                $stmt->bindParam(":telefoonNummer", $_POST['telefoonNummer']);
                $stmt->bindParam(":subject", $_POST['subject']);
                $stmt->execute();
            }
            ?> 
        </div>
    </section>

    <!-- contact section ends -->



    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>

</html>