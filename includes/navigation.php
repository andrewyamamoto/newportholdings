<?php
    $currLink = $_SERVER['REQUEST_URI'];
?>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><a href="#"><img src="/img/img-logo-nh.png" height="45" alt="" /></a></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <?php if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']) && $currLink == "/admin/"){ ?>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="/login/logout.php">Logout</a></li>

            </ul>

            <?php }else{ ?>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="#nh"><i class="fa fa-home"></i></a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#finance">Structured Finance</a></li>
                <li><a href="#eb5">EB-5 Projects</a></li>
                <li><a href="#opportunities">Current Opportunities</a></li>
                <li><a href="#ourteam">Our Team</a></li>

            </ul>

            <?php } ?>

        </div>

    </div>

</nav>
