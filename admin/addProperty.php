<?php include "../config/base.php"; ?>
<?php include "../includes/header.php" ?>
<body id="admin">
    <?php
    if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
    {
        // Admin stuff will go here
            include("../includes/navigation.php");
         ?>

         <?php
            $q = "SELECT * FROM registeredUsers WHERE type!=''";
            $r = mysql_query($q);
            echo "
            <div class='container' id='#nh'>
                <div class='row'>
                    <div class='col-lg-12'>
            ";

         ?>

         <?php
            echo "<form>";

            echo "</form>";
         ?>

         <!-- <div class='container'>
             <div class='row'>
                 <div class='col-lg-4 col-lg-offset-4'>
                     <h1>Member Area</h1>
                     <p>Thanks for logging in! You are <code><?=$_SESSION['Username']?></code> and your email address is <code><?=$_SESSION['EmailAddress']?></code>.</p>
                </div>
            </div>
        </div> -->
         <?php
    }

    elseif(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = mysql_real_escape_string($_POST['username']);
        $password = md5(mysql_real_escape_string($_POST['password']));

        $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");

        if(mysql_num_rows($checklogin) == 1)
        {
            $row = mysql_fetch_array($checklogin);
            $email = $row['EmailAddress'];

            $_SESSION['Username'] = $username;
            $_SESSION['EmailAddress'] = $email;
            $_SESSION['LoggedIn'] = 1;

            echo "<div class='container'>
                <div class='row'>
                    <div class='col-lg-6 col-lg-offset-3 text-center'>

            ";
            echo "<h1>Success</h1>";
            echo "<p>We are now redirecting you to the member area.</p>";
            echo "<meta http-equiv='refresh' content='2' />";
            echo "</div></div></div>";
        }
        else
        {
            echo "<h1>Error</h1>";
            echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
        }


    }
    else
    {
        ?>

       <h1>Admin Login</h1>

       <div class="container">
           <div class="row">
               <div class="col-lg-4 col-lg-offset-4">
                   <div id="login-form">
                        <form method="post" action="index.php" name="loginform" id="loginform">
                            <fieldset>
                                <div class="form-group">
                                    <label for="username" class='sr-only'>Username:</label>
                                    <input type="text" name="username" id="username" class='form-control' placeholder="Username"/>
                                </div>
                                <div class="form-group">
                                    <label for="password" class='sr-only'>Password:</label>
                                    <input type="password" name="password" id="password" class='form-control' placeholder="Password"/>
                                </div>
                                <input type="submit" name="login" id="login" value="Login" class="btn btn-success"/>
                            </fieldset>
                        </form>
                   </div>
               </div>
           </div>
       </div>


       <?php
    }

    ?>
<?php //include("../includes/footer.php"); ?>
<?php include("../includes/footer_inc.php"); ?>
