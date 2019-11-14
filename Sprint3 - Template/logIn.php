<!DOCTYPE html>
<html lang="en">
    <head>       
      <title>Augur: Login</title> 
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
    <body id="logInBody"> 
        <div id="menubar">
            <ul>    
            <li><a href="index.php">Home</a></li>
            <li><a>About</a></li>
            <li><a>Contact</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li class="active"><a href="logIn.php">Login</a></li>
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
        
        <h1 id="pageTitle">Augur - Login Page</h1> 
        
        <!-- Main Wrapper -->
        <div id = "mainWrapper"> 
            <!-- Inner Wrapper -->
            <div id="innerWrapper">
                <!-- Text Wrapper -->
                <div id="textWrapper">
                <h3 id="welcomeLine">Please Enter Your Username &amp; Password Below:</h3>
                <form action="logHandle.php" method="POST">
                    <label for="userName" class="wikiEntry">Username:</label>
                    <input class="nameInput" type="text" id="userName" name="userName"><br>
                    <label for="passWord" class="wikiEntry">Password:</label>
                    <input id="passInput" type="password" id="passWord" name="passWord"><br>
                    <button type="submit" id="logButton" class="wikiEntry">Log-In</button>
                </form>    
                <h3 id="submitInfo">While you are logged in, you can access your info and view your stats.</h3>
                <h4>Logging in is only available for Repo Group Owners!</h4>
<!--                <img src="noelHype.gif" alt="Liam Logo Gif" id="loginGif">-->
                    <div id= "loginGif"><p>Put the rotating repo group stats here.</p></div>
                </div>
                <div id="imagesWrapper">
                   <div id="logInDemoWrapper"><img src="logInDemo.jpg" alt="Successful Log-In">
                   <p id="clickNotify">This is what the logo in the navbar will look like when you ARE Logged-In!</p>
                   </div>
                   <div id="logOutDemoWrapper"><img src="logOutDemo.jpg" alt="Unsuccessful Log-In">
                   <p id="clickNotify">This is what the logo in the navbar will look like when you are NOT Logged-In!</p>
                   </div>
                </div>
            </div>
        </div>
    </body>  
</html>