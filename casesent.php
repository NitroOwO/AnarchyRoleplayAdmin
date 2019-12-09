<?php
    // Connect to database
    include_once 'php/config.php';

    // Create case
    
    if(isset($_POST['createcase'])) {
        $username = $_POST['username'];
        $steamid = $_POST['steamid'];
        $discord = $_POST['discord'];
        $punishment = $_POST['punishment'];
        $subject = $_POST['subject'];
        $staff = $_POST['staff'];

        $sql = "INSERT INTO supportcases (username, steamid, discord, punishment, casesubject, staffmember) VALUES ('$username', '$steamid', '$discord', '$punishment', '$subject', '$staff')";

        if (mysqli_query($link, $sql)) {
            echo "<script type='text/javascript'>alert('Your application has been sent!');</script>";
        } else {
            echo "ERROR: " . $sql . "" . mysqli_error($conn);
        }
    }

    // Close connection
    mysqli_close($link);
?>