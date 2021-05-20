
<?php

 global $connection;
//echo "gatepass";

 if(isset($_GET['l_id'])){
    
 $leave_id = $_GET['l_id'];

 

    
    $query = "SELECT  leave_no, stud_name, stud_id, class, date_from, date_to FROM bani where leave_no = $leave_id ";
    $result= mysqli_query($connection,$query);

 }
  //  while($row= mysqli_fetch_array($result))
    
                //echo "leave_id :" . $row['leave_no'];
                // echo "student id :" . $row['stud_id'];
         // echo $row ;
    
    
     
    $row = mysqli_fetch_array($result);
       
    // $sql='SELECT * FROM sales WHERE id=' .$id;
    // $result = mysqli_query($sql,$link);
    // $row = mysql_fetch_array($result);

       echo "GatePass" . "<br>" . "<br>" . "<br>";
     //print_r( $row );      
    echo "Serial No.      :       " . $row["leave_no"] . "<br>" . "<br>";
    echo "Student's Name :       " . $row["stud_name"]."<br>"."<br>";
    echo "Student's ID   :       " . $row["stud_id"]."<br>"."<br>";
    echo "Class          :       " . $row["class"]."<br>"."<br>";
    echo "Date from      :       " . $row["date_from"]."<br>"."<br>";
    echo "Date to        :       " . $row["date_to"]."<br>"."<br>";


 echo "Leave is approved by ".$_SESSION['username'] ;

//while($row = $generate->fetch_assoc()  ){
   // echo "leave id :" . $row["leave_no"];
    

?>

<?php


/*
while($row = mysqli_fetch_array($select_user_query)) {
     
   $l_id = $row['leave_no'] ;
    $l_stud_name= $row['stud_name'];
     $l_stud_id = $row['stud_id'];
    $l_class = $row['class'] ; 
    $l_from = $row['date_from'] ;
     $l_to = $row['date_to'] ;    
 
}

//if(isset($_POST['generate']))
  if(isset($_POST['generate'])){  
      
      $d_id = $l_id;
    $d_stud_name=  $l_stud_name;
     $d_stud_id = $l_stud_id ;
    $d_class = $l_class;
    $d_from = $l_from;
     $d_to = $l_to ;

     }

 
 <form action="" method="post" enctype="multipart/form-data">    
     
     
    
     
     
  
      
      <div class="form-group">
         <label for="d_id">leave id</label>
          <?php echo $d_id ?>
      </div> 
     
     <div class="form-group">
         <label for="d_stud_name">Student name</label>
         <?php echo $d_stud_name ?>
      </div> 



*/
?>


