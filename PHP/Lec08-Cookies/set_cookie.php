<?php 
if (isset($_GET['set'])) {
    setcookie('user', 'Saqlain', time() + 3600, '/');
    header('location: view_cookie.php');
    exit;
}else {
    echo "Parameter not found";
    header('location: cookie_demo.php');
    exit;
}
?>