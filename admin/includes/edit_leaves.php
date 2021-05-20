 <?php
    
    global $connection;




if(isset($_GET['l_id'])){
    
  $the_l_id = $_GET['l_id'];

}

    
    $query = "SELECT * FROM bani where leave_no=$the_l_id";
    $select_leaves_by_id = mysqli_query($connection,$query);
   
    while($row = mysqli_fetch_assoc($select_leaves_by_id))
{
    
       
        $stud_id = $row['stud_id'];
         $stud_name = $row['stud_name'];
    
        $class = $row['class'];

        $father_name = $row['father_name'];
 
        $reason = $row['reason'];
     
        $date_from = $row['date_from'];
       
        $date_to = $row['date_to'];
    
        $leave_type = $row['leave_type'];
   
        $address = $row['address'];
   
         $image = $row['image'];
      
  
    }
  



if(isset($_POST['update_leave'])){
    
 
$stud_id = $_POST['stud_id'];
$stud_name = $_POST['stud_name'];    
$class = $_POST['class'];
$father_name = $_POST['father_name'];
$reason = $_POST['reason'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$leave_type = $_POST['leave_type'];
$address = $_POST['address'];
$image = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];  
  move_uploaded_file($image_temp,"../images/$image");
     
    if(empty($image)) {
        $query = "SELECT * FROM bani where l_id = $the_l_id ";
        $select_image = mysqli_query($connection , $query);
        while($row = mysqli_fetch_array($select_image)){
            $image = $row['image'];
        }
    }
    
    
    
    $query = "UPDATE bani SET ";
    $query .="stud_id = '{$stud_id}', ";
     $query .="stud_name = '{$stud_name}', ";
    $query .="class = '{$class}', ";
    $query .="father_name = '{$father_name}', ";
    $query .="date_from = '{$date_from}', ";
    $query .="date_to = '{$date_to}', ";
    $query .="leave_type = '{$leave_type}', ";
    $query .="address = '{$address}', ";
    $query .="image = '{$image}' ";
    $query .=" WHERE leave_no = {$the_l_id} ";

       
$update_leave = mysqli_query($connection, $query);
  
    if(! update_leave){
        die("Query failed" . mysqli_error($connection));
    }

    
    
    
}
?>
  
  


   
    <form action="" method="post" enctype="multipart/form-data">    
     
     
     
         <div class="form-group">
       <label for="stud_id">Student's Id</label>
        <input value="<?php echo $stud_id; ?>" type="text" class="form-control" name="stud_id">
 
      </div>
      
 <div class="form-group">
       <label for="stud_id">Student's Name</label>
        <input value="<?php echo $stud_name; ?>" type="text" class="form-control" name="stud_id">
 
      </div>
    
    
     <div class="form-group">
         <label for="class">Class</label>
          <input value="<?php echo $class ?>" type="text" class="form-control" name="class">
      </div> 
     
     
     
     <div class="form-group">
         <label for="father_name">Father's/Guardian Name</label>
         <input value="<?php echo $father_name; ?>" type="text" class="form-control" name="father_name">
      </div> 
      
      <div class="form-group">
         <label for="reason">Reason</label>
          <input value="<?php echo $reason ?>" type="text" class="form-control" name="reason">
      </div> 
      
      <div class="form-group">
         <label for="date_from">Date From</label>
          <input value="<?php echo $date_from ?>" type="date" class="form-control" name="date_from">
      </div> 
     
     <div class="form-group">
         <label for="date_to">Date TO</label>
          <input value="<?php echo $date_to ?>" type="date" class="form-control" name="date_to">
      </div> 
     
     
      <div class="form-group">
         <label for="leave_type">Type of Leave</label>
          <input value="<?php echo $leave_type ?>" type="text" class="form-control" name="leave_type">
      </div> 
     
     
     
     
    <!--     <div class="form-group">
          <label for="leave_type">leave_type</label>
         <select name="leave_type" id="1">
             <option value="draft">Leave Status</option>
             <option value="published">Published</option>
             <option value="draft">Draft</option>
         </select>
      </div>
      -->
      
      <div class="form-group">
         <label for="address">Address</label>
          <input value="<?php echo $address ?>" type="text" class="form-control" name="address">
      </div>
      
      
      <div class="form-group">
        
         <label for="image">Image</label>
         <img width= "100" src="../images/<?php echo $image ?>" alt="";
              </div>
    
     
    
      
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update_leave" value="Submit">
      </div>


</form>
