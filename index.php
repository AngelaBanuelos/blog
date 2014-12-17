<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <header id="header">
            <h1 id="para1">J.</h1> 
            <h1 id="para2">Cole</h1>
            <h1 id="nav">
                <button type="button"><a href="register.php">Register</a></button>
                <button type="button"><a href="login.php">Login</a></button>
                <button type="button"><a href="/controller/logout-user.php">logout</a></button>
                <a class="link1" href="http://instagram.com/realcoleworld">
                    <img src="http://storycountygop.com/wp-content/uploads/2013/09/instagram-icon-32x32.png" alt="IG" width="42" height="42" border="0"></a>
                <a class="link2" href="https://www.facebook.com/JColeMusic">
                    <img src="http://www.ceres.org/images/facebook-icon" alt="IG" width="42" height="42" border="0"></a>
                <a class="link2" href="https://twitter.com/jcolenc">
                    <img src="http://jqi.umd.edu/sites/all/modules/socialmedia/icons/icondock/Vector%20Social%20Media%20Icons/png/32px/twitter.png" alt="IG" width="42" height="42" border="0"></a>
            </h1>

            <div id="line"></div>
        </header>
        <section id="sec"> COLE WORLD</section>
        <section id="section">
            <!--<div id="div1"></div> -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!--
                 <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
 
                 </ol>
                -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="J1.jpg" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="J5.jpg" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="J4.jpg" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="J3.jpg" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="J2.jpg" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    ...
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div id="div2" >
                <div class="circular"></div>
            </div>
        </section>
        <!--<footer id="footer">
            &copy angela banuelos
        </footer>
        -->
    </body>
</html>

<?php
require_once(__DIR__ . "/controller/login-verify.php");
//uisng the header file
//it stores the header html code in the header.php file 
require_once(__DIR__ . "/view/header.php");
if(authenticateUser()) {
//using the navigation file 
//it stores the info in navigation.
require_once(__DIR__ . "/view/navigation.php");
}
//this is where youll have html code and get info from the model
//the DIR concatinates 
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/controller/read-posts.php");
//using the footer file
//it stores the footer html code in the footer.php file
require_once(__DIR__ . "/view/footer.php");

?>

