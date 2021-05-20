<?php include "db.php";  ?>

<?php session_start(); ?>




<?php 
if(isset($_POST['login'])) {
    
$username = $_POST['username'];
$password =  $_POST['password'];

    
    //cleaning data
$username = mysqli_real_escape_string($connection, $username ); 
    
 $password = mysqli_real_escape_string($connection, $password );   
    
    
 $query = "SELECT * FROM users WHERE username = '{$username}' " ; 
    
$select_user_query = mysqli_query($connection,$query);
    if(!$select_user_query) {
        
        die("Query Failed" . mysqli_error($connection));
        
    }
    
 while($row = mysqli_fetch_array($select_user_query)) {
     
   $db_id = $row['user_id'] ;
     $db_username = $row['username'];
    $db_password = $row['user_password'] ; 
    $db_firstname = $row['user_firstname'] ;
     $db_lastname = $row['user_lastname'] ;
     $db_email = $row['user_email'] ;
    $db_role = $row['user_role'] ;
 
     
     
 } 
    
 
 if($username === $db_username && $password === $db_password && $db_role == 'admin') 
{
     
     
    
 $_SESSION['username'] = $db_username;
$_SESSION['user_firstname'] = $db_firstname;
$_SESSION['user_lastname'] = $db_lastname;
$_SESSION['user_email'] = $db_email;
$_SESSION['user_role'] = $db_role;
    
    
  header("Location: ../admin");
}
    
     
 else if($username === $db_username && $password === $db_password && $db_role == 'hod') 
{
    
 $_SESSION['username'] = $db_username;
$_SESSION['user_firstname'] = $db_firstname;
$_SESSION['user_lastname'] = $db_lastname;
$_SESSION['user_email'] = $db_email;
$_SESSION['user_role'] = $db_role;
    
    
  header("Location: ../hod");
}

        
 else if($username === $db_username && $password === $db_password && $db_role == 'parent') 
{
    
 $_SESSION['username'] = $db_username;
$_SESSION['user_firstname'] = $db_firstname;
$_SESSION['user_lastname'] = $db_lastname;
$_SESSION['user_email'] = $db_email;
$_SESSION['user_role'] = $db_role;
    
    
  header("Location: ../parent");
}


    
    else{
        header("Location: ../index.php");
    }
  
}

?>