<?php 

$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../lib/Session.php';
Session::init();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In Register System</title>
        <link rel="stylesheet" href="inc/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
</head>

<?php 
    if(isset($_GET['action']) && $_GET['action']=='logout' ){
    	Session::destroy();
    }
 ?>


<body>

<header>
	<div class="container">
	    <nav class="navbar navbar-default">
			  <div class="container-fluid">
			      <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
					    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
				        </button>
			      <a class="navbar-brand" href="Index.php">LogIn Register System With PHP & PDO</a>
			    </div>

			    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav pull-right">
				        <?php 

                         $id = Session::get('id');
                         $userlogin = Session::get('login');
                         if($userlogin === true){
				        ?>
				         <li><a href="index.php">Home</a></li>
				         <li><a href="profile.php?id= <?php echo $id; ?>">Profile</a></li>
				          <li><a href="?action=logout">LogOut</a></li> 
				          <?php } else{ ?>
				         <li><a href="login.php">LogIn</a></li>   
				         <li><a href="register.php">Register</a></li>   
				          <?php } ?>        
				      </ul>
			    
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>