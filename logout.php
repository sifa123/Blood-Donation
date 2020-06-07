<?php
session_start();
$un=$_session['un'];
session_destroy();
header('Location:index.php');
?>