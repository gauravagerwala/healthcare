<?php
    include("config.php");
    session_start();
    
    $user_email = $_SESSION['login_user'];
    
    $qSes = mysqli_query($conn, "SELECT p_email from patient where p_email = '$user_email'");
    
    $row = mysqli_fetch_array($qSes,MYSQLI_ASSOC);
    
    $login_session = $row['p_email'];
    
    if(!isset($_SESSION['login_user'])){
        header("location: login.php");
    }
?>