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

    // Store password and email in session
    $stmt = $link->prepare('SELECT password, email FROM staffaccounts WHERE id = ?');
    // Get account info from ID
    $stmt->bind_param('i', $_SESSION['id']);
    $stmt->execute();
    $stmt->bind_result($password, $email);
    $stmt->fetch();
    $stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anarchy Roleplay | Admin</title>
    <link rel="shortcut icon" href="lib/img/favicon.png" type="image/x-icon">

    <!-- Import Custom & Bootstrap CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #ECEEEF; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;" class="loggedin">

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

    <!-- Profile information -->
    <div class="container" style="margin-top: 50px;">
        <div class="card" style="width: 100%; border-radius: 5px !important;">
            <div class="card-body">
                <h2 class="card-title text-center">Profile Information</h2>
                <h5 class="card-subtitle mb-2 text-muted text-center"><?=$_SESSION['name']?></h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Staff Rank</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="font-weight:normal;"><?=$_SESSION['name']?></td>
                            <th style="font-weight:normal;"><?=$email?></td>
                            <th style="font-weight:normal;"><?=$_SESSION['stafflevel']?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Import Custom & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>