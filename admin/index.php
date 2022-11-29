<?php
require('essentials.php');
require('functions.php');

session_start();
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        redirect('dashboard.php');
    }

    // $check_admin_name = mysqli_query($conn, "SELECT sr_no, admin_name FROM admin_cred Where sr_no='$sr_no' AND admin_name='$admin_name'");
    // if(mysqli_num_rows($check_admin_name) > 0){
    //   $row = mysqli_fetch_assoc($check_admin_name);
    //   $_SESSION["sr_no"] = $row['sr_no'];
    //   $_SESSION["admin_name"] = $row['admin_name'];

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <title>Admin Login</title>
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

    <style>
        div.login-form{
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }

    </style>
  </head>

  <body class="bg-login">

  <div class="login-form text-center rounded shadow overflow-hidden">
    <form method="POST">
        <h4 class="bg-h4 py-3">ADMIN LOGIN PANEL</h4>
        <div class="p-4">
            <div class="mb-3">
                <input name="admin_name" required type="text" class="form-control shadow-none" placeholder="Admin Name">
            </div>
            <div class="mb-4">
                <input name="admin_pass" required type="password" class="form-control shadow-none" placeholder="Password">
            </div>
            <button name="login" type="submit" class="btn shadow-none">LOGIN</button>
        </div>
    </form>
  </div>


  <?php

    if(isset($_POST['login']))
    {
        $frm_data=filteration($_POST);

        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

        $res = select($query,$values,"ss");
        if($res->num_rows==1){
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            $_SESSION['admin_name']=$row['admin_name'];
            redirect('dashboard.php');
        }
        else{
            alert('error','Login failed - Invalid Credentials!');
        }
    }

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
  </body>
</html>