
	<br/>
    <div class="cus-container">
    
    <div class="row">
    
        <div class="large-12 columns">
        <h3 class="form-signin-heading heading-title" id="heading-title">Add Information</h3>
        <form a action="<?php echo base_url();?>welcome/cms_message" method="post"/>
        
        <input type="text" placeholder="Enter Message Title" name="msg_title"/>
        
       	<textarea placeholder="Enter Your Message" name="msg_content"></textarea>
        </textarea>
        <p> Put this content on </p>
        <p><input type="radio" value="left" name="rbtn"> Left Side
        <input type="radio" value="right" name="rbtn">   Right Side </p>
    
        <button type="submit" class="submit_cms_btn">Add Content</button>
        <a href="<?php echo base_url();?>welcome/manage_cms">Manage Cms </a>
        </form>
        </div>
    	
	</div>

    
            
    </div>

    </div>
</div>

