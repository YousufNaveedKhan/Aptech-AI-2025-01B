<?php 
if (isset($_GET['del'])) {
    setcookie('user', 'Saqlain', time() - 3600, '/');
    header('location: cookie_demo.php');
    exit;
}else {
    echo "Parameter not found";
    header('location: view_cookie.php');
    exit;
}
?>