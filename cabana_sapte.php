


<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/09c942d75c.js" crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> VISITORIA | Cabana Sapte </title>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/cabana_sapte.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="icon" href="img/icon_dark.png">
</head>
<body>
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


<div class="body-cabana_sapte">
<div class="body-child1">
  <div class="child1-text">
    <h1 class="child1-title">
      Cabana Sapte
    </h1>
    <h4 class="child1-location">
      <i class="fa fa-location">Breaza, jud. Brasov</i> 
    </h4>
    <button id="child1-button" class="btn btn-theme">BOOK NOW</button>
  </div>
</div>
</div>
<div class="intro">
<div class="intro-text">
    <h1 class="hide">
        <span class="text">
            Nature.
        </span>
    </h1>
    <h1 class="hide">
        <span class="text">
            Peace.
        </span>
    </h1>
    <h1 class="hide">
        <span class="text">
            Rest.
        </span>
    </h1>
</div>
</div>

<div class="body-child2">
<div class="description">
  <h1 id="child2-welcome"> Welcome to</h1>
  <h2 id="child2-property"> CABANA SAPTE </h2>
  <hr>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, odio sit adipisci ullam perferendis iusto assumenda aperiam libero, quod laudantium harum accusamus doloremque earum corrupti laborum. Sed temporibus enim sint blanditiis, tempore exercitationem quasi ipsa. Nesciunt fuga accusamus dolor vero earum rerum alias saepe explicabo distinctio accusantium, laboriosam modi adipisci.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit blanditiis ex porro laboriosam, maiores dolor quam delectus magni esse tempore facere odit quaerat necessitatibus totam quae rem atque quis excepturi magnam illum, minus fuga vero repellendus. Perspiciatis quos architecto est corrupti fuga minus itaque hic repellat id fugiat? Doloremque, veritatis!</p>
  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nam fugit eaque molestias dolores, et illum id facilis adipisci repudiandae aut ipsa quos corrupti nemo exercitationem perferendis maxime. Dolorum, beatae ipsum enim et rerum ipsa alias explicabo odit debitis aliquid asperiores maiores error voluptatibus praesentium magnam sunt ratione quo. Similique recusandae cupiditate et perspiciatis, molestiae eaque dolorum, consequatur quo eos deleniti odit nobis quibusdam tenetur! Provident illum id voluptatem dolore culpa doloribus odit corrupti laborum adipisci quod aspernatur consequuntur recusandae deserunt dolorum soluta quas eum dicta quibusdam eveniet atque, explicabo autem eligendi! Debitis tempore cumque, cum rem ab placeat est!</p> -->
  <p><i class="fa fa-check"></i> <b>Spaces</b> <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ab aliquid porro repellat voluptate! Odio voluptas consectetur dolorem numquam facere!</p>
  
</div>
<div class="details">
  <div class="utilities">
    <ul cless="list-utilities">
      <li> <i class="fa fa-bed"></i> 9 GUESTS</li>
      <hr>
      <li> <i class="fa fa-house"></i> 4 BEDROOMS</li>
      <hr>
      <li> <i class="fa fa-bath"></i> 3 BATHROOMS</li>
      <hr>
      <li> <i class="fa fa-tv"></i> 1 LARGE LIVING ROOM</li>
      <hr>
      <li> <i class="fa fa-kitchen-set"></i> 1 KITCHEN</li>
    </ul>
  </div>
  <div class="other-details">
    <p><i class="fa fa-check"></i> <b>Guest access</b> <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ab aliquid porro repellat voluptate! Odio voluptas consectetur dolorem numquam facere!</p>
    <p><i class="fa fa-check"></i> <b>Interaction</b> <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ab aliquid porro repellat voluptate! Odio voluptas consectetur dolorem numquam facere!</p>
    <p><i class="fa fa-check"></i> <b>Places near by</b> <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ab aliquid porro repellat voluptate! Odio voluptas consectetur dolorem numquam facere!</p>
  </div>
</div>
</div>

<div class="body-child3">
<div class="extra">
  <div class="every-plus">
    <div class="icons">
      <img src="img/on-top-chalet/sound-system-svgrepo-com.svg" alt="">
    </div>
    <div class="text-plus">
      <p>Audio system</p>
    </div>
  </div>
  <div class="every-plus">
    <div class="icons">
      <img src="img/on-top-chalet/fireplace-svgrepo-com.svg" alt="">
    </div>
    <div class="text-plus">
      <p>Fireplace</p>
    </div>
  </div>
  <div class="every-plus">
    <div class="icons">
      <img src="img/on-top-chalet/wireless-signal-svgrepo-com.svg" alt="">
    </div>
    <div class="text-plus">
      <p>Wireless Internet</p>
    </div>
  </div>
  <div class="every-plus">
    <div class="icons">
      <img src="img/on-top-chalet/mist-heat-svgrepo-com.svg" alt="">
    </div>
    <div class="text-plus">
      <p>Electric heating</p>
    </div>
  </div>
</div>
<div class="extra">
  <div class="every-plus">
    <div class="icons">
      <img src="img/on-top-chalet/kitchen-svgrepo-com.svg" alt="">
    </div>
    <div class="text-plus">
      <p>Fully equiped kitchen</p>
    </div>
  </div>
  <div class="every-plus">
    <div class="icons">
      <img src="img/on-top-chalet/grill-svgrepo-com.svg" alt="">
    </div>
    <div class="text-plus">
      <p>Outside grill</p>
    </div>
  </div>
  <div class="every-plus">
    <div class="icons">
      <img src="img/on-top-chalet/big-video-projector-svgrepo-com.svg" alt="">
    </div>
    <div class="text-plus">
      <p>Home cinema</p>
    </div>
  </div>
  <div class="every-plus">
    <div class="icons">
      <img src="img/on-top-chalet/parking-svgrepo-com.svg" alt="">
    </div>
    <div class="text-plus">
      <p>Parking places</p>
    </div>
  </div>
</div>
</div>

<div class="body-child4">
<div class="gallery-wrap">
  <!-- <h1>Portfolio Gallery With Filtering</h1> -->
  <hr>
   <input type="radio" id="reset" checked="checked" name="color" /> 
  <label for="reset">ALL</label>
  <input type="radio" id="exterior" name="color" />
  <label for="exterior">OUTDOOR</label>
  <input type="radio" id="interior" name="color" />
  <label for="interior">INDOOR</label>
  <input type="radio" id="bedrooms" name="color" />
  <label for="bedrooms">BEDROOMS</label>
 
  <div class="clr"></div>

    <div id="#image-1" class="gallery-image exterior">  
        <a href="#image-1"> <img src="img/cabana-sapte/outdoor/1.webp" /></a>
    </div>

    <div class="lb-overlay" id="image-1"> 
        <img src="img/cabana-sapte/outdoor/1.webp"/>
        <div> 
            <a href="#image-12" class="lb-prev"> 
                <i class="fa-solid fa-arrow-left fa-2xl"></i> 
            </a> 
            <a href="#image-2" class="lb-next"> 
                <i class="fa-solid fa-arrow-right fa-2xl"></i> 
            </a> 
        </div>
    <a href="#page" class="lb-close">X</a> 
    </div>

    <div id="#image-2" class="gallery-image exterior">  
        <a href="#image-2"> <img src="img/cabana-sapte/outdoor/2.webp" /></a>
    </div>
    <div class="lb-overlay" id="image-2"> 
        <img src="img/cabana-sapte/outdoor/2.webp"/>
        <div> 
            <a href="#image-1" class="lb-prev"> 
                <i class="fa-solid fa-arrow-left fa-2xl"></i> 
            </a> 
            <a href="#image-3" class="lb-next"> 
                <i class="fa-solid fa-arrow-right fa-2xl"></i> 
            </a> 
        </div>
    <a href="#page" class="lb-close">X</a> 
    </div>

    <div id="#image-3" class="gallery-image exterior">  
        <a href="#image-3"> <img src="img/cabana-sapte/outdoor/3.webp" /></a>
    </div>
    <div class="lb-overlay" id="image-3"> 
        <img src="img/cabana-sapte/outdoor/3.webp"/>
        <div> 
            <a href="#image-2" class="lb-prev"> 
                <i class="fa-solid fa-arrow-left fa-2xl"></i> 
            </a> 
            <a href="#image-4" class="lb-next"> 
                <i class="fa-solid fa-arrow-right fa-2xl"></i> 
            </a> 
        </div>
    <a href="#page" class="lb-close">X</a> 
    </div>
 
  
  <div class="gallery-image exterior" onclick="lightbox(3)"> 
    <a href="#image-4">
        <img src="img/cabana-sapte/outdoor/4.webp" alt="" />
    </a>
  </div>
  <!-- <div id="#image-4" class="gallery-image exterior">  
        <a href="#image-4"> <img src="img/on-top-chalet/outdoor/4.webp" /></a>
    </div> -->
  <div class="lb-overlay" id="image-4"> 
        <img src="img/cabana-sapte/outdoor/4.webp"/>
        <div> 
            <a href="#image-3" class="lb-prev"> 
                <i class="fa-solid fa-arrow-left fa-2xl"></i> 
            </a> 
            <a href="#image-5" class="lb-next"> 
                <i class="fa-solid fa-arrow-right fa-2xl"></i> 
            </a> 
        </div>
    <a href="#page" class="lb-close">X</a> 
    </div>
  
    <div class="gallery-image interior" onclick="lightbox(4)">
        <a href="#image-5"> 
            <img src="img/cabana-sapte/indoor/5.webp" alt="" />
        </a>
    </div>

  <div class="lb-overlay" id="image-5"> 
    <img src="img/cabana-sapte/indoor/5.webp" />
    <div> 
        <a href="#image-4" class="lb-prev">
            <i class="fa-solid fa-arrow-left fa-2xl"></i>
        </a> 
        <a href="#image-6" class="lb-next">
            <i class="fa-solid fa-arrow-right fa-2xl"></i> 
        </a> 
    </div>
    <a href="#page" class="lb-close">X</a> 
</div>
  
  <div class="gallery-image interior" onclick="lightbox(5)"> 
    <a href="#image-6">
        <img src="img/cabana-sapte/indoor/6.webp" alt="" />
    </a>
</div>

  <div class="lb-overlay" id="image-6"> 
    <img src="img/cabana-sapte/indoor/6.webp"/>
    <div> 
        <a href="#image-5" class="lb-prev">
            <i class="fa-solid fa-arrow-left fa-2xl"></i>
        </a> <a href="#image-7" class="lb-next">
            <i class="fa-solid fa-arrow-right fa-2xl"></i> 
        </a> 
    </div>
    <a href="#page" class="lb-close">X</a> 
</div>
  
  <div class="gallery-image interior" onclick="lightbox(6)"><a href="#image-7"> <img src="img/cabana-sapte/indoor/7.webp" alt="" /></a></div>

  <div class="lb-overlay" id="image-7"> <img src="img/cabana-sapte/indoor/7.webp"/>
    <div> <a href="#image-4" class="lb-prev"><i class="fa-solid fa-arrow-left fa-2xl"></i></a> <a href="#image-8" class="lb-next"><i class="fa-solid fa-arrow-right fa-2xl"></i> </a> </div>
    <a href="#page" class="lb-close">X</a> </div>
  
  <div class="gallery-image interior" onclick="lightbox(7)"><a href="#image-8"> <img src="img/cabana-sapte/indoor/8.webp" alt="" /></a></div>
 
  <div class="lb-overlay" id="image-8"> <img src="img/cabana-sapte/indoor/8.webp"/>
    <div> <a href="#image-4" class="lb-prev"><i class="fa-solid fa-arrow-left fa-2xl"></i></a> <a href="#image-9" class="lb-next"><i class="fa-solid fa-arrow-right fa-2xl"></i> </a> </div>
    <a href="#page" class="lb-close">X</a> </div>
    
    
    <div class="gallery-image bedrooms"><a href="#image-9"> <img src="img/cabana-sapte/bedroom/9.webp" alt="" /></a></div>
 
  <div class="lb-overlay" id="image-9"> <img src="img/cabana-sapte/bedroom/9.webp"/>
    <div> <a href="#image-4" class="lb-prev"><i class="fa-solid fa-arrow-left fa-2xl"></i></a> <a href="#image-10" class="lb-next"><i class="fa-solid fa-arrow-right fa-2xl"></i> </a> </div>
    <a href="#page" class="lb-close">X</a> </div>
    
    
    <div class="gallery-image bedrooms"><a href="#image-10"> <img src="img/cabana-sapte/bedroom/10.webp" alt="" /></a></div>
 
  <div class="lb-overlay" id="image-10"> <img src="img/cabana-sapte/bedroom/10.webp"/>
    <div> <a href="#image-4" class="lb-prev"><i class="fa-solid fa-arrow-left fa-2xl"></i></a> <a href="#image-11" class="lb-next"><i class="fa-solid fa-arrow-right fa-2xl"></i> </a> </div>
    <a href="#page" class="lb-close">X</a> </div>
    
    
    <div class="gallery-image bedrooms"><a href="#image-11"> <img src="img/cabana-sapte/bedroom/11.jpg" alt="" /></a></div>
 
  <div class="lb-overlay" id="image-11"> <img src="img/cabana-sapte/bedroom/11.jpg"/>
    <div> <a href="#image-4" class="lb-prev"><i class="fa-solid fa-arrow-left fa-2xl"></i></a> <a href="#image-12" class="lb-next"><i class="fa-solid fa-arrow-right fa-2xl"></i> </a> </div>
    <a href="#page" class="lb-close">X</a> </div>
    
    <div class="gallery-image bedrooms"><a href="#image-12"> <img src="img/cabana-sapte/bedroom/12.webp" alt="" /></a></div>
 
  <div class="lb-overlay" id="image-12"> <img src="img/cabana-sapte/bedroom/12.webp"/>
    <div> <a href="#image-4" class="lb-prev"><i class="fa-solid fa-arrow-left fa-2xl"></i></a> <a href="#image-6" class="lb-next"><i class="fa-solid fa-arrow-right fa-2xl"></i> </a> </div>
    <a href="#page" class="lb-close">X</a> </div>
  
  
  
  
  <div class="clr"></div>
</div>

</div>

<div class="body-child5">
<section class="reservation" id="reservation">

<form action="" method="post">
<h3>make a reservation</h3>
<div class="flex">
  <div class="box">
     <p>check in <span>*</span></p>
     <input type="date" name="check_in" class="input" value = "<?php echo $_POST["check_in"];?>" required>
  </div>
  <div class="box">
     <p>check out <span>*</span></p>
     <input type="date" name="check_out" class="input" value = "<?php echo $_POST["check_out"];?>" required>
  </div>
  <div class="box">
     <p>adults <span>*</span></p>
     <select name="adults" class="input"  value = "<?php echo $_POST["adults"];?>" required>
        <option value="1">1 adult</option>
        <option value="2">2 adults</option>
        <option value="3">3 adults</option>
        <option value="4">4 adults</option>
        <option value="5">5 adults</option>
        <option value="6">6 adults</option>
     </select>
  </div>
  <div class="box">
     <p>childs <span>*</span></p>
     <select name="childs" class="input" value = "<?php echo $_POST["childs"];?>" required>
        <option value="-">0 child</option>
        <option value="1">1 child</option>
        <option value="2">2 childs</option>
        <option value="3">3 childs</option>
        <option value="4">4 childs</option>
        <option value="5">5 childs</option>
        <option value="6">6 childs</option>
        </select  >
  </div>
</div>
<input type="submit" value="CHECK" name="booking" class="btn">
</form>

</section>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="javascript/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>