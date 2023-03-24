<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="index.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="index.js"></script>
        <script src="https://kit.fontawesome.com/f214b79948.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>CASS | Get Started</title>
    </head>
    <body class="body">
        <center><div class="square">
            <div class="login-text">
                <h4>Login using your STI WNU account</h4>
            </div>
            <div class="form">
                  <label for="fname" class="myDiv">Student No.</label><br>
                  <input type="text" id="fname" name="firstname" placeholder="Student No.">
                  <p></p>
                  <label for="lname" class="myDiv">Password</label><div onclick="changeIcon()" id="myDIV"><i class="fa-solid fa-eye" style="cursor: pointer;" onclick="myFunction()"></i></div>
                  <input type="password" id="id_password" name="lastname" autocomplete="current-password" placeholder="Password">
                  <p></p>
                  <a href="student-page.php" class="submit"><button class="submit">Login</button></a>
              </div>
        </div></center>
    </body>
</html>
