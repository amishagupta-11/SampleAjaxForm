<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.4/jquery.pagepiling.min.css">
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Cartoon Times</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="HomePage.php">Home <span class="sr-only">(current)</span></a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="Shows.php">Shows</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section3">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8" id="alert">
                <strong id="result">Explore the whimsical wonders and timeless tales of cartoons with us</strong>
            </div>
        </div>
    </div>
    </div>
    <div id="pagepiling">
        <div class="section" id="section1">
            <img id="img" src="images/barbie.jpg" alt="Cartoon">
        </div>
        <div class="section" id="section2">
            <img id="img" src="images/download.png" alt="Cartoon">
        </div>
        <div class="section" id="section3">
            <img id="img" src="images/DoraemonFriend.jpg" alt="Cartoon">
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.4/jquery.pagepiling.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="library/HomePage.js">
    </script>
</body>

</html>