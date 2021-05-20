<?php



if(isset($_POST['create_leave'])){
    
//$leave_no = $_POST['leave_no'];
$stud_id = $_POST['stud_id'];
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
    
    
    $query = "INSERT INTO bani(stud_id, class, father_name, reason, date_from, date_to, leave_type, address, image)" ;
    
$query .= "VALUES('{$stud_id}','{$class}','{$father_name}','{$reason}','{$date_from}','{$date_to}','{$leave_type}','{$address}','{$image}')";
    
    
 $create_leave_query = mysqli_query($connection, $query);
    
    echo "Leave under submitting process";
    
  if(!$create_leave_query){
      die("Query failed " . mysqli_error($connection));
  }  
    //http://localhost:8081/cms/otp/index.php/          ../otp/index.php
    
}
?>
   

   
    <form action="../otp/index.php" method="post" enctype="multipart/form-data">    
     
     
     
         <div class="form-group">
       <label for="stud_id">Student's Id</label>
        <input type="text" class="form-control" name="stud_id">
 
      </div>

     <div class="form-group">
         <label for="class">Class</label>
          <input type="text" class="form-control" name="class">
      </div> 
     
     
     
     <div class="form-group">
         <label for="father_name">Father's/Guardian Name</label>
          <input type="text" class="form-control" name="father_name">
      </div> 
      
      <div class="form-group">
         <label for="reason">Reason</label>
          <input type="text" class="form-control" name="reason">
      </div> 
      
      <div class="form-group">
         <label for="date_from">Date From</label>
          <input type="date" class="form-control" name="date_from">
      </div> 
     
     <div class="form-group">
         <label for="date_to">Date TO</label>
          <input type="date" class="form-control" name="date_to">
      </div> 
     
     
      <div class="form-group">
         <label for="leave_type">Type of Leave</label>
          <input type="text" class="form-control" name="leave_type">
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
          <input type="text" class="form-control" name="address">
      </div>
      
      
      <div class="form-group">
         <label for="image">Image</label>
          <input type="file"  name="image">
      </div>
     
     
    
      
       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_leave" value="Submit">
      </div>


</form>
    