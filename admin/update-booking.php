<?php
    session_start();
    require('essentials.php');
    require('functions.php');
    adminLogin();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <title>Admin Panel - Bookings</title>
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

  <?php require('header.php');?>

  <div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">UPDATE BOOKINGS</h3>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">

                    <div class="text-end mb-4">
                    </div>
                    <?php
                        if(isset($_GET['id'])){

                            $booking_id = $_GET['id'];
                            $bookings = "SELECT * FROM bookings WHERE id='$booking_id'";
                            $bookings_run = mysqli_query($conn, $bookings);
                            if(mysqli_num_rows($bookings_run) > 0)
                            {
                                foreach($bookings_run as $booking){
                                    ?>
                                    <form action="code.php " method= "POST">
                                        <input type="hidden" name="booking_id" value="<?php echo $booking['id'];?>">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="">Full name</label>
                                                    <input type="text" name="full_name" value="<?php echo $booking['full_name']; ?>" class="form-control">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="">Phone number</label>
                                                    <input type="text" name="phone" value="<?php echo $booking['phone']; ?>" class="form-control">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="">Check-in</label>
                                                    <input type="date" name="check_in" class="form-control">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="">Check-out</label>
                                                    <input type="date" name="check_out"  class="form-control">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="">No. of adults</label>
                                                    <select name="adults" required class="form-control">
                                                        <option ><?= $booking['adults'];?></option>
                                                        <option value="1">1 adult</option>
                                                        <option value="2">2 adults</option>
                                                        <option value="3">3 adults</option>
                                                        <option value="4">4 adults</option>
                                                        <option value="5">5 adults</option>
                                                        <option value="6">6 adults</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="">No. of children</label>
                                                    <select name="childs" required class="form-control">
                                                        <option ><?= $booking['childs'];?></option>
                                                        <option value="0">0 child</option>
                                                        <option value="1">1 child</option>
                                                        <option value="2">2 children</option>
                                                        <option value="3">3 children</option>
                                                        <option value="4">4 children</option>
                                                        <option value="5">5 children</option>
                                                        <option value="6">6 children</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button type="submit" name="update_booking" class="btn">Update Booking</button>
                                                </div>
                                            </div>
                                        </form>
                            
                                <?php
                                    
                                }

                            }
                            else{
                                    ?>
                                    <h4>No record found</h4>
                                    <?php
                            }
                        }
                                    
                        ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="scripts/users.js"></script>
  </body>
</html>

