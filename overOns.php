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
    <?php include_once "includes/header.php";
    ?>
    </header>

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
            <span>ABOUT US</span>
         
        </h1>

        <div class="row">
            <div class="image">
                <img src="images/overOns.jpg" alt="" />
            </div>

            <form action="">
             <p class="tekst">Lorem ipsum dolor sit amet. Aut quidem odit At iste natus ea molestiae ipsum est ipsum omnis. Et alias maxime 33 necessitatibus mollitia aut voluptatibus dolor quo minima expedita ut deleniti veniam vel quasi voluptates. </p>
             <p class="tekst">Quo optio dolorem et perferendis voluptas ut iste voluptates. Eos debitis dignissimos qui amet voluptatum quo sequi vero nam expedita libero sit velit ullam? Id architecto perspiciatis vel numquam ipsum qui quisquam iusto ut voluptate veniam ea Quis quasi. Aut voluptatem voluptatum eum consequatur asperiores ea libero perspiciatis ut rerum totam. </p>
             <p class="tekst">Ut omnis esse ab dolorem esse ut commodi voluptate sed provident assumenda est quia quae id ducimus voluptatem. Sed consequatur internos qui nihil libero est tempore magni qui quam sint in rerum ratione. Et harum ipsam ut accusamus officia et officia quisquam qui quos repellat. </p>

                  </p>
            </form>
        </div>
    </section>

    <!-- contact section ends -->



    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>

</html>