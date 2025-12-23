<?php
// 1. Start the session to gain access to $_SESSION variables.
session_start();

// 2. Check if the user is NOT logged in.
// '?? false' is the null coalescing operator, ensuring the check works even if 'isLoggedin' is not set.
if (!($_SESSION['isLoggedin'] ?? false)) {
    // If the user is not logged in, redirect them to the login page.
    header("location: ../lec08-sessions&getMethod.php");
    // Stop script execution immediately after the header redirect.
    exit;
}

// 3. Handle the logout action.
// Check if the 'action' parameter is set in the URL (using the GET method) AND its value is 'logout_now'.
if (isset($_GET['action']) && $_GET['action'] === 'logout_now') {
    // Remove all session variables from the current session.
    session_unset();
    
    // Destroy the session completely (removes the session cookie/file on the server).
    session_destroy();

    // Redirect the user back to the login page after logging out.
    header("location: ../lec08-sessions&getMethod.php");
    // Stop script execution immediately after the header redirect.
    exit;
}
?>