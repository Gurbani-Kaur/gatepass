
    

    
    <?php include "includes/admin_header.php"   ?>

    <div id="wrapper">

        <!-- Navigation -->
        
        
   <?php include "includes/admin_navigation.php"   ?>
       
      
      
      
      
       
    
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small><?php echo $_SESSION ['username'] ?></small>
                        </h1>
                       
                       <div class="col-xs-6">
                       
                       <?php  insert_dept();  
                       ?>
               <form action="" method="post">
                           
                           <div class="form-group">
                              <label for="d_name">Department name</label>
                               <input class="form-control" type="text" name="d_name">
                           </div>
                           <div class="form-group">
                              <label for="d_name">Department short name</label>
                               <input class="form-control" type="text" name="d_sname">
                           </div>
                           <div class="form-group">
                              <label for="d_name"> Department Code</label>
                               <input class="form-control" type="text" name="d_code">
                           </div>
                           <div class="form-group">
                              <label for="d_name">HOD Name</label>
                               <input class="form-control" type="text" name="d_hod">
                           </div>
                           
                            
                           <div class="form-group">
                               <input class="btn btn-primary" type="submit" name="submit" value="Add Department">
                           </div>
                       </form>
                       
                       </div>
                       
                            <div class="col-xs-6">
                            
                            
                            
                            
                            
                                      
  <?php
                    
                     
                    
      ?>
                   
                            
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S No</th>
                                        <th>Department Name</th>
                                        <th>Short Name</th>
                                        <th>Code</th>
                                        <th>Hod</th>
                                       
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                   
                                   
                                   
                                   
           <?php //find all departments query
                                    
                    $query = "SELECT * FROM department";
                    $select_department = mysqli_query($connection, $query);
                   
             while($row = mysqli_fetch_assoc($select_department))
                    {
                     $d_id = $row['d_id'];
                     $d_name = $row['d_name'];
                     $d_sname = $row['d_sname'];
                     $d_code = $row['d_code'];
                     $d_hod = $row['d_hod'];
                                     
                        echo "<tr>" ;            
                        echo "<td>{$d_id}</td>";           
                         echo "<td>{$d_name}</td>";
                         echo "<td>{$d_sname}</td>";
                         echo "<td>{$d_code}</td>";
                         echo "<td>{$d_hod}</td>";
                      
                         echo "<td><a href='department.php?delete={$d_id}'>Delete</a></td>";

                                        echo "<tr>" ;    
                    }
                           
                                ?>
                                 
                                 <?php // DELETE QUERY
                                    
                             if(isset($_GET['delete']))  {
                                 $the_d_id = $_GET['delete'];
                                 
                                 $query = "DELETE FROM department WHERE d_id ={$the_d_id}";
                                 
                                 $delete_query = mysqli_query($connection,$query);
                                 header("Location: department.php");
                                 
                                 
                                 
                                 
                             }     
                                    
                                    
                                    
                                    ?>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   
   
   
   <?php include "includes/admin_footer.php"  ?>