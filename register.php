<?php
    // Connect to the database
    include_once 'php/config.php';

    // Check if data is submitted
    if(!isset($_POST['newUser'], $_POST['newPswd'], $_POST['newMail'])) {
        // If it isn't show this
        die("Please complete the registration form!")
    }

    // Make sure the submitted values are not empty
    if(empty($_POST['newUser']) || empty($_POST['newPswd']) || empty($_POST['newMail'])) {
        // One or more values empty
        die("Please complete the registration form!")
    }

    // Check if a account with username is already in database
    if($stmt = $link->prepare('SELECT id, password FROM staffaccounts WHERE username = ?')) {
        // Bind parameters
        $stmt->bind_param('s', $_POST['newUser']);
        $stmt->execute();
        $stmt->store_result();
        // Store the result
        if($stmt->num_rows > 0) {
            // Username already exists
            echo "Username already exists, choose another one!";
        } else {
            // Username doesnt exist, create new account
            if(!filter_var($_POSt['newMail'], FILTER_VALIDATE_EMAIL)) {
                die("Email isn't valid!");
            }
            if (preg_match('/[A-Za-z0-9]+/', $_POST['newUser']) == 0) {
                die ('Username is not valid!');
            }
            if($stmt = $link->prepare('INSERT INTO staffaccounts (username, password, email) VALUES (?, ?, ?)')) {
                // Dont expose passwords in database
                $password = password_hash($_POST['newPswd'], PASSWORD_DEFAULT);
                $stmt->bind_param('sss', $_POST['newUser'], $password, $_POST['newMail']);
                $stmt->execute();
                echo "New user added!";
            } else {
                // couldn't add
                echo "Couldn't prepare statement!";
            }
        }
        $stmt->close();
    } else {
        // Something is wrong
        echo "Couldn't prepare statement!";
    }
    $link->close();
?>