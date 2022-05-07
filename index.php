<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="img/logopp.jpg">
    <title>Project Partner Finder</title>
    <link rel="stylesheet" href="Style.css?<?php echo time(); ?>">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
</head>

<body>
    
    <header>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </header>
    <div class="topnav" id="myTopnav">
        <a class="navbar-brand" href="index.php"><img src="img/logopp.jpg" alt="Logo" style="width:40px;"></a>
        <a href="about.php">About</a>
        <a href="signin.php">Sign In</a>
        <a href="signup.php">Sign Up</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <script>function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <h1>Project Buddy</h1>
    <img class="mainimg" src="img/team_t.png" alt="mainimg">
    <div class="quote">
        <span class="left">❝</span>
        <blockquote>
            Alone we can do so little;
            together we can do so much.
        </blockquote>
        <span class="right">❞</span>
    </div>
    


    <div class="searchbar1">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Find your project partner now!">
            <div class="dropdown">
                <button class="drpbtn">
                    <i class="fa fa-angle-down"></i></button>
                <div class="ctx">
                    <a href="#">Search by Technology</a>
                    <a href="#">Search by College</a>
                    <a href="#">Search by Location</a>
                </div>
            </div>
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>

        </div>
    </div>
    <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Tenetur aperiam quo similique distinctio minima mollitia vero id
        ratione in vitae, unde eaque delectus accusamus maiores necessitatibus voluptates.
        Ab, possimus sit.</div>
</body>

</html>