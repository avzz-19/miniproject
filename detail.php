<!DOCTYPE html>
<html>

<head>
    <meta name="viewpoint" content="width=divice-width,initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="css/navbar.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/detail.css?<?php echo time(); ?>">
    <link rel="icon" type="image/jpg" href="img/logopp.jpg">

</head>

<body>
    <header>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </header>
    <div class="topnav" id="myTopnav">
        <a class="navbar-brand" href="index.php"><img src="img/logopp.jpg" alt="Logo" style="width:40px;"></a>
        <a href="about.php">About</a>
        <a href="signin.php">Sign In</a>
        <a href="signup.php">Sign Up</a>
        <a href="javascript:void(0);" class="icon1" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <div class="container">
        <div class="bluebg">
            <div class="box buildteam">
                <h2>Willing to build a team </h2>
                <button class="bteam"><b>Build team</b></button>
            </div>
            <div class="box jointeam">
                <h2>Willing to join a team </h2>
                <button class="jteam"><b>Join team</b></button>
            </div>
        </div>
        <div class="formbx">
            <div class="form buildteam">
                <form>
                    <h3><b>Build Team</b></h3>
                    <input type="Text" placeholder="Enter your state">
                    <input type="Text" placeholder="Enter your District">
                    <input type="Text" placeholder="Enter your College">
                    <input type="email" placeholder="Enter your email">
                    <input type="text" placeholder="TECH STACK">
                    <input type="Text" placeholder="Enter your area of intrest">
                    <textarea ng-model="text2" placeholder="Enter your expreience of working "></textarea>
                    <input type="submit" value="Find mate">

                </form>
            </div>
            <div class="form jointeam">
                <form>
                    <h3><b>Join Team</b></h3>
                    <input type="Text" placeholder="Enter your State">
                    <input type="Text" placeholder="Enter your District">
                    <input type="Text" placeholder="Enter your College">
                    <input type="email" placeholder="Enter your email">
                    <input type="text" placeholder="Enter team Leader's Name">
                    <input type="Text" placeholder="Enter your area of interest">
                    <textarea ng-model="text2" placeholder="Enter your project Details"></textarea>
                    <input type="submit" value="Find team">

                </form>
            </div>
        </div>
    </div>
    <script>
        const bteam = document.querySelector('.bteam');
        const jteam = document.querySelector('.jteam');
        const formbx = document.querySelector('.formbx');
        const body = document.querySelector('body')
        jteam.onclick = function() {
            formbx.classList.add('active')
            body.classList.add('active')

        }
        bteam.onclick = function() {
            formbx.classList.remove('active')
            body.classList.remove('active')

        }
    </script>
</body>

</html>