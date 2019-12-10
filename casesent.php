<?php
    // Start session
    session_start();
    // If user isn't logged in, redirect to login page
    if(!isset($_SESSION['loggedin'])) {
        header('location: index.php');
        exit();
    }

    // Connect to database
    include_once 'php/config.php';

    // Create case
    
    if(isset($_POST['createcase'])) {
        $username = $_POST['username'];
        $steamid = $_POST['steamid'];
        $discord = $_POST['discord'];
        $punishment = $_POST['punishment'];
        $subject = $_POST['subject'];
        $reason = $_POST['reason'];
        $evidence = $_POST['evidence'];
        $staff = $_SESSION['name'];

        $sql = "INSERT INTO supportcases (username, steamid, discord, punishment, casesubject, staffmember, reason, evidence) VALUES ('$username', '$steamid', '$discord', '$punishment', '$subject', '$staff', '$reason', '$evidence')";

        if (mysqli_query($link, $sql)) {
            echo "<script type='text/javascript'>alert('Your application has been sent!');</script>";
        } else {
            echo "ERROR: " . $sql . "" . mysqli_error($conn);
        }
    }

    // Close connection
    mysqli_close($link);
?>