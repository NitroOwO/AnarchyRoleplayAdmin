<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anarchy Roleplay | Staff Login</title>
    <link rel="shortcut icon" href="lib/img/favicon.png" type="image/x-icon">

    <!-- Import Custom & Bootstrap CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
</head>
<body>
    
    <div class="content">
        <img src="lib/img/logo.png" class="text-center centerImg" height="150" width="150">
        <h3 class="text-center" style="margin-bottom: 25px; margin-top: 50px;">Anarchy Roleplay | Staff Login</h3>
        <form action="authenticate.php" method="POST">
            <div class="form-group">
                <label for="adminUser">Username</label>
                <input type="text" class="form-control" id="adminUser" name="adminUser" aria-describedby="userHelp">
            </div>
            <div class="form-group">
                <label for="adminPswd">Password</label>
                <input type="password" class="form-control" id="adminPswd" name="adminPswd" aria-describedby="pswdHelp">
            </div>

            <div class="row">
                <div class="col text-center">
                    <input type="submit" class="btn btn-danger">
                </div>
            </div>
        </form>
    </div>

</body>
</html>