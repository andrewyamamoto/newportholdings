<?php
    $actual_link = 'http://'.$_SERVER['HTTP_HOST']."/";
?>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nh-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/#about"><img src="/img/img-logo-nh.png" height="45" alt="" /></a>
        </div>

        <div class="collapse navbar-collapse" id="nh-navbar-collapse">

            <ul class="nav navbar-nav navbar-right">


                <?php if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){ ?>
                    <li><a href="/#top" class='scrollto' data-target="#top"><i class="fa fa-home"></i></a></li>
                    <li><a href="/#about-us" class='scrollto' data-target="#about-us">About Us</a></li>
                    <li><a href="/#structured-finance" class='scrollto' data-target="#structured-finance">Structured Finance</a></li>
                    <li><a href="/#eb5-projects" class='scrollto' data-target="#eb5-projects">EB-5 Projects</a></li>
                    <li><a href="/#current-opportunities" class='scrollto' data-target="#current-opportunities">Current Opportunities</a></li>
                    <li><a href="/#our-team" class='scrollto' data-target="#our-team">Our Team</a></li>
                    <li class='active'><a href="/admin">Admin</a></li>
                    <li><a href="/login/logout.php">Logout</a></li>

                <?php }else{ ?>
                    <li><a href='/#top' class='scrollto' data-target="#top"><i class="fa fa-home"></i></a></li>
                    <li><a href="/#about-us" class='scrollto' data-target="#about-us">About Us</a></li>
                    <li><a href="/#structured-finance" class='scrollto' data-target="#structured-finance">Structured Finance</a></li>
                    <li><a href="/#eb5-projects" class='scrollto' data-target="#eb5-projects">EB-5 Projects</a></li>
                    <li><a href="/#current-opportunities" class='scrollto' data-target="#current-opportunities">Current Opportunities</a></li>
                    <li><a href="/#our-team" class='scrollto' data-target="#our-team">Our Team</a></li>
                <?php } ?>

            </ul>



        </div>

    </div>

</nav>
