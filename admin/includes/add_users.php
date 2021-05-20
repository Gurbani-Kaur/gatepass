<?php



if(isset($_POST['create_user'])){
    
//$leave_no = $_POST['leave_no'];

$user_firstname = $_POST['user_firstname'];
$user_lastname = $_POST['user_lastname'];
$user_role = $_POST['user_role'];
$username = $_POST['username'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$user_phone = $_POST['user_phone'];
    //$address = $_POST['address'];
   //$image = $_FILES['image']['name'];
  //$image_temp = $_FILES['image']['tmp_name'];
    
  //move_uploaded_file($image_temp,"../images/$image");
    
    
    $query = "INSERT INTO users(username, user_firstname, user_lastname, user_role, user_email, user_password, user_phone)" ;
    
$query .= "VALUES('{$username}','{$user_firstname}','{$user_lastname}','{$user_role}','{$user_email}','{$user_password}','{$user_phone}')";
    
    
 $create_user_query = mysqli_query($connection, $query);
    
 confirm($create_user_query);
    echo "User Created";
    
 
    
}
?>
   

   
        <form action="" method="post" enctype="multipart/form-data">    
     
     
     
      <div class="form-group">
         <label for="title">Firstname</label>
          <input type="text" class="form-control" name="user_firstname">
      </div>
      
      
      

       <div class="form-group">
         <label for="post_status">Lastname</label>
          <input type="text" class="form-control" name="user_lastname">
      </div>
     
     
            <div class="form-group">
       
       <select name="user_role" id="">
         <option value="select">Select Options</option>
          <option value="parent">Parent</option>
          <option value="admin">Admin</option>
          <option value="hod">Hod</option>
  
       </select>
     
      </div>
   
      
<!--
      <div class="form-group">
         <label for="post_image">Post Image</label>
          <input type="file"  name="image">
      </div>
-->

      <div class="form-group">
         <label for="post_tags">Username</label>
          <input type="text" class="form-control" name="username">
      </div>
      
      <div class="form-group">
         <label for="post_content">Email</label>
          <input type="email" class="form-control" name="user_email">
      </div>
      
      <div class="form-group">
         <label for="post_content">Password</label>
          <input type="password" class="form-control" name="user_password">
      </div>
      
       <div class="form-group">
         <label for="user_phone">Phone number</label>
          <input type="text" class="form-control" name="user_phone">
      </div>
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
      </div>

      
</form>
    