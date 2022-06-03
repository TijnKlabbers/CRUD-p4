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
            $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":username", $_POST['username']);
            $stmt->bindParam(":password", $_POST['password']);
            $stmt->execute();
            $result = $stmt->fetch();

            if(count($result) > 0){
              header("Location: locations.php");
          }
          else{
              header("Location: login.php");
          }
          }
      ?>