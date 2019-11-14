<!DOCTYPE html>
<!-- Name: Dominic Mantro
     Pawprint: djmvy7
     Date: 4/25/19
     Final Challenge
-->
<html lang="en">
    <head>       
      <title>Augur: Home</title> 
        <meta charset="utf-8">
          <link href="https://fonts.googleapis.com/css?family=Lora|Encode+Sans+Condensed" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
                    <script src="djmvy7FinalJS.js"></script> 
                        <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
        <script src="repogroup.js"></script>
    </head>
    <body id="indexBody">    
        <div id="menubar">
            <ul>    
            <li class="active"><a href="index.php">Home</a></li>
            <li><a>About</a></li>
            <li><a>Contact</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logIn.php">Login</a></li>
            <li><a>Settings</a></li>
            <?php
                $user = empty($_COOKIE['user']) ? '' : $_COOKIE['user'];
                if (!$user) {
                    echo '<li><img src="logOutNavbar.jpg"></li>';
                    echo '<script> navBounce(); </script>';
                }
                else {
                    echo '<li onclick="logOut()"><img src="logInNavbar.jpg"></li>';
                }
                ?>
            </ul>
        </div>
        
        <h1 id="pageTitle">Augur - Home</h1> 
        
        <!-- Main Wrapper -->
        <div id = "mainWrapper"> 
            <!-- Inner Wrapper -->
            <div id="innerWrapper">
                <!-- Text Wrapper -->
                <div id="textWrapper">
                <h3 id="welcomeLine">Welcome To Augur! If You Are A Repo Group Owner, Feel Free To Login.</h3>
                <p class="wikiEntry" id="openingParagraph">Augur is a Python library and web service of Open Source Software Health and Sustainability metrics and data collection. Augur can be directly accessed at http://augur.osshealth.io/.</p>
                <p>Add the top monthly stats data below</p>
                </div>
                <div id="secondaryWrapper">
                   <div id="otherFunctionWrapper"><iframe width="500" height="282" src="https://www.youtube.com/embed/bqoTwf5Pds0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="albumCover"></iframe></div>
                   <div id="logoWrapper"><a href="logIn.php"><img src="augurLogo.png" alt="Augur Logo" class="albumCover"></a>
                   <p id="clickNotify">Click the logo to be taken to the login page!</p>
                   </div>
                </div>
            </div>
        </div>
    </body>  
</html>