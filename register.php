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
        <h3 class="text-center" style="margin-bottom: 25px; margin-top: 50px;">Anarchy Roleplay | Add Staff</h3>
        <form action="usercreated.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="userHelp">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="pswdHelp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="mail" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="stafflevel">Staff Rank</label>
                <select name="stafflevel" id="stafflevel" class="form-control">
                    <option>Junior Moderator</option>
                    <option>Moderator</option>
                    <option>Senior Moderator</option>
                    <option>Administrator</option>
                    <option>Senior Administrator</option>
                </select>
            </div>

            <div class="row">
                <div class="col text-center">
                    <input type="submit" class="btn btn-danger" value="Create">
                </div>
            </div>
        </form>
    </div>

</body>
</html>