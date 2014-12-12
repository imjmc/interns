<?php

	$query = mysql_query("SELECT * from security_question");
	
	while($result[] = mysql_fetch_object($query));
	
	array_pop($result);

?>

<div class="container">

	<br/>

	<div class="cus-container-signup">
    
    
  
      <form class="form-signin" id="myForm" role="form" action="<?php echo base_url();?>welcome/signup_validation" method="post">
      <div class="row">
    
        <div class="large-12 columns">
        <h3 class="form-signin-heading heading-title" id="heading-title">Please Signup</h3>
        
        </div>
    	
	</div>
    <div class="row">
    
        
    <div class="large-12 medium-12 columns">
    	
    	
        <div class="error_message">
        <span><?php echo validation_errors(); ?> </span>
        </div>
        
        </div>
        
        </div>
        
        <div class="row">
        
    <div class="large-6 medium-6 columns">
      <input type="text" id="inputText" name="first_name" class="form-control" placeholder="First Name" autofocus>
        
    </div>
    <div class="large-6 medium-6 columns">
 <input type="text" id="inputText" name="last_name" class="form-control" placeholder="Last Name" 			autofocus>
        
    </div>
  	</div>
    
    <div class="rows">
    <div class="large-6 medium-6 columns">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" autofocus>  
  
    </div>
    <div class="large-6 medium-6 columns">
 <input type="text" id="inputText" name="user_id" class="form-control" placeholder="User ID" >
               
    </div>
  	</div>
    
    
    <div class="row">
        
    <div class="large-6 medium-6 columns">
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" >
          
    </div>
     <div class="large-6 medium-6 columns">
    <input type="password" id="inputPassword" name="confim_password" class="form-control" placeholder="Confirm Password" >
            
    </div>
  	</div>
        
<div class="row">
<div class="large-12 medium-12 columns">
        
        <select name="first_question">
        <option>Select Security Question</option>
        <?php foreach($result as $wow)
        
        	echo "<option value='$wow->id'>".$wow->questions."</option>";
		
		 ?>	
        
        </select>
        
        </div>
        </div>
        <div class="row">
        <div class="large-12 medium-12 columns">
        <input type="text" name="first_answer" placeholder="Enter First Answer">
        </div>
        </div>
        <div class="row">
        <div class="large-12 medium-12 columns">
        <select name="second_question">
        
        <option>Select Security Question</option>
        <?php foreach($result as $wow)
        
        	echo "<option value='$wow->id'>".$wow->questions."</option>";
		
		 ?>	
        
        
        </select>
        
        <input type="text" name="second_answer" placeholder="Enter Second Answer">
        
        <select name="third_question">
        <option>Select Security Question</option>
        <?php foreach($result as $wow)
        
        	echo "<option value='$wow->id'>".$wow->questions."</option>";
		
		 ?>	
        
        </select>
        
        
        <input type="text" name="third_answer" placeholder="Enter Third Answer">
        
        
        <div class="checkbox">
            <input type="checkbox" value="acceptTerms"> Accept Terms & Condition
        </div>
        
        
        <button type="submit" id="signup_btn" >Sign Up</button>
        <a href="<?php echo base_url();?>welcome/login_page">Back to Login</a>
        
        </div>
        </div>
        
        
      </form>
      
      </div>

    </div>
   