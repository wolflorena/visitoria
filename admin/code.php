<?php

require('functions.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: users.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: users.php'); 
    }    
}

if(isset($_POST['delete_btn_bookings']))
{
    $id = $_POST['delete_id_bookings'];

    $query = "DELETE FROM bookings WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: bookings.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: bookings.php'); 
    }    
}

if(isset($_POST['update_booking']))
{
    $booking_id = $_POST['booking_id'];
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $adults = $_POST['adults'];
    $childs = $_POST['childs'];

    $query = "UPDATE bookings SET full_name='$full_name', phone='$phone', check_in='$check_in', check_out='$check_out', adults='$adults', childs='$childs'
    WHERE id='$booking_id'";

    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status']="Edit Successfully!";
        header('Location: bookings.php');
        exit(0);
    }
}
?>