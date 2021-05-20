<?php ob_start(); ?>
<?php include "../includes/db.php" ?>
<?php /* include "functions.php" */ ?>
<?php session_start(); ?>


<?php

if(!isset($_SESSION['username'])){
    
    
    
     header("Location: ../index.php");

}


?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gate Pass System></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
    
    if(isset($_SESSION['username'])) {
       
      $username = $_SESSION['username'];
        
        $query = "SELECT * FROM users WHERE username = '{$username}' " ;
        $select_profile_query = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_array($select_profile_query)) {
            
    
        
        
         $user_id          = $row['user_id'];
        $username         = $row['username'];
        $user_password    = $row['user_password'];
        $user_firstname   = $row['user_firstname'];
        $user_lastname    = $row['user_lastname'];
        $user_email       = $row['user_email'];
        $user_role        = $row['user_role'];
        $user_phone        = $row['user_phone'];    
      
    }
  
    }
        ?>
        
   
         







<html>
<head>
<title>How to Implement OTP SMS Mobile Verification in PHP with TextLocal</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<div class="container">
		<div class="error"></div>
		<form id="frm-mobile-verification">
			<div class="form-heading">Mobile Number Verification</div>

			
		
     
 <div class="form-row">
        
          <input type="number" value="<?php echo $user_phone; ?>" id="mobile" class="form-input" >
        </div>

     		
     			
     					
     
			

			<input type="button" class="btnSubmit" value="Send OTP"
				onClick="sendOTP();">
		</form>
	</div>

	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>
</body>
</html>







