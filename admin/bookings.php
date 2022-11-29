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
            <h3 class="mb-4">BOOKINGS</h3>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">

                    <div class="text-end mb-4">
                
                    </div>

                    <div class="table-responsive">
                    <?php
                        $query = "SELECT * FROM bookings";
                        $query_run = mysqli_query($conn, $query);
                    ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-dark text-light">
                        <tr>
                            <th style="color:#86c232;"> ID </th>
                            <th>Cabain</th>
                            <th>Full name</th>
                            <th>Phone number</th>
                            <th> Check-in </th>
                            <th>Check-out </th>
                            <th>No. of Adults</th>
                            <th>No. of Children</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(mysqli_num_rows($query_run) > 0)        
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                        ?>
                                    <tr>
                                        <td><?php  echo $row['id']; ?></td>
                                        <td><?php echo 'On Top Chalet' ?></td>
                                        <td><?php echo $row['full_name']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php  echo $row['check_in']; ?></td>
                                        <td><?php  echo $row['check_out']; ?></td>
                                        <td><?php  echo $row['adults']; ?></td>
                                        <td><?php  echo $row['childs']; ?></td>
                                        <td>
                                        
                                            <a href="update-booking.php?id=<?php echo $row['id'];?>">
                                                <button class="btn m-2"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            
                                            <form action="code.php" method="post">
                                                <input type="hidden" name="delete_id_bookings" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="delete_btn_bookings" onclick="return confirm(`Are you sure, you want to remove this reservation?`)" class="btn m-2"> <i class="fa fa-trash"></i></button>
                                            </form> 
                                            
                                        </td>
                                    </tr>
                        <?php
                                } 
                            }
                            else {
                                echo "No Record Found";
                            }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="scripts/users.js"></script>
  </body>
</html>