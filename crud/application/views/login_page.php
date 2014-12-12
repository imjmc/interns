<div class="row">
	<br/>
    <div class="cus-container">
    
    
      <form class="form-signin" action="<?php echo base_url();?>welcome/login_validation" method="post">
        <h2>Please Login</h2>
        
  		<span><?php echo form_error('user_id'); ?> </span> 
       	<input type="text" id="inputText" name="user_id" placeholder="User ID" autofocus">
		
        <span><?php echo form_error('password'); ?> </span>
        <input type="password" id="inputPassword" name="password" placeholder="Password">
        <div class="checkbox">
        <input type="checkbox" value="rememberme" data-toggle="modal" name="remeber_me" data-target="#myModal"> Remember me
        </div>
        
        <button type="submit" id="signin_btn">Sign in</button>
        
        <br/>
        
        <a href="<?php echo base_url();?>welcome/forget_password">Forget Password</a>
        
        <a id="signup_link" href="<?php echo base_url();?>welcome/signup_page">Sign Up </a>       
        
        
      </form>
      
    </div>

    </div>
</div>
    
 

	