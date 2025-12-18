<?php 
function isLoggedIN() {
    return isset($_SESSION["userID"]);
}

function redirect($url) {
    return header("Location: $url");
}

?>