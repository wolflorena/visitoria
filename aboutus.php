<?php
    session_start();
    // if(!isset($_SESSION["user_id"])){
    //     header("Location: index.php");
    // }
?>
<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c942d75c.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> VISITORIA | About us! </title>
    
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="css/aboutus.css">
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
                      <a href="#"
                      class="dropdown-item">Cabana #2</a>
                    </li>
                    <li>
                      <a href="#"
                      class="dropdown-item">Cabana #3</a>
                    </li>
                    <li>
                      <a href="#"
                      class="dropdown-item">Cabana #4</a>
                    </li>
                </ul>
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

    <div class="center-vertical">
        <div class="about-us-section" >
            <div class="container " >
                <div class="row">
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        

                        <div class="img-head">
                            <img src="img/b0fe9e4e220778544d67d0b776eaf5f0.jpeg">
                        
                    </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2 class="text-head">
                            Find more about us!
                        </h2>
                        <div class="break mb-2"></div>
                            <p class="text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quos temporibus atque molestiae dolor, quis dignissimos beatae, nemo eum reiciendis sapiente porro asperiores cupiditate ea et tenetur, distinctio fuga vel. Assumenda saepe consequuntur repudiandae nobis, inventore nemo in labore veniam vel, unde sapiente odio neque perferendis doloribus eligendi omnis placeat ipsam aliquid quibusdam, modi repellendus asperiores laborum illo amet? Facilis nobis voluptates earum cum commodi quo maxime, obcaecati dolore corporis quia vel expedita adipisci cupiditate sed quisquam beatae necessitatibus aspernatur error autem illum? Numquam aliquid tempora quae dignissimos, possimus modi.
                            </p>
                            <div class="row boxes">
                                <div class="col-6 col-md-6 mb-4 mb-md-4 d-flex align-items-center justify-content-center">
                                    <div class="box">
                                        <i class="fa fa-users mb-3"></i>
                                        <h4 class="mb-0">TOTAL CLIENTS</h4>
                                        <p class="mb-o">999</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 mb-4 mb-md-4 d-flex align-items-center justify-content-center">
                                    <div class="box">
                                        <i class="fa fa-house mb-3"></i>
                                        <h4 class="mb-0">PROPERTIES</h4>
                                        <p class="mb-o">4</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 mb-4 mb-md-4 d-flex align-items-center justify-content-center">
                                    <div class="box">
                                        <i class="fa fa-paper-plane mb-3"></i>
                                        <h4 class="mb-0">WORKING YEARS</h4>
                                        <p class="mb-o">15</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 mb-4 mb-md-4 d-flex align-items-center justify-content-center">
                                    <div class="box">
                                        <i class="fa fa-trophy mb-3"></i>
                                        <h4 class="mb-0">AWARDS</h4>
                                        <p class="mb-o">7</p>
                                    </div>
                                </div>
                            </div>
                    
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
    

    <!-- FOOTER -->
    <div class="footer">
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
                  <i class="fa fa-heart-o">
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
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/mdb.min.js"></script>
    <script src="javascript/main.js"></script>
    <script type="text/javascript"></script>
</body>


    
    
