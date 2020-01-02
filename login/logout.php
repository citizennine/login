<?php

# clear session
session_start();
$_SESSION = array();
session_destroy();

# redirect back to landing page
header('location:../index.php');
exit;
?>
