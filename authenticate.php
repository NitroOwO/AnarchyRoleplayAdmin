<?php
session_start();

include_once 'php/config.php';

// Check if user is logged in
if(!isset($_POST['adminUser'], $_POST['adminPswd'])) {
    // If the user isn't logged in, show this
    die("Please fill both the username and password field!");
}

// Prepare SQL, preparing statement will prevent SQL injection
if($stmt = $link->prepare('SELECT id, password, stafflevel FROM staffaccounts WHERE username = ?')) {
    // Bind parameters
    $stmt->bind_param('s', $_POST['adminUser']);
    $stmt->execute();
    // Store result
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $stafflevel);
        $stmt->fetch();
        // Account exists, now verify password
        if(password_verify($_POST['adminPswd'], $password)) {
            // Verified, user logged in
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['adminUser'];
            $_SESSION['id'] = $id;
            $_SESSION['stafflevel'] = $stafflevel;
            header('Location: admin.php');
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "Incorrect username!";
    }
    $stmt->close();
}
?>