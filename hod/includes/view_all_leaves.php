                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>

 <th>Leave No</th>
 <th>Student Name</th>
  <th>Student Id</th>
  <th>Class</th>
<th>Father's/Guardian Name</th>
     <th>Reason</th>
  <th>Date From</th>
<th>Date To</th>
<th>leave_type</th>
 <th>address</th>
  <th>Attachment</th>
     </tr>
             </thead>
                       <tbody>
                            
      <?php
    
    global $connection;

    
    $query = "SELECT * FROM bani";
    $select = mysqli_query($connection,$query);
   
    while($row = mysqli_fetch_assoc($select))
{
        $leave_no = $row['leave_no'];
        
          $stud_name = $row['stud_name'];
        $stud_id = $row['stud_id'];
        
        $class = $row['class'];
      
        $father_name = $row['father_name'];
         
        $reason = $row['reason'];
        
        $date_from = $row['date_from'];
        
        $date_to = $row['date_to'];
        
        $leave_type = $row['leave_type'];
        
        $address = $row['address'];
        
         $image = $row['image'];
        
        
         echo "<td>{$leave_no}</td>";
         echo "<td>{$stud_name}</td>";
         echo "<td>{$stud_id}</td>";
          echo "<td>{$class}</td>";
        echo "<td>{$father_name}</td>";
         echo "<td>{$reason}</td>";
         echo "<td>{$date_from}</td>";
         echo "<td>{$date_to}</td>";
         echo "<td>{$leave_type}</td>";
         echo "<td>{$address}</td>";
        
        
        echo "<td><img width='100' src='../images/$image' alt='image'></td>";
        
        
      //  echo "<td><a href='posts.php?source=edit_leaves&l_id={$leave_no}'>Edit</a></td>";
        echo "<td><a href='posts.php?delete={$leave_no}'>Reject</a></td>";
        echo "<td><a href='posts.php?source=change_date&l_id={$leave_no}'>Change</a></td>"; 
        echo "<td><a href='posts.php?source=generate&l_id={$leave_no}' >generate </a></td>";
       // echo  "<td><button onclick=\"location.href='posts.php'\"source=generate&leave={$leave_no}>Generate gatepass</button></td>"; 
        //echo "<td><button onclick=\"location.href='inc/name_of_php_file.php'\" >your buttons name goes here</button></td>";
                           
      echo "<tr>";
        
    
    }
        
        
  //  $stud_id = $row['stud_id'];
   //     echo "<td>{$cat_id}</td>";
        
   // $leave_no = $row['leave_no'];
   // $class = $row['class'];
   // $father_name = $row['father_name'];
   // $reason = $row['reason'];
   // $date_from = $row['date_from'];
   // $date_to = $row['date_to'];
   // $leave_type = $row['leave_type'];
   // $address = $row['address'];
//    $attachment = $row['attachment'];

    

                           
                     /*             
                               <td>10</td>
                                   <td>Gurdeep Singh</td>
                                   <td>Emergency</td>
                                   <td>24th sep</td>
                                   <td>27th sep</td>
                                   <td>Status</td>
                                 
                                   <td>Image</td>
                                   <td>Alone</td>
                                   <td>Comments</td>
                                   <td>address</td>
                      -->
                            </tbody>
                        </table>
                        
                       
                      
                     
                    
                   
                  
                 
  

if(isset($_GET['delete'])){
    
    
    $the_leave_no = $_GET['delete'];
    $query = "DELETE FROM bani WHERE leave_no = {$the_leave_no}";
    $reject_query = mysqli_query($connection, $query);
    
}

*/

?>




