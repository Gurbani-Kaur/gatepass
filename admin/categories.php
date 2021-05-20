
    

    
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
                       
                       <?php  insert_categories();  
                       ?>
               <form action="" method="post">
                           
                           <div class="form-group">
                              <label for="cat-title">Add Courses</label>
                               <input class="form-control" type="text" name="cat_title">
                           </div>
                            
                           <div class="form-group">
                               <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                           </div>
                       </form>
                       
                       </div>
                       
                            <div class="col-xs-6">
                            
                            
                            
                            
                            
                                      
  <?php
                    
                     
                    
      ?>
                   
                            
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Course Title</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                   
                                   
                                   
                                   
           <?php //find all categories query
                                    
                                       $query = "SELECT * FROM categories";
                    $select_categories = mysqli_query($connection, $query);
                   
             while($row = mysqli_fetch_assoc($select_categories))
                    {
                     $cat_id = $row['cat_id'];
                     $cat_title = $row['cat_title'];
                  
                                     
                        echo "<tr>" ;            
                                     
                        echo "<td>{$cat_title}</td>";
                         echo "<td>{$cat_id}</td>";
                         echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";

                                        echo "<tr>" ;    
                    }
                           
                                ?>
                                 
                                 <?php // DELETE QUERY
                                    
                             if(isset($_GET['delete']))  {
                                 $the_cat_id = $_GET['delete'];
                                 
                                 $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
                                 
                                 $delete_query = mysqli_query($connection,$query);
                                 header("Location: categories.php");
                                 
                                 
                                 
                                 
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