
<?php
session_start();
// connection is made to hit the database.
//Session is being destroyed by applying the functions.
//Code reference: stack overflow 
//Code reference: robinsnest example given by professor.
$hn = 'atmysqlpxc01.at.illinoisstate.edu';
$db = 'coe_dm';
$un = 'coe_dm_dba';
$pw = 'fQ^JPCw77*PvTd';

$connection = mysqli_connect($hn, $un, $pw, $db);
if ($connection->connect_error)
    die($connection->connect_error);


function queryMysql($query) {
    global $connection;
    $result = $connection->query($query);
    if (!$result)
        die($connection->error);
    return $result;
}

function destroySession() {
    $_SESSION = array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time() - 2592000, '/');

    session_destroy();
}

function sanitizeString($var) {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
}

?>
