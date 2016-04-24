<?php
    include("config.php");
    
    $name = $_POST['hospital_name'];
    $location = $_POST['location'];
    $id = $_POST['h_unique_name'];
        
    if($_POST["password"] == $_POST["repassword"]){
		$pass = $_POST["password"];
	}else{
		die("Passwords entered do not match");
	}
    
    $qDoctor = "INSERT INTO hospital (h_name, h_location, h_password_hash, h_unique_name)
                            VALUES('$name', '$location', '$pass', $id)";
    
    $a = mysqli_query($conn,$qDoctor);
    if(!$a){
        die(mysqli_error($conn));
    }
    
    mysqli_close($conn);
    
?>