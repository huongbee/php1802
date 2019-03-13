<?php
session_start();

// unset($_SESSION['username']); // delete session username

session_destroy(); // delete all session

echo 'Deleted!';

?>