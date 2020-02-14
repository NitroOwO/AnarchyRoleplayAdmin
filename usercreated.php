<?php

// Connect to database
include_once 'php/config.php';

// Check if data is submitted
if(!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['stafflevel'])) {
    // Couldn't get the data
    die("Please complete the form!");
}

// Make sure the submitted registration values aren't empty
if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['stafflevel'])) {
    // One or more values are empty
    die("Please complete the form!");
}

// Check if account with username exists

// Email validation
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die("Email isn't valid!");
}

// Invalid characters validation
if(preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
    die("Username isn't valid!");
}

// Character length check
if(strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    die("Password must be between 5 and 20 characters long!");
}
if($stmt = $link -> prepare("SELECT id, password FROM staffaccounts WHERE username = ?")) {
    // Bind parameters
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    // Store result, so we can check
    if($stmt->num_rows > 0) {
        // Username exists
        echo "Username already exists, please choose another!";
    } else {
        // Username doesn't exists, insert new account
        if($stmt = $link -> prepare("INSERT INTO staffaccounts (username, password, email, stafflevel) VALUES (?, ?, ?)")) {
            // Dont expose passwords
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email'], $_POST['stafflevel']);
            $stmt->execute();
            echo "You have succesfully added an new account!";
        } else {
            // Something is wrong
            echo 'ERROR: Please contact one from the <a href="roaster.php">developement team</a>.';
        }
    }
    $stmt->close();
} else {
    // Something is wrong
    echo 'ERROR: Please contact one from the <a href="roaster.php">developement team</a>.';
}
$link->close();
?>