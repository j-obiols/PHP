<?php
    session_start();
?>

<!DOCTYPE html>

<html>
        <link rel="stylesheet" href="styles.css">

    <body>

        <div class="basic">

            <?php
                // Echo session variables that were set on previous page
                echo "FAVORITE COLOR IS " . $_SESSION["favcolor"] . ".<br><br>";

                echo "FAVORITE ANIMAL IS " . $_SESSION["favanimal"] . ".";
            ?>

        </div>

    </body>

</html>