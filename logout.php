<?php
// Code reference: robinsnest application.
// Session destroy concept dicussed in class.
// window.lcoation concept discussed in class.
session_start();
require_once './functions.php';

if (isset($_SESSION['loggedIn'])) {
    
    destroySession();
    
    echo "<script>window.location = 'index.php'</script>";
    
} else{
    echo "<div class='main'><br>" .
    "Please logout before you login";
}
    
?>