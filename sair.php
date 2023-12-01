<?php 
    // Start the session to enable the use of session variables
    session_start();

    // Set the session variable 'logado' to false
    $_SESSION['logado'] = false;

    // Redirect the user to the login.php page
    header('location:login.php');
?>
