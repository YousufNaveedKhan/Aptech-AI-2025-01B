<?php 
function isLoggedIN() {
    return isset($_SESSION["user_id"]);
}

?>