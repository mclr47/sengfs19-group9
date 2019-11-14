<!DOCTYPE html>
<html>
    <head>
        <title>Augur: GraphQL - Profile</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Lora|Encode+Sans+Condensed" rel="stylesheet">
       <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
        <script src="repogroup.js"></script>
    </head>

    <body id="profileBody" onload="getRepoGroupInfo()">      
        <div id="menubar">
            <ul>    
            <li><a href="index.php">Home</a></li>
            <li><a>About</a></li>
            <li><a>Contact</a></li>
            <li class="active"><a href="profile.php">Profile</a></li>
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
        
        <h1 id="pageTitle">Welcome GraphQL Repo Group!</h1>
        
        <script>
//            functions in javascript
//            routing
            
            import { HomeComponent } from './home/home.component';
            import { AboutComponent } from './about/about.component';
            import { PrivacyComponent } from './privacy/privacy.component';
            import { TermsComponent } from './terms/terms.component';
            
            const routes: Routes = [
              { path: 'home', component: HomeComponent },
              { path: 'about', component: AboutComponent },
              { path: 'contact', component: ContactComponent },
              { path: 'profile', component: ProfileComponent },
              { path: '', redirectTo: '/home', pathMatch: 'full' }
            ];
        </script>
        
        <div id = "mainWrapper">
            <div id = "innerWrapper">
                <div id="chartWrapper">
                    <div class="row">
                        <div class="col-sm-9" id="sectionBody"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9" id="sectionBody2"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9" id="sectionBody2"></div>
                    </div>
                </div>
                <div id="secondaryWrapper">
                   <div id="otherFunctionProfileWrapper"><p>Add our other profile page functionality here.</p></div>
                   <div id="profileLogoWrapper"><img src="graphLogo.png" alt="GraphQL Logo" class="albumCover"></div>
                </div>
            </div>
        </div>    
    </body>
</html>