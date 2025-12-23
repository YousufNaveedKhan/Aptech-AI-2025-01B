<?php 
if (isset($_COOKIE['user'])) {
    echo "Saved. " . $_COOKIE['user'];
    echo '<br> <a href="delcookie.php?del=1">Delete Cookie</a>';
}else {
    echo "Cookie not found";
}

?>