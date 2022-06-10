<form action="index.php" method="post">
        <h3>login</h3>
        <input type="username" class="box" placeholder="enter your username" name="username" />
        <input type="password" class="box" placeholder="enter your password" name="password"/>
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
              if ($result['admin'] === 1) {
                // sessiON-['admin'] = true;
                $_SESSION['admin'] = true;
                header("Location: adminpanel.php");
                // //sturen naar admin omgeving
                
                //          } else {
                // admin = false;

                //sturen naar homepage
              }
              header("Location: reizen.php");
            }
            else{
              header("Location: index.php");
            }
          }
      ?>