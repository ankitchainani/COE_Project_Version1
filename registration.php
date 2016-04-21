<?php

require_once './functions.php';
// heart of the assignment where db hits on the post connection and vallidate the forms.
// Check connection to db
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //input data
    $email = $_POST['phpemail'];
    $pwd = $_POST['phppwd'];
    $name = $_POST['phpname'];
    $phone = $_POST['phpphone'];

    //email already exists as per the requirements
    $query = "SELECT * FROM customers where email = '$email'";
    $result1 = mysqli_query($conn, $query);
    $count1 = mysqli_num_rows($result1);

    if ($count1 > 0) {
        //email already exists, try entering different email
        $json_array = array(
            'success' => false,
            'result' => 0,
            'message' => 'Email already registered.'
        );
        echo json_encode($json_array);
        
    } else {
        $sql = "INSERT INTO customers (email, password, firstName, phone) VALUES ('$email','$pwd','$name','$phone')";
        // Insert the data
        if (mysqli_query($conn, $sql)) {
            
            $json_array = array(
                'success' => true,
                'result' => 0,
                'message' => 'Registration successful.'
            );
            echo json_encode($json_array);
           
        } else {
            //exception handling in sql
            $json_array = array(
                'success' => false,
                'result' => 0,
                'message' => 'Error while inserting data'
            );
            echo json_encode($json_array);
          
        }
    }
}

// close connection
mysqli_close($conn);
?>
