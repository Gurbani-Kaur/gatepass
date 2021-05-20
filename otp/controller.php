



<?php  

if(isset($_GET['delete'])){
    
    
    $the_leave_no = $_GET['delete'];
    $query = "DELETE FROM bani WHERE leave_no = {$the_leave_no}";
    $reject_query = mysqli_query($connection, $query);
}




 
session_start();
error_reporting(E_ALL & ~ E_NOTICE);
require ('textlocal.class.php');

class Controller
{
    function __construct() {
        $this->processMobileVerification();
    }
    function processMobileVerification()
    {
        switch ($_POST["action"]) {
            case "send_otp":
                
                $mobile_number = $_POST['mobile_number'];
                
                $apiKey = urlencode('VnEBHD7RgVI-P8R1w1wiG8JtUWw7ghncjskjwmpKW6');
                $Textlocal = new Textlocal(false, false, $apiKey);
                
                $numbers = array(
                    $mobile_number
                );
                $sender = 'TXTLCL';
                $otp = rand(100000, 999999);
                $_SESSION['session_otp'] = $otp;
                $message = "Your One Time Password is " . $otp;
                
                try{
                    $response = $Textlocal->sendSms($numbers, $message, $sender);
                    require_once ("verification-form.php");
                    exit();
                }catch(Exception $e){
                    die('Error: '.$e->getMessage());
                }
                break;
                
            case "verify_otp":
                $otp = $_POST['otp'];
                
                if ($otp == $_SESSION['session_otp']) {
                    unset($_SESSION['session_otp']);
                    echo json_encode(array("type"=>"success", "message"=>"Your leave application has been sent successfully"));
                    
                    
                } else {
                    echo json_encode(array("type"=>"error", "message"=>"Mobile number verification failed"));
                    
                   
                }
                break;
        }
    }
}
$controller = new Controller();
?>