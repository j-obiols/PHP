<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>

<html>

    <link rel="stylesheet" href="styles.css">

    <title>PHP SESSIONS</title>

    <body>

        <div class="basic"> PHP SESSIONS </div>

        <div class="basic"">

            <?php
                // Set session variables
                $_SESSION["favcolor"] = "BLUE";
                $_SESSION["favanimal"] = "ELEPHANT";
                echo "SESSION VARIABLES ARE SET.";
            ?>

        </div>

        <div class="basic">

            <a href="page2.php" > CLICK HERE TO SEE THEM </a>

        </div>
        
    </body>

</html>