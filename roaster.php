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

    // Get case number
    $casenumber['casenumber'] = $link->prepare("SHOW TABLE STATUS LIKE 'supportcases'")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anarchy Roleplay | Staff Roaster</title>
    <link rel="shortcut icon" href="lib/img/favicon.png" type="image/x-icon">

    <!-- Import Custom & Bootstrap CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #ECEEEF; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="admin.php">
                <img src="lib/img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="Anarchy Roleplay Logo">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <a href="profile.php" style="color: black; font-weight: 500;">
                    <?php echo $_SESSION['name']; ?>
                </a>
                <a href="createcase.php">
                    <button class="btn btn-outline-danger my-2 my-sm-0" style="margin-left: 10px;">Create Case</button>
                </a>
                <a href="logout.php">
                    <button class="btn btn-outline-danger my-2 my-sm-0" style="margin-left: 10px;">Logout</button>
                </a>
            </div>
        </div>  
    </nav>

    <div class="text-center">
    <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQxibt1E7e2A8BsplskCTTau_0sUVeBrh6l_lrBtf_Bm-YoEYJdQ5pC9dAzmdlHxLFY0u08pXKiPVZU/pubhtml?gid=1271751826&amp;single=true&amp;widget=true&amp;headers=false" height="700px" width="71.28%"></iframe>
    </div>

    <!-- Import Custom & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>