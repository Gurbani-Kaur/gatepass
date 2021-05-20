
    

    
    <?php include "includes/parent_header.php"   ?>

    <div id="wrapper">

        <!-- Navigation -->
        
        
   <?php include "includes/parent_navigation.php"   ?>
       
       
       
       
       
       
       
    
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

   
   
   
   <?php include "includes/parent_footer.php"  ?>