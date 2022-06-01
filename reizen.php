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

    <?php include_once "includes/header.php" ?>

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



    <!-- book section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">
        <h1 class="heading2">
            <span>locations</span>

        </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/paris.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Paris</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Veritatis, nam!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/london.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> London</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Veritatis, nam!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/china.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> China</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Veritatis, nam!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/egypt.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Egypt</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Veritatis, nam!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/spain.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Spain</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Veritatis, nam!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">$90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>



            <!-- packages section ends -->


            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- custom js file link  -->
            <script src="js/script.js"></script>
</body>

</html>