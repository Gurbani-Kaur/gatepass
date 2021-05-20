<?php include "includes/parent_header.php" ?>
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
        
        
        <?php


  if(isset($_POST['edit_users'])) {
       
            
            $user_firstname   = ($_POST['user_firstname']);
            $user_lastname    = ($_POST['user_lastname']);
            $user_role        = ($_POST['user_role']);
    
           // $post_image = $_FILES['image']['name'];
           // $post_image_temp = $_FILES['image']['tmp_name'];
    
            $user_phone     =($_POST['user_phone']);
            $username      = ($_POST['username']);
            $user_email    =($_POST['user_email']);
            $user_password =($_POST['user_password']);
        
            //$post_date     = escape(date('d-m-y'));


       
          $query = "UPDATE users SET ";
          $query .="user_firstname  = '{$user_firstname}', ";
          $query .="user_lastname = '{$user_lastname}', ";
          $query .="user_role   =  '{$user_role}', ";
          $query .="username = '{$username}', ";
          $query .="user_phone = '{$user_phone}', ";
          $query .="user_email = '{$user_email}', ";
          $query .="user_password   = '{$user_password}' ";
         $query .= "WHERE username = '{$username}' ";
       
       
            $edit_user_query = mysqli_query($connection,$query);
       
           confirm($edit_user_query);
      
      if(!$edit_user_query){
      die("Query failed " . mysqli_error($connection));
  }  

         
    
}


?>
        
     
        
    <div id="wrapper">



        <!-- Navigation -->
 
        <?php include "includes/parent_navigation.php" ?>
        
        
    

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">

  <h1 class="page-header">
                Welcome !!!
                <small><?php echo $_SESSION ['username'] ?></small>
            </h1>
      
            
            <form action="" method="post" enctype="multipart/form-data">    
     
     
     
      <div class="form-group">
         <label for="title">Firstname</label>
          <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
      </div>
      
      
      

       <div class="form-group">
         <label for="post_status">Lastname</label>
          <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
      </div>
     
     
         <div class="form-group">
       
       
       
       
       
      </div>
      
<!--
      <div class="form-group">
         <label for="post_image">Post Image</label>
          <input type="file"  name="image">
      </div>
-->

      <div class="form-group">
         <label for="post_tags">Username</label>
          <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
      </div>
      
    <label for="post_tags">Registered Phone Number :</label>
    <label for="post_tags"><?php echo $user_phone; ?></label>
     
      
      <div class="form-group">
         <label for="post_content">Email</label>
          <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
      </div>
      
      <div class="form-group">
         <label for="post_content">Password</label>
          <input type="password" value="<?php //echo $user_password; ?>" class="form-control" name="user_password">
      </div>
      
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="edit_users" value="Update Profile">
      </div>


</form>
      
            
            
       

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

     
        <!-- /#page-wrapper -->
        
    <?php include "includes/parent_footer.php" ?>
