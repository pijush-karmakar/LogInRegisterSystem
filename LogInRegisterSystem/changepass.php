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
           $Session_id = Session::get('id');

           if($userid != $Session_id){
                  header('Location:index.php');
              }
     }
    $user = new User();
     if( $_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['updatepass']) ){
       $updatePass = $user->UpdatePassword( $userid,$_POST);

   }

	 ?>
		 <div class="panel panel-default">
				<div class="panel-heading">
					<h3> Change Password <span class="pull-right"><a class="btn btn-primary" href="profile.php?id=<?php echo $userid; ?>">Back</a></span></h3>
				</div>
                
                <div class="panel-body" style="width:550px; margin: 0 auto;">
             
             <?php 
                 if(isset($updatePass) ){
                 	echo $updatePass;
                 }
              ?>


                <form action="" method="POST" >
                      <div class="form-group">
  		                      <label for="old_pass">Old Password</label>
  	                        <input type="password" class="form-control"  name="old_pass" id="old_pass" >
	                    </div>
	                    <div class="form-group">
  		                      <label for="username">New Password</label>
  	                        <input type="password" class="form-control"  name="password" id="password">
	                    </div>
  
	                    <button type="submit" class="btn btn-primary" name="updatepass">Update</button>
    
                </form>  
		                
               
                </div>
	            

         </div>
	</div>
</div>



<?php 
include 'inc/footer.php';
 ?>

