<?php





function confirm($result){
      
    global $connection;
  if(!$result){
      die("Query failed " . mysqli_error($connection));
  }  

    
}


function insert_categories(){
    
    global $connection;
                     if(isset($_POST['submit']))
                       {
                          $cat_title = $_POST['cat_title'];
                           
                           if($cat_title == "" || empty($cat_title))
                           {
                               echo "This field should not be empty";
                           }
                           else{
                               $query = "INSERT INTO categories(cat_title)";
                               $query .="VALUE('{$cat_title}')";
                               $create_category_query = mysqli_query($connection,$query);
                               
                               if(!$create_category_query)
                               {
                                   die('Query failed' . mysqli_error($connection));
                               }
                           }
                       }
}






function insert_dept(){
    
    global $connection;
                     if(isset($_POST['submit']))
                       {
                          $d_name = $_POST['d_name'];
                          $d_sname = $_POST['d_sname'];
                          $d_code = $_POST['d_code'];
                          $d_hod = $_POST['d_hod'];
                         
                         
                         
                         
                           if($d_name == "" || empty($d_name))
                           {
                               echo "This field should not be empty";
                           }
                           else{
                             
                               
                               
    $query = "INSERT INTO department(d_name, d_sname, d_code, d_hod)" ;
    
$query .= "VALUES('{$d_name}','{$d_sname}','{$d_code}','{$d_hod}')";
    
                            
                               $create_dept_query = mysqli_query($connection,$query);
                               
                               if(!$create_dept_query)
                               {
                                   die('Query failed' . mysqli_error($connection));
                               }
                           }
                       }
}




?>