<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="index.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>CASS</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-transparent">
            <div class="container-fluid">
              <a class="navbar-brand no-seleect" href="#">
                <img src="img/newlogocurved.png" alt="..." height="76">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                  </li>
                </ul>
                <a class="get-started no-seleect" onclick="document.getElementById('id01').style.display='block'">
                    <p id="get-text">Get Started</p>
                </a>
              </div>
            </div>
          </nav>
          <div id="id01" class="modal no-seleect">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
            <div class="modal-content">
              <div class="container">
                <h1>Select Account</h1>
                <p>Please select if you are a Student or an Admin</p>
                
                <a href="student-login.php" class="admin-login"><button id="student-login">Student Login</button></a>
                <a href="admin-login.php" class="admin-login"><button id="admin-login">Admin Login</button></a>
              </div>
            </div>
          </div>
        <div><img src="img/counsel.png" class="counsel-img no-seleect"></div>
        <div><img src="img/counsel.png" class="counsel-img2 no-seleect"></div>
        <div class="intro">
          <h1 class="intro-text">STI WNU Student<br>Counseling</h1>
          <p id="intro-text2">A student counseling website for the senior high <br>school students of STI WNU</p>
          <p id="intro-text">A student counseling website for the senior <br>high school students of STI WNU</p>
        </div>
    </body>
    <script>
      // Get the modal
      var modal = document.getElementById('id01');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      </script>
</html>
