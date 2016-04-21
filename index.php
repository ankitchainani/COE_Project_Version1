<?php
//Code reference: stack overflow 
//Code reference: robinsnest example given by professor
// made this spereate file to distinguish the concept og being loggedin and logged out in order to show the the scenario's
// when the user is logged in and logged out. 
//Session works accordingly


session_start();

if (isset($_SESSION['user'])) {
    require "./Welcome.php";
} else {
    $_SESSION = array();
    require "./HomePage.php";
}
?>
