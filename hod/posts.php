
    

    
    <?php include "includes/hod_header.php"   ?>

    <div id="wrapper">

        <!-- Navigation -->
        
        
   <?php include "includes/hod_navigation.php"   ?>
       
       
       
       
       
       
       
    
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   
                  <div class="col-lg-12">
                      <h1 class="page-header">
                            Welcome
                            <small><?php echo $_SESSION ['username'] ?></small>
                          <small><?php echo "!!!"?></small>
                        </h1>
                        
                        
                        
                        <?php 
                      
                      
      if(isset($_GET['source'])){
          $source = $_GET['source'];
      }       
else{
    $source = '';
}
                      
      switch($source) {
             // case 'add_posts';
                
             // "includes/add_posts.php";
             //   break ;
         // case 'view_all_leaves':
            //    include "includes/view_all_leaves.php";
           //   break;
              
              
          case 'add_leaves':
                
             include "includes/add_leaves.php";
                break ;
              
              
          case 'edit_leaves':
                include "includes/edit_leaves.php";
                break ;
              
              
          case 'change_date':
              include "includes/change_date.php";
                break ;
              
         case 'generate':
              include "includes/gatepass.php";
              break;
          
          default:
              include "includes/view_all_leaves.php";
              break;
              
              
              
              
      }                
                  ?>
                    </div>  

                        
                  </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   
   
   
   <?php include "includes/hod_footer.php"  ?>