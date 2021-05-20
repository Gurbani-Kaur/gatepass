 <?php
    
    global $connection;


if(isset($_GET['l_id'])){
    
  $the_l_id = $_GET['l_id'];

}

    
    $query = "SELECT * FROM bani where leave_no = $the_l_id ";
    $change_leaves_by_id = mysqli_query($connection,$query);
   
    while($row = mysqli_fetch_assoc($change_leaves_by_id))
{
    
    
     
        $date_from = $row['date_from'];
       
        $date_to = $row['date_to'];

    }
  

if(isset($_POST['change_date'])){

//$stud_id = $_POST['stud_id'];
//$class = $_POST['class'];
//$father_name = $_POST['father_name'];
//$reason = $_POST['reason'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
//$leave_type = $_POST['leave_type'];
//$address = $_POST['address'];
//$image = $_FILES['image']['name'];
//$image_temp = $_FILES['image']['tmp_name'];
    
  //move_uploaded_file($image_temp,"../images/$image");

    
          
      
      
    $query = "UPDATE bani SET ";

    $query .="date_from = '{$date_from}', ";
    $query .="date_to = '{$date_to}' ";
    $query .= "WHERE leave_no = {$the_l_id} ";
     
$change_date = mysqli_query($connection, $query);

  
    if(! $change_date){
        die("Query failed" . mysqli_error($connection));
    }
    
    
}
?>
  
  


   
    <form action="" method="post" enctype="multipart/form-data">    
     
     
    
     
     
  
      
      <div class="form-group">
         <label for="date_from">Date From</label>
          <input value="<?php echo $date_from ?>" type="date" class="form-control" name="date_from">
      </div> 
     
     <div class="form-group">
         <label for="date_to">Date TO</label>
          <input value="<?php echo $date_to ?>" type="date" class="form-control" name="date_to">
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
          <input class="btn btn-primary" type="submit" name="change_date" value="Change">
      </div>


</form>
