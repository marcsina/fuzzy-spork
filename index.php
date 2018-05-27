<?php
include_once 'php/include/conn.php';
include_once 'php/include/functions_login.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html>
<html lang="en">
    
    
	<head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">	        
        <meta name="description" content="">
        <meta name="author" content="Christopher Göbel Marc Wildermuth">
		
        <title>Test</title>
    
        
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        
        
    </head>
    

    <body>

<!-- Navigation -->
        <nav class="navbar-default navbar-fixed-top">
            <div class="main-menu">
                <div class="container">


                        <button type="button" id="navbut" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="Nav navbar-collapse collapse">

                        <span class="spanwidth">

                        <ul class="Nav NavLeft">
                            <li>
                                <a href="index.php">Fuzzy-Spork</a>
                            </li>
                            <li><a href="#___">Category1</a></li>
                            <li><a href="#___">Category2</a></li>
                            <li><a href="#___">Category3</a></li>
                        </ul>

                        </span>
                        <span class="spanwidth">
                        <ul class="Nav NavRight">
                            <li><a href="#___">Contact</a></li>
                            <li><a href="#___">Impressum</a></li>
                            </ul>

                        </span>

                    </div>    
            </div>
        </nav>
        
        

     <!-- -----------------------------------------------Inhalt der Seite--------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- nested columns -->
        <div class="row first-after-navbar">

                <!-- first nested column -->
                <div class="col-md-4">
                    <!-- column content -->
					Textasddddddddddddddddddddddddddddddddddddd
                </div>

                <!-- second nested column -->
                <div class="col-md-4">
                    <!-- column content -->
					Text1

                </div>

                <!-- third nested column -->
                <div class="col-md-4">
				<!-- column content -->
				Text2
                </div>
        </div>
     <!-- Ende der Seite  -->

         <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form action="php/include/login_process.php" method="post" name="login_form">                      
            Email: <input type="text" name="email" />
            Password: <input type="password" 
                             name="password" 
                             id="password"/>
            <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>
        <p>If you don't have a login, please <a href="php/register.php">register</a></p>
        <p>If you are done, please <a href="php/include/logout.php">log out</a>.</p>
        <p>You are currently logged <?php echo $logged ?>.</p>
        


    <!-- -----------------------------Scritps-------------------------- -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>	
	<script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script> 
    </body>
</html>

