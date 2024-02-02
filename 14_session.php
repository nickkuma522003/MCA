<?php
    
    // Start the session
    session_start();

    // Set session variables
    $_SESSION["favcolor"] = "green";
    echo "session start";
    print_r($_SESSION);
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
?>
