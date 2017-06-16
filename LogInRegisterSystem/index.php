<?php 
include 'inc/header.php';
include 'lib/User.php';
$user = new User();
Session:: checkSession();


 ?>



<div class="user-table">
	<div class="container">

	<?php 
        $loginmsg = Session::get("loginmsg");
		        if(isset($loginmsg) ){
                     echo $loginmsg;
		        }
		   Session::set('loginmsg', NULL);    

	 ?>

		 <div class="panel panel-default">
				<div class="panel-heading">
					<h3>User List <span class="pull-right">Welcome! <strong>
						<?php 
                             $username = Session::get("username");
                             if(isset($username)){
                             	echo $username;
                             }

						 ?>
					</strong></span></h3>
				</div>
                
                <div class="panel-body">
                	
	                    <table class="table table-striped">

	                    	<tr>
	                    		<th width="21%">Serial</th>
	                    		<th width="21%">Name</th>
	                    		<th width="21%">Username</th>
	                    		<th width="21%">Email Address</th>
	                    		<th width="21%">Action</th>
	                    	</tr>

                         <?php 
                               $user = new User();
                               $userdata = $user->getUserData();
                               
                               if($userdata){
                               	$i=0;
                               	  foreach ($userdata as $sdata) {
                               	$i++;
                               	
	                     ?>

	                    	<tr>
	                    	    <td><?php echo $i; ?></td>
	                    	    <td><?php echo $sdata['name'] ;?></td>	
	                    	    <td><?php echo $sdata['username']; ?></td>	
	                    	    <td><?php echo $sdata['email']; ?></td>	
	                    	    <td>
	                    	    	<a class="btn btn-success" href="profile.php?id=<?php echo $sdata['id']; ?>">View</a>
	                    	    </td>		
	                    	</tr>
	                    	<?php 
		                                 }
		                               } 
		                               
		                               else{
		                               	 ?>

		                       	<tr>
                                    <td colspan="5"> <h3>User data not found .</h3> </td>
		                      	</tr>

	                    	

                           <?php } ?>

	                    </table>  	
	                
                </div>
	            

         </div>
	</div>
</div>



<?php 
include 'inc/footer.php';
 ?>

