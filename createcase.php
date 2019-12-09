<?php
    // Start session
    session_start();
    // If user isn't logged in, redirect to login page
    if(!isset($_SESSION['loggedin'])) {
        header('location: index.php');
        exit();
    }
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
<body style="background-image: url(lib/img/bgImg.png); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="admin.php">
                <img src="lib/img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="Anarchy Roleplay Logo">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#!" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Applications
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="staffapplications.php">Staff</a>
                            <a class="dropdown-item" href="developerapplications.php">Developer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="unbanapplications.php">Unban</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="whitelist.php" class="nav-link">Whitelist</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" style="margin-right: 20px;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search for cases.." aria-label="Search">
                </form>
                <a href="createcase.php">
                    <button class="btn btn-danger my-2 my-sm-0 redbtn" style="margin-right: 20px;">Create Case</button>
                </a>
                <a href="profile.php">
                    <button class="btn btn-danger my-2 my-sm-0 redbtn" style="margin-right: 20px;">Profile</button>
                </a>
                <a href="logout.php">
                    <button class="btn btn-danger my-2 my-sm-0 redbtn">Log Out</button>
                </a>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 50px;">
        <h1 class="text-center text-white">Create Case</h1>
        <!-- Create case form -->
        <form method="post" action="casesent.php" class="text-white">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Zhag" required>
            </div>
            <div class="form-group">
                <label for="steamid">Steam HEX</label>
                <input type="text" class="form-control" id="steamid" name="steamid" placeholder="steam:302492490234" required>
            </div>
            <div class="form-group">
                <label for="discord">Discord</label>
                <input type="text" class="form-control" id="discord" name="discord" placeholder="Zhag#2021" required>
            </div>
            <div class="form-group">
                <label for="punishment">Punishment</label>
                <input type="text" class="form-control" id="punishment" name="punishment" placeholder="Ban in 30 days" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Using modifications" required>
            </div>
            <div class="form-group">
                <label for="staff">Your Name</label>
                <input type="text" class="form-control" id="staff" name="staff" placeholder="Tweek" required>
            </div>

            <input type="submit" class="btn btn-danger centerBtn" value="Create Case" id="createcase" name="createcase">
        </form>
    </div>

    <!-- Import Custom & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>
</html>