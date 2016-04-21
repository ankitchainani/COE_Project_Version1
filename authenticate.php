<?php
// File is created for the authenticating the user, and made accordingly as per the requirements. 
//as a whole, loggedin and loggedout files are being handled. 
require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $myusername = ($_POST['phpusername']);
    $mypass = ($_POST['phppassword']);
    
    

    $sql = "SELECT * FROM User WHERE ULID='$myusername' AND PASSWORD = '$mypass'";
    $result = queryMysql($sql);
    $count = $result -> num_rows;

    if ($count == 1) {
        $_SESSION['user'] = $myusername;
        $_SESSION['loggedIn'] = TRUE;
        //echo 1;
        $json_array = array(
            'success' => true,
            'result' => 1,
            'message' => 'User Login Successful'
        );
        echo json_encode($json_array);
    } else {
        $_SESSION['loggedIn'] = FALSE;
        $json_array = array(
            'success' => false,
            'result' => 0,
            'message' => 'wrong credentials.'
        );
        echo json_encode($json_array);        
    }
}
?>

