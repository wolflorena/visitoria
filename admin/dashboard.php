<?php
    require('essentials.php');
    require('functions.php');
    adminLogin();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <title>Admin Panel - Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Arima+Madurai&family=Poiret+One&display=swap"
      rel="stylesheet"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="css/common.css" />

  </head>

  <body class="bg-light">

   <?php require('header.php'); ?>

   <div class="container-fluid" id="main-content">
      
      <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
          <div class="col-xl-3 col-md-4">
              <div class="totalusers card mb-4">
              <div class="card-body text-center"> TOTAL PROPERTIES
                <h4 class="mb-0 nr"> 4 </h4>

                    
                  </div>
              </div>
          </div>
        
          <div class="col-xl-3 col-md-4">
              <div class="totalusers card mb-4">
              <div class="card-body text-center"> TOTAL USERS

                    <?php
                      $dash_user_query = "SELECT * from users";
                      $dash_user_query_run = mysqli_query($conn,$dash_user_query);

                      if($user_total = mysqli_num_rows($dash_user_query_run))
                      {
                        echo ' <h4 class="mb-0 nr">'.$user_total.'</h4>';
                      }
                      else
                      {
                        echo ' <h4 class="mb-0">No data!</h4>';
                      }
                    ?>
                  </div>
              </div>
                    </div>
        

          <div class="col-xl-3 col-md-4">
              <div class="totalbookings card mb-4">
                  <div class="card-body text-center"> TOTAL BOOKINGS

                    <?php
                      $dash_booking_query = "SELECT * from bookings";
                      $dash_booking_query_run = mysqli_query($conn,$dash_booking_query);

                      if($booking_total = mysqli_num_rows($dash_booking_query_run))
                      {
                        echo ' <h4 class="mb-0 nr">'.$booking_total.'</h4>';
                      }
                      else
                      {
                        echo ' <h4 class="mb-0">No data!</h4>';
                      }
                    ?>
                  </div>
              </div>
          </div>

        </div>
      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
  </body>
</html>