<?php // Check if the cookie "username" is set ?>
<!DOCTYPE html>
<html>
     <head> <title>Read Cookie</title></head> 
 <body> <h2>Reading Cookie:</h2> 
    <?php 
    if (isset($_COOKIE["username"])) { echo "   Hello, " . htmlspecialchars($_COOKIE["username"]); } 
    else {
 echo "⚠️ Cookie 'username' is not set."; } 
?> 
</body> 
</html>
