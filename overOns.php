<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Travel Point
    </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <!-- header  -->

    <header>
<<<<<<< HEAD
        <?php include_once "includes/header.php";
=======
    <?php include_once "includes/header.php";
>>>>>>> 9d0c4b91d7b71d6ec30184e9424ed22773c9939c
    ?>
    </header>

    <!-- header -->

    <!-- login container  -->

    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>

        <form action="overOns.php" method="post">
        <h3>login</h3>
        <input type="username" class="box" placeholder="enter your username" name="username" required/>
        <input type="password" class="box" placeholder="enter your password" name="password" required/>
        <input type="submit" value="login now" class="btn" name="loginButton"/>
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="register.php">register now</a></p>
      </form>
      <?php
          if(isset($_POST['loginButton'])){
            $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":username", $_POST['username']);
            $stmt->bindParam(":password", $_POST['password']);
            $stmt->execute();
            $result = $stmt->fetch();

            if($result && count($result) > 0){
              if ($result['admin'] == 1) {
                // sessiON-['admin'] = true;
                $_SESSION['admin'] = true;
                header("Location: adminpanel.php");
                // //sturen naar admin omgeving
                
                //          } else {
                // admin = false;

                //sturen naar homepage
              }
            }
            else{
              header("Location: index.php");
            }
          }
      ?>
    </div>





    <!-- contact section   -->

    <section class="contact" id="contact">
        <h1 class="heading">
            <span>ABOUT US</span>

        </h1>

        <div class="row">
            <div class="image">
                <img src="images/overOns.jpg" alt="" />
            </div>

            <form action="">
<<<<<<< HEAD
                <p class="tekst">Lorem ipsum dolor sit amet. Aut quidem odit At iste natus ea molestiae ipsum est ipsum
                    omnis. Et alias maxime 33 necessitatibus mollitia aut voluptatibus dolor quo minima expedita ut
                    deleniti veniam vel quasi voluptates. </p>
                <p class="tekst">Quo optio dolorem et perferendis voluptas ut iste voluptates. Eos debitis dignissimos
                    qui amet voluptatum quo sequi vero nam expedita libero sit velit ullam? Id architecto perspiciatis
                    vel numquam ipsum qui quisquam iusto ut voluptate veniam ea Quis quasi. Aut voluptatem voluptatum
                    eum consequatur asperiores ea libero perspiciatis ut rerum totam. </p>
                <p class="tekst">Ut omnis esse ab dolorem esse ut commodi voluptate sed provident assumenda est quia
                    quae id ducimus voluptatem. Sed consequatur internos qui nihil libero est tempore magni qui quam
                    sint in rerum ratione. Et harum ipsam ut accusamus officia et officia quisquam qui quos repellat.
                </p>

                </p>
=======
             <p class="tekst">Lorem ipsum dolor sit amet. Aut quidem odit At iste natus ea molestiae ipsum est ipsum omnis. Et alias maxime 33 necessitatibus mollitia aut voluptatibus dolor quo minima expedita ut deleniti veniam vel quasi voluptates. </p>
             <p class="tekst">Quo optio dolorem et perferendis voluptas ut iste voluptates. Eos debitis dignissimos qui amet voluptatum quo sequi vero nam expedita libero sit velit ullam? Id architecto perspiciatis vel numquam ipsum qui quisquam iusto ut voluptate veniam ea Quis quasi. Aut voluptatem voluptatum eum consequatur asperiores ea libero perspiciatis ut rerum totam. </p>
             <p class="tekst">Ut omnis esse ab dolorem esse ut commodi voluptate sed provident assumenda est quia quae id ducimus voluptatem. Sed consequatur internos qui nihil libero est tempore magni qui quam sint in rerum ratione. Et harum ipsam ut accusamus officia et officia quisquam qui quos repellat. </p>

                  </p>
>>>>>>> 9d0c4b91d7b71d6ec30184e9424ed22773c9939c
            </form>
        </div>
    </section>

    <!-- contact ends -->



    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>

</html>