<?php include "includes/admin_header.php"   ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php    if($connection) echo "connected" ?>
        
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
                       
                   
                    </div>
                </div>
                
                     <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                           <?php 
                        
                        
    $query = "SELECT * FROM bani";
    $select_all_leaves = mysqli_query($connection,$query);
    $leaves_counts = mysqli_num_rows($select_all_leaves);


 echo  "<div class='huge'>{$leaves_counts}</div>"
                    ?>
                    
         
                        <div>Leaves</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
                    
                    <?php 
                        
                        
    $query = "SELECT * FROM department";
    $select_all_deps = mysqli_query($connection,$query);
    $dept_counts = mysqli_num_rows($select_all_deps);


 echo  "<div class='huge'>{$dept_counts}</div>"
    
                        

                        
                        ?>
                    
         
                      <div>Departments</div>
                    </div>
                </div>
            </div>
            <a href="department.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                             <?php 
                        
                        
    $query = "SELECT * FROM users";
    $select_all_users = mysqli_query($connection,$query);
    $users_counts = mysqli_num_rows($select_all_users);


 echo  "<div class='huge'>{$users_counts}</div>"
    
                        

                        
                        ?>
                    
         
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                                 <?php 
                        
                        
    $query = "SELECT * FROM categories";
    $select_all_posts = mysqli_query($connection,$query);
    $categories_counts = mysqli_num_rows($select_all_posts);


 echo  "<div class='huge'>{$categories_counts}</div>"
    
            

                        
                        ?>
                    
         
                         <div>Courses</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

                
                              <!-- /.row -->
                              
<?php
                              
                                           
    $query = "SELECT * FROM bani WHERE leave_type = 'emergency' ";
    $select_all_emergency_leaves = mysqli_query($connection,$query);
    $leaves_emergency_count = mysqli_num_rows($select_all_emergency_leaves);
         
      
 $query = "SELECT * FROM bani WHERE leave_type = 'casual' ";
    $select_all_casual_leaves = mysqli_query($connection,$query);
    $leaves_casual_count = mysqli_num_rows($select_all_casual_leaves);

 $query = "SELECT * FROM bani WHERE leave_type = 'academic' ";
    $select_all_academic_leaves = mysqli_query($connection,$query);
    $leaves_academic_count = mysqli_num_rows($select_all_academic_leaves);

 $query = "SELECT * FROM bani WHERE leave_type = 'mid-term' ";
    $select_all_mid_term_leaves = mysqli_query($connection,$query);
    $leaves_mid_term_count = mysqli_num_rows($select_all_mid_term_leaves);

    ?>                          
                              
                              
                              
                
                <div class="row">
                    
                    
                    
               <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Count'],
            
            <?php
     
     
     $element_text = ['leaves','Emergency leaves','Casual','Academic','Mid-Term','Departments','Users','Categories'];
     
    $element_count = [$leaves_counts, $leaves_emergency_count, $leaves_casual_count, $leaves_academic_count, $leaves_mid_term_count, $dept_counts, $users_counts, $categories_counts]; 
     
     
            
   for($i =0;$i < 8; $i++) {
       echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
   }    
       
     

     ?>
            
     //     ['Leaves', 1000],
   
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>     
                    
     <div id="columnchart_material" style="width: 'auto' ; height: 500px;"></div>          
                    
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php"  ?>