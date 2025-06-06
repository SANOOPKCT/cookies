<?php
// Set the cookie
setcookie("username", "student", time() + 3600);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>
    <h2>PHP Cookie Example</h2>
    <?php
    if (isset($_COOKIE["username"])) {
        echo "Cookie 'username' is set!<br>";
        echo "Value is: " . $_COOKIE["username"];
    } else {
        echo "Cookie 'username' is not set!";
    }
    ?>
</body>
</html>
