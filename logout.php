<?php 
// destroy session the current logged in user session and redirect to the index page
session_start();

session_unset();
session_destroy();

header("Location: index.php");