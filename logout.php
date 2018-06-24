<?php
session_start();
session_unset(); 
header('Location: first.php');
session_destroy(); 
?>
