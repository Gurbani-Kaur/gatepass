<?php  

if(isset($_POST['checkBoxArray'])) {

    
    foreach($_POST['checkBoxArray'] as $commentValueId ){
        
  $bulk_options = $_POST['bulk_options'];
        
        switch($bulk_options) {
        case 'approved':
        
$query = "UPDATE comments SET comment_status = '{$bulk_options}' WHERE comment_id = {$commentValueId}  ";
        
 $update_to_approved_status = mysqli_query($connection,$query);
            
confirmQuery( $update_to_approved_status);
            
            
         break;
            
            
              case 'unapproved':
        
$query = "UPDATE comments SET comment_status = '{$bulk_options}' WHERE comment_id = {$commentValueId}  ";
        
 $update_to_unapproved_status = mysqli_query($connection,$query);
            
confirmQuery($update_to_unapproved_status);
            
            
         break;
            
  
            
               case 'delete':
        
$query = "DELETE FROM comments WHERE comment_id = {$commentValueId}  ";
        
 $update_to_delete = mysqli_query($connection,$query);
            
confirmQuery($update_to_delete);
            
            
         break;
        
        
        }
    
    
    } 



}




?>



<form action="" method='post'>
               
               <table class="table table-bordered table-hover">
               
               <div id="bulkOptionContainer" class="col-xs-4">

        <select class="form-control" name="bulk_options" id="">
        <option value="">Select Options</option>
        <option value="approved">Approve</option>
        <option value="unapproved">Unapprove</option>
        <option value="delete">Delete</option>
        </select>

        </div> 

            
<div class="col-xs-4">

<input type="submit" name="submit" class="btn btn-success" value="Apply">

 </div>

                <thead>
                    <tr>
                       <th><input id="selectAllBoxes" type="checkbox"></th>
                        <th>Id</th>
                        <th>Username</th>
                        <th>First Name</th>
                         <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Phone</th>
      
                    </tr>
                </thead>
                
                      <tbody>
                      

  <?php 
    
    $query = "SELECT * FROM users";
    $select_users = mysqli_query($connection,$query);
//    $select_comments=  mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_users)) {
        $user_id          = $row['user_id'];
        $username         = $row['username'];
        $user_password    = $row['user_password'];
        $user_firstname   = $row['user_firstname'];
        $user_lastname    = $row['user_lastname'];
        $user_email       = $row['user_email'];
        $user_role        = $row['user_role'];
        $user_phone        = $row['user_phone'];    
  // we have to add image also if needed      
        echo "<tr>";
        
        ?>
        
 <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $comment_id; ?>'></td>
          
        
        <?php
        
        echo "<td>$user_id </td>";
        echo "<td>$username </td>";
        echo "<td>$user_firstname</td>";
        echo "<td>$user_lastname</td>";
            
//        
//        $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
//        $select_categories_id = mysqli_query($connection,$query);  
//
//        while($row = mysqli_fetch_assoc($select_categories_id)) {
//        $cat_id = $row['cat_id'];
//        $cat_title = $row['cat_title'];
//
//        
//        echo "<td>{$cat_title}</td>";
//            
//        }
//        
     
        echo "<td>$user_email</td>";
        echo "<td>$user_role</td>";
            echo "<td>$user_phone</td>";    
        
  // $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
    //    $select_post_id_query = mysqli_query($connection,$query);
   //     while($row = mysqli_fetch_assoc($select_post_id_query)){
   //     $post_id = $row['post_id'];
     //   $post_title = $row['post_title'];
            
      //      echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
        
        
     //   }
        
        


        echo "<td><a href='users.php?source=edit_users&edit_users={$user_id}'>Edit</a></td>";
        echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
        echo "</tr>";
   
    }




      ?>


   
            </tbody>
            </table>
            
            </form>
            
            
<?php





if(isset($_GET['delete'])){
    
    $the_user_id =($_GET['delete']);
    
    $query = "DELETE FROM users WHERE user_id = {$the_user_id} ";
    $delete_query = mysqli_query($connection, $query);
    header("Location: users.php");
    
    
}




?>     
            
            
            
            
            
            
            
      