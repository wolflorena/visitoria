<?php

session_start();

// if(!isset($_SESSION["user_id"])){
//     header("Location: index.php");
// }

// $user_data = check_login($conn);
// echo $_SESSION["user_id"];

?>

<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c942d75c.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> VISITORIA | A place for you </title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" href="img/icon_dark.png">
  </head>


  <body class="index-body">
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
                    class="dropdown-item">Barnhaus </a>
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

    <!--CHILD 1-->
    <div class="index-div" id="child1">
        <div class="index-background"></div>
        <div class="index-text">
            <h1 id="index-title">Welcome  
              <?php  
                if(isset($_SESSION["user_id"])) {
                  echo "back, " ;
                  echo $_SESSION["user_name"];
                  }
                ?>
              !
            </h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. In qui accusamus veritatis magnam obcaecati aliquid culpa voluptate quia soluta reiciendis architecto, facere consequuntur nobis. Harum assumenda mollitia repudiandae reiciendis omnis?
          </div>
      <button onclick="scrollDown()" id="index-button" class="btn btn-theme">EXPLORE</button>
    </div>
  

    <!--CHILD 2-->
  <div>
    <div class="col-12">
  <div class="index-div h-100 align"  id="child2" >
  <div class="container  p-5">
    <div class="row g-5">
      <h1 id="title-child2"> OUR PLACES FOR YOU</h1>
      <div class="col-12 col-md-6 col-lg-6 " >
        <div class="card">
          <a href="on_top_chalet.php">
            <img src="img/on-top-chalet/presentation.jpg" alt="" class="card-img-top">
          </a>
            <div class="card-body">
              <a href="on_top_chalet.php">
              <h4 class="card-title">On Top Chalet</h4>
              </a>
            <h6><i class="fa fa-location-dot"></i> Simon, Brasov </h6>
            <h5> 300$ / Night</h5>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 " >
        <div class="card ">
          <a href="barnhaus.php">
            <img src="img/barnhaus/presentation.jpg" alt="" class="card-img-top">
          </a>
            <div class="card-body">
              <a href="barnhaus.php">
                <h4 class="card-title"> Barnhaus </h4>
              </a>
            <h6><i class="fa fa-location-dot"></i> Jibert, jud. Brasov</h6>
            <h5>400$ / Night</h5>
            </div>
        </div>
      </div>
      <div class="w-100"></div>
      <div class="col-12 col-md-6 col-lg-6" >
        <div class="card">
          <a href="cabana_sapte.php">
            <img src="img/cabana-sapte/presentation.jpg" alt="" class="card-img-top">
          </a>
            <div class="card-body">
              <a href="cabana_sapte.php">
                <h4 class="card-title"> Cabana Sapte </h4>
              </a>
            <h6><i class="fa fa-location-dot"></i> Breaza, jud. Brasov </h6>
            <h5> 200$ / Night</h5>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 " >
        <div class="card">
          <a href="#">
            <img src="img/wood.jpg" alt="" class="card-img-top">
          </a>
            <div class="card-body">
              <a href="#">
              <h4 class="card-title"> PROPERTY #4</h4>
              </a>
            <h6><i class="fa fa-location-dot"></i> Lorem ipsum dolor sit.</h6>
            <h5>300$ / Night</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  <!--CHILD 3-->
<div class="col-12">
  <div class="index-div" id="child3">
    <div id="carouselExampleControls" class="carousel slide text-center carousel-dark p-5" data-mdb-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="rounded-circle shadow-1-strong mb-4"
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
            style="width: 150px;" />
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <h5 class=" name mb-3">Maria Kate</h5>
              <p class="occupation">Photographer</p>
              <p class="text-muted">
                <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit.
              </p>
            </div>
          </div>
          <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
            <li><i class="fas fa-star fa-sm"></i></li>
            <li><i class="fas fa-star fa-sm"></i></li>
            <li><i class="fas fa-star fa-sm"></i></li>
            <li><i class="fas fa-star fa-sm"></i></li>
            <li><i class="fas fa-star fa-sm"></i></li>
          </ul>
        </div>
        <div class="carousel-item">
          <img class="rounded-circle shadow-1-strong mb-4"
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
            style="width: 150px;" />
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <h5 class="name mb-3">John Doe</h5>
                <p class="occupation">Web Developer</p>
                <p class="text-muted">
                <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis.
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
        </div>
        <div class="carousel-item">
          <img class="rounded-circle shadow-1-strong mb-4"
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px;" />
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <h5 class="name mb-3" >Anna Deynah</h5>
              <p class="occupation">UX Designer</p>
              <p class="text-muted">
                <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit 
              </p>
            </div>
          </div>
          <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
        </div>
  
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
          data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
          data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
      </div>
    </div>
  </div>
</div>
  

    <!--FOOTER-->
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
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/mdb.min.js"></script>
    <script src="javascript/main.js"></script>
    <script type="text/javascript"></script>
    
  </body>
</html>