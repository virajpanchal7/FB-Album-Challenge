<?php

/*
 * User: Viraj R. Panchal
 * Date: 12-08-2018
*/

session_start();
session_destroy();
header("Location: login.php");
?>