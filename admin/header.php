
<?php 
    session_start();
?>
<div class="container-fluid bg-dark text-light p-3  align-items-center justify-content-between sticky-top">
        <!-- <h3 class="mb-0 h-font">Visitoria</h3> -->
        <div class="text-center">
          <img class="d-inline-block align-top"
            src="../img/logo_writen.png" width="150" >
        </div>
        
    </div>
    
    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-center" style="color:#86c232;font-family:'Lobster';">ADMIN PANEL</h4>
                <h4 class="mt-2 text-center text-light" style="font-family:'Lobster';"><?php echo $_SESSION['admin_name']; ?> </h4>
                <!-- <php
                    // $admin_name = mysqli_real_escape_string($conn, $_POST["admin_name"]);
                    // $admin_pass = mysqli_real_escape_string($conn, $_POST["admin_pass"]);
                    // $q = "SELECT admin_name FROM admin_cred WHERE admin_name='$admin_name' AND admin_pass='$admin_pass'";
                    // $res = mysqli_query($conn, $q);
                    // if(mysqli_num_rows($res) > 0){
                    //     $row = mysqli_fetch_assoc($res);
                    // }
                ?> -->
                <!-- <h4 class="mt-2 text-center">  <php echo $row['admin_name']; ?> </h4> -->
                
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggler="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown"> 
                    <div class="text-center m-2">
                        <img class="d-inline-block align-top"
                            src="../img/profile.svg" width="90" >
                    </div>
                    <ul class="nav nav-pills active flex-column ">
                        <li class="nav-item m-3">
                            <a class="nav-link text-light" href="dashboard.php"><i class="fa fa-chart-line me-3"></i> Dashboard</a>
                        </li>
                        <li class="nav-item m-3">
                            <a class="nav-link text-light" href="bookings.php"><i class="fa fa-bed me-3"></i>Bookings</a>
                        </li>
                        <li class="nav-item m-3">
                            <a class="nav-link text-light" href="users.php"><i class="fa fa-user me-3"></i> Users</a>
                        </li>
                        <a href="logout.php" class="btn btn-sm btn-admin border-0 m-3">LOG OUT</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>