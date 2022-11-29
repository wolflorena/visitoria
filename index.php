 <?php

    include 'config.php'; 

    session_start();

    error_reporting(0);

    if(isset($_SESSION["user_id"])){
        header("Location: welcome.php");
    }

    if(isset($_POST["signup"])) {
        $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
        $user_name = mysqli_real_escape_string($conn, $_POST["signup_user_name"]);
        $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
        $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST["signup_confirm_password"]));

        $check_mail = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users Where email='$email' "));
        $check_user_name = mysqli_num_rows(mysqli_query($conn, "SELECT user_name FROM users Where user_name='$user_name' "));

        if($password !== $confirm_password){
            echo "<script>alert('Password did not match.');</script>";
        } elseif($check_mail > 0){
            echo "<script>alert('Email already exists.');</script>";
        }  elseif($check_user_name > 0){
            echo "<script>alert('Username already exists.');</script>";
        }   else {
            $sql = "INSERT INTO users (full_name, user_name,  email, password) VALUES ('$full_name', '$user_name', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $_POST["signup_full_name"] = "";
                $_POST["signup_user_name"] = "";
                $_POST["signup_email"] = "";
                $_POST["signup_passwors"] = "";
                $_POST["signup_confirm_passwors"] = "";
                echo "<script>alert('User registration successfully.');</script>";
            }else{
                echo "<script>alert('User registration failed.');</script>";

            }
        }
    }

    if(isset($_POST["signin"])) {
        $user_name = mysqli_real_escape_string($conn, $_POST["user_name"]);
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

        $check_user_name = mysqli_query($conn, "SELECT id, user_name FROM users Where user_name='$user_name' AND password='$password'");
        
        if(mysqli_num_rows($check_user_name) > 0){
            $row = mysqli_fetch_assoc($check_user_name);
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["user_name"] = $row['user_name'];
            // $_SESSION["full_name"] = $row['full_name'];
            header("Location: welcome.php");
        }else{
            echo "<script>alert('Incorrect credentials.Please try again.');</script>";
        }
    }

?> 

<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c942d75c.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> VISITORIA | Join Us! </title>
    
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" href="img/icon_dark.png">
</head>

<body>

    <!-- NAVIGATION BAR-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-inverse" >
<div class="container">
<a 
href="#" 
class="navbar-brand mb-0 h1 ms-0">
  <img class="d-inline-block align-top"
    src="img/logo_writen.png" width="90" >
</a>
<button 
type="button" 
data-bs-toggle="collapse"
data-bs-target="#navbarNav" 
class="navbar-toggler" 
aria-controls="navbarNav" 
aria-expanded="false" 
aria-label="toggler navigation">
  <span class="navbar-toggler-icon">
  </span>
</button>
<div 
class="collapse navbar-collapse " 
id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active px-5">
        <a href="welcome.php" class="nav-link active">
          Home
        </a>
      </li>
      <li class="nav-item dropdown px-5">
        <a 
        href="#" 
        class="nav-link active dropdown-toggle" 
        id="navbarDropdown" 
        role="button"
        data-bs-toggle="dropdown"
        aria-expanded="false">
          Properties
        </a>
        <ul 
        class="dropdown-menu" 
        aria-labelledby="navbarDropdown">
            <li>
              <a href="on_top_chalet.php"
              class="dropdown-item">On Top Chalet</a>
            </li>
            <li>
              <a href="barnhaus.php"
              class="dropdown-item">Barnhaus</a>
            </li>
            <li>
              <a href="cabana_sapte.php"
              class="dropdown-item">Cabana Sapte</a>
            </li>
            <li>
              <a href="#"
              class="dropdown-item">Cabana #4</a>
            </li>
        </ul>
      </li>
      <li class="nav-item px-5">
        <a href="aboutus.php" class="nav-link active">
          About us
        </a>
      </li>
    </li>
    <li class="nav-item px-5">
      <a href="faq.php" class="nav-link active">
        FAQ
      </a>
    </li>
    <li class="nav-item px-5">
    <?php  
            if(isset($_SESSION["user_id"])) {
              echo "<a href=\"logout.php\" class=\"nav-link active\"> Log out </a>";
              }
              else{
                echo "<a href=\"index.php\" class=\"nav-link active\"> Log in </a>";
              }

        ?>
    </li>
    </ul>
</div>
</nav>

    <main>
        <div class="box">
          <div class="inner-box">
            <div class="forms-wrap">
              <form action="" class="sign-in-form" method="post">
                <div class="logo">
                  <img src="img/logo_writen.png" alt="" />
                </div>
  
                <div class="heading">
                  <h2>Welcome Back!</h2>
                  <h6>Not registred yet?</h6>
                  <a href="#" class="toggle">Sign up</a>
                </div>
  
                <div class="actual-form">
                  <div class="input-wrap">
                    <input
                      type="text"
                      placeholder="Username"
                      minlength="4"
                      class="input-field"
                      autocomplete="off"
                      name="user_name"
                      value = "<?php echo $_POST["user_name"];?>"
                      required
                    />
                  </div>
  
                  <div class="input-wrap">
                    <input
                      type="password"
                      placeholder="Password"
                      minlength="4"
                      class="input-field"
                      autocomplete="off"
                      name="password"
                      value = "<?php echo $_POST["password"];?>"
                      required
                    />
                  </div>
  
                  <input type="submit" value="Sign In" name="signin" class="sign-btn" />
  
                  <p class="text">
                    Forgotten your password or you login datails?
                    <a href="#">Get help</a> signing in
                  </p>
                </div>
              </form>
  
              <form action="" class="sign-up-form" method="post">
                <div class="logo">
                  <img src="img/logo_writen.png" />
                </div>
  
                <div class="heading">
                  <h2>Get Started</h2>
                  <h6>Already have an account?</h6>
                  <a href="#" class="toggle">Sign in</a>
                </div>
  
                <div class="actual-form">
                  <div class="input-wrap">
                    <input
                      type="text"
                      placeholder="Full name"
                      minlength="4"
                      class="input-field"
                      autocomplete="off"
                      name="signup_full_name"
                      value = "<?php echo $_POST["signup_full_name"];?>"
                      required
                    />
                  </div>
                  <div class="input-wrap">
                    <input
                      type="text"
                      placeholder="Username"
                      class="input-field"
                      autocomplete="off"
                      name="signup_user_name"
                      value = "<?php echo $_POST["signup_user_name"];?>"
                      required
                    />
                  </div>
                  <div class="input-wrap">
                    <input
                      type="email"
                      placeholder="Email"
                      class="input-field"
                      autocomplete="off"
                      name="signup_email"
                      value = "<?php echo $_POST["signup_email"];?>"
                      required
                    />
                  </div>
  
                  <div class="input-wrap">
                    <input
                      type="password"
                      placeholder="Password"
                      minlength="4"
                      class="input-field"
                      autocomplete="off"
                      name="signup_password"
                      value = "<?php echo $_POST["signup_password"];?>"
                      required
                    />
                  </div>

                  <div class="input-wrap">
                    <input
                      type="password"
                      placeholder="Confirm password"
                      minlength="4"
                      class="input-field"
                      autocomplete="off"
                      name="signup_confirm_password"
                      value = "<?php echo $_POST["signup_confirm_password"];?>"
                      required
                    />
                  </div>
                  <input type="submit" name="signup" value="Sign Up" class="sign-btn" />
                  <p class="text">
                    By signing up, I agree to the
                    <a href="#">Terms of Services</a> and
                    <a href="#">Privacy Policy</a>
                  </p>
                </div>
              </form>
            </div>
  
            <div class="carousel-login">
              <div class="images-wrapper"></div>
  
              </div>
            </div>
          </div>
        </div>
      </main>
  
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3 mb-5">
              <h2>About us</h2> 
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum magnam architecto eveniet nostrum tenetur dolore harum voluptatem rerum unde, eius itaque molestias est numquam modi maxime ab a veritatis cupiditate nihil exercitationem? Iste quos vel quaerat quam quia autem itaque reiciendis, laborum veritatis optio nulla in facere explicabo harum possimus?</p> 
              <p><a href="#">Click here to learn more</a></p>
            </div>

            <div class="col-md-3 mb-5">
              <h2>Contact &amp; Address</h2>
              <ul class="list-unstyled footer-link">
                <li class="d-flex">
                  <span class="me-3">
                    Address:
                  </span>
                  <p class="text-contact">
                          mque dicta qui amet?
                  </p>
                </li>

                <li class="d-flex">
                  <span class="me-3">
                    Telephone:
                  </span>
                  <p class="text-contact">
                  +40 734 496 875
                  </p>
                </li>

                <li class="d-flex">
                  <span class="me-5">
                    Email:
                  </span>
                  <p class="text-contact">
                    ouremail@email.com
                  </p>
                </li>
              </ul>
            </div>

            <div class="col-md-3 mb-5">
              <h2>Quick links</h2>
              <ul class="list-unstyled footer-link">
                <li><a href="#">About us</a></li>
                <li><a href="#">Log In</a></li>
                <li><a href="#">Sign Up</a></li>
              </ul>
            </div>

            <div class="col-md-3">
              <h2>You can find us here:</h2>
              <ul class="list-unstyled footer-link d-flex footer-social">
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook "></i></a></li>
                <li><a href="#"><i class="fa fa-youtube "></i></a></li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-12 text md center text-center">
              <p>This template is made with 
                <i class="fa fa-heart-o" style="color:#86c232">
                </i> 
                by Lorena Wolf 
                <a href="#">
                  <i class="fa fa-instagram">
                  </i>
                </a>
              </p>
            </div>
          </div>
        </div>
      </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/mdb.min.js"></script>
    <script src="javascript/main.js"></script>
    <script type="text/javascript"></script>
    
</body>