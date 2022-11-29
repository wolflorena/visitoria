<?php

session_start();

// if(!isset($_SESSION["user_id"])){
//     header("Location: index.php");
// }

// $user_data = check_login($conn);
// echo $_SESSION["user_id"];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> VISITORIA | Frequently Asked Questions </title>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <div class="faq-body">
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
        <div class="container">
        <a 
        href="index.html" 
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
  <div class="accordion">
    <!-- <div class="image-box">
      <img src="/img/eugene-deshko-dIMJcgCYZJw-unsplash.jpg" alt="Accordion Image" id="image-faq">
    </div> -->
    <div class="accordion-text">
      <div class="title">FAQ</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">What do you mean by HTML & CSS?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, doloribus.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">What do you mean by JavaScript?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">From where you learned HTML & CSS?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, necessitatibus.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Which code editor do you use?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, labore.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Software you use for video editing?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, repudiandae!</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>
</div>
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
  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/mdb.min.js"></script>
    <script src="javascript/main.js"></script>
    <script type="text/javascript"></script>
</body>
</html>

