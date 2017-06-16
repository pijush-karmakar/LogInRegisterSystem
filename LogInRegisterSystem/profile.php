<?php 
include 'inc/header.php';
include 'lib/User.php';
Session:: checkSession();
 ?>



<div class="user-table">
	<div class="container">

	<?php 

     if(isset($_GET['id']) ){
           $userid = (int)$_GET['id'];
     }
    $user = new User();
     if( $_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update']) ){
       $updateUsr = $user->UpdateUser( $userid,$_POST);

   }

	 ?>
		 <div class="panel panel-default">
				<div class="panel-heading">
					<h3>User Profile <span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></span></h3>
				</div>
                
                <div class="panel-body" style="width:550px; margin: 0 auto;">
             
             <?php 
                 if(isset($updateUsr) ){
                 	echo $updateUsr;
                 }
              ?>

             <?php 
                 $userdata = $user->getUserById($userid);
                 if($userdata){ 

              ?>


                <form action="" method="POST" >
                       <div class="form-group">
		                    <label for="name">Your Name</label>
	                        <input type="text" class="form-control" placeholder="Enter your name" name="name" id="name" value="<?php echo $userdata->name ?>">
	                    </div>
	                    <div class="form-group">
		                    <label for="username">Username</label>
	                        <input type="text" class="form-control" placeholder="Enter username" name="username" id="username" value="<?php echo $userdata->username ?>">
	                    </div>
                	   <div class="form-group">
		                    <label for="email">Email Address</label>
	                        <input type="text" class="form-control" placeholder="Enter your email" name="email" id="email" value="<?php echo $userdata->email ?>">
	                    </div>
	                  
                       <?php 
                            $Session_id = Session::get('id');
                            if($userid == $Session_id){ 
	                    ?>
	                    <button type="submit" class="btn btn-primary" name="update">Update</button>
	                    <a href="changepass.php?id=<?php echo $userid; ?>" class="btn btn-info">Change Password</a>
                        <?php  }  ?>
	                    
                </form>  
		                
                <?php  } ?>
                </div>
	            

         </div>
	</div>
</div>



<?php 
include 'inc/footer.php';
 ?>

