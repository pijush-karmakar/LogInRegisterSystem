<?php 
include 'inc/header.php';
include 'lib/User.php';
Session::checklogin();
 ?>

 <?php 
  $user = new User();
   if( $_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login']) ){
       $UserLogIn = $user->UserLogIn($_POST);

   }

  ?>


<div class="user-table">
	<div class="container">
		 <div class="panel panel-default">
				<div class="panel-heading">
					<h2>User LogIn</h2>
				</div>
                
                <div class="panel-body"  style="width:550px; margin: 0 auto;">


        <?php 
		       if(isset($UserLogIn)){
		   	   echo $UserLogIn;
              }
        ?>
           
                <form action="" method="POST">
                	   <div class="form-group">
		                    <label for="email">Email Address</label>
	                        <input type="text" class="form-control" placeholder="Enter your email" name="email" id="email" >
	                    </div>
	                     <div class="form-group">
		                    <label for="password">password</label>
	                        <input type="password" class="form-control" placeholder="Enter your password" name="password" id="password" >
	                    </div>

	                    <button type="submit" class="btn btn-primary" name="login">LogIn</button>
                </form>  
		                

                </div>
	            

         </div>
	</div>
</div>



<?php 
include 'inc/footer.php';
 ?>

