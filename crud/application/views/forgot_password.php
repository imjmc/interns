<?php

	$query = mysql_query("SELECT * from security_question");
	
	while($result[] = mysql_fetch_object($query));
	
	array_pop($result);

?>

<div class="row">


	<br/>
	<div class="custom-container-forgotpsw">
    
      
      <form class="form-signin" action="<?php echo base_url();?>welcome/forgot_password_validation" method="post">
        <h2>Reset Password</h2>
        <span
        	<p><?php echo ucfirst(validation_errors());?></p>
        </span>
 
  		
       	<input type="text" id="inputText" name="user_id" placeholder="User ID" autofocus > 
          
        <select name="security_question">
        
        <option>Select Security Question</option>
        <?php foreach($result as $wow)
        
        	echo "<option value='$wow->id'>".$wow->questions."</option>";
		
		 ?>	
        
        <input type="text" id="inputText" name="security_answer" placeholder="Enter Your Answer">
		<input type="password" id="inputPassword" name="password" placeholder="Enter New Password">
        
        <input type="password" id="inputPassword" name="confirm_password" placeholder="Confirm Password">
        
        
        
        <button type="submit" id="pswreset_btn">Confirm</button>
        
        <button type="reset" id="pswreset_clear_btn">Clear</button>
        
        <a href="<?php echo base_url();?>welcome/login_page">Back to Login</a>
        
               

        
      </form>
      
    </div>
</div>
    
 

	