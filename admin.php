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
    <title>Anarchy Roleplay | Staff Panel</title>
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

    <div class="container">
        <div class="content text-center">
            <h2>Welcome <?php echo $_SESSION['name']; ?></h2>
            <h5 class="text-muted"><?php echo $_SESSION['stafflevel']; ?></h2>

            <?php
            $stafflevel = $_SESSION['stafflevel'];

            switch ($stafflevel) {
                case "Executive":
                    echo '<div style="margin-top:25px;">
                    <div>
                        <a href="cases.php">
                            <button class="btn btn-danger" style="width:200px;">Case List</button>
                        </a>
                    </div>
                    <div style="margin-top:10px;">
                        <button class="btn btn-danger" style="width:200px;" data-toggle="modal" data-target="#createCaseModal">Create Case</button>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="whitelist.php">
                            <button class="btn btn-danger" style="width:200px;">Whitelist</button>
                        </a>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="roaster.php">
                            <button class="btn btn-danger" style="width:200px;">Roaster</button>
                        </a>
                    </div>                 
                    <div style="margin-top:10px;">
                        <a href="register.php" style="cursor: not-allowed;">
                            <button class="btn btn-danger" style="width:200px;cursor: not-allowed;" disabled>Add Staff</button>
                        </a>
                    </div>                                                  
                </div>';
                break;

                case "Lead Administrator":
                    echo '            <div style="margin-top:25px;">
                    <div>
                        <a href="cases.php">
                            <button class="btn btn-danger" style="width:200px;">Case List</button>
                        </a>
                    </div>
                    <div style="margin-top:10px;">
                        <button class="btn btn-danger" style="width:200px;" data-toggle="modal" data-target="#createCaseModal">Create Case</button>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="whitelist.php">
                            <button class="btn btn-danger" style="width:200px;">Whitelist</button>
                        </a>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="roaster.php">
                            <button class="btn btn-danger" style="width:200px;">Roaster</button>
                        </a>
                    </div>                 
                    <div style="margin-top:10px;">
                        <a href="register.php" style="cursor: not-allowed;">
                            <button class="btn btn-danger" style="width:200px;cursor: not-allowed;" disabled>Add Staff</button>
                        </a>
                    </div>                                                  
                </div>';
                break;
                case "Senior Administrator":
                    echo '            <div style="margin-top:25px;">
                    <div>
                        <a href="cases.php">
                            <button class="btn btn-danger" style="width:200px;">Case List</button>
                        </a>
                    </div>
                    <div style="margin-top:10px;">
                        <button class="btn btn-danger" style="width:200px;" data-toggle="modal" data-target="#createCaseModal">Create Case</button>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="whitelist.php">
                            <button class="btn btn-danger" style="width:200px;">Whitelist</button>
                        </a>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="roaster.php">
                            <button class="btn btn-danger" style="width:200px;">Roaster</button>
                        </a>
                    </div>                                                                   
                </div>';
                break;
                case "Administrator":
                    echo '            <div style="margin-top:25px;">
                    <div>
                        <a href="cases.php">
                            <button class="btn btn-danger" style="width:200px;">Case List</button>
                        </a>
                    </div>
                    <div style="margin-top:10px;">
                        <button class="btn btn-danger" style="width:200px;" data-toggle="modal" data-target="#createCaseModal">Create Case</button>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="whitelist.php">
                            <button class="btn btn-danger" style="width:200px;">Whitelist</button>
                        </a>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="roaster.php">
                            <button class="btn btn-danger" style="width:200px;">Roaster</button>
                        </a>
                    </div>                                                                  
                </div>';
                break;
                case "Senior Moderator":
                    echo '            <div style="margin-top:25px;">
                    <div>
                        <a href="cases.php">
                            <button class="btn btn-danger" style="width:200px;">Case List</button>
                        </a>
                    </div>
                    <div style="margin-top:10px;">
                        <button class="btn btn-danger" style="width:200px;" data-toggle="modal" data-target="#createCaseModal">Create Case</button>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="whitelist.php">
                            <button class="btn btn-danger" style="width:200px;">Whitelist</button>
                        </a>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="roaster.php">
                            <button class="btn btn-danger" style="width:200px;">Roaster</button>
                        </a>
                    </div>                                                                  
                </div>';
                break;
                case "Moderator":
                    echo '            <div style="margin-top:25px;">
                    <div>
                        <a href="cases.php">
                            <button class="btn btn-danger" style="width:200px;">Case List</button>
                        </a>
                    </div>
                    <div style="margin-top:10px;">
                        <button class="btn btn-danger" style="width:200px;" data-toggle="modal" data-target="#createCaseModal">Create Case</button>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="roaster.php">
                            <button class="btn btn-danger" style="width:200px;">Roaster</button>
                        </a>
                    </div>                                                                  
                </div>';
                case "Junior Moderator":
                    echo '            <div style="margin-top:25px;">
                    <div>
                        <a href="cases.php">
                            <button class="btn btn-danger" style="width:200px;">Case List</button>
                        </a>
                    </div>
                    <div style="margin-top:10px;">
                        <button class="btn btn-danger" style="width:200px;" data-toggle="modal" data-target="#createCaseModal">Create Case</button>                    
                    </div>
                    <div style="margin-top:10px;">
                        <a href="roaster.php">
                            <button class="btn btn-danger" style="width:200px;">Roaster</button>
                        </a>
                    </div>                                                                  
                </div>';
                break;
                case "":
                    echo '<h3 class="text-center">An error has been detected. Please contact an developer.</h3> <p class="text-muted">ERROR CODE: NO_RNK</p>';
                break;
            }
            ?>
        </div>
    </div>

    <!-- MODAL STRUCTURES -->

    <!-- Create Case -->
    <div class="modal fade" id="createCaseModal" tabindex="-1" role="dialog" aria-labelledby="createCaseModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCaseModalLabel">Create Case</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="casesent.php" method="POST">
                        <div class="form-group">
                            <label for="caseId">Case Number</label>
                            <input class="form-control" type="text" placeholder="NUMMER" style="width: 75px;" readonly>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" placeholder="Tweek" name="username" id="username">
                        </div>
                        <div class="form-group">
                            <label for="steamid">Steam ID</label>
                            <input class="form-control" type="text" placeholder="STEAM:100938475" name="steamid" id="steamid">
                        </div>
                        <div class="form-group">
                            <label for="discord">Discord</label>
                            <input class="form-control" type="text" placeholder="ZHAG#1234" name="discord" id="discord">
                        </div>
                        <div class="form-group">
                            <label for="punishment">Punishment</label>
                            <select class="form-control form-control-sm" name="punishment" id="punishment">
                                <option readonly>Select one of the punishments</option>
                                <option>Verbale Warning</option>
                                <option>Written Warning</option>
                                <option>Kick</option>
                                <option>Tempoary Ban</option>
                                <option>Permament Ban</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input class="form-control" type="text" placeholder="OOC Talking" name="subject" id="subject">
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason behind the punishment</label>
                            <textarea class="form-control" rows="3" name="reason" id="reason"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="evidence">Evidence</label>
                            <input type="file" name="evidence" id="evidence">
                        </div>

                        <input type="submit" class="btn btn-danger" id="createcase" name="createcase">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
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