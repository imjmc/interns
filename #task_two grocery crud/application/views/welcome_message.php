<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<link type="text/css" href="<?php echo base_url();?>assets/grocery_crud/themes/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div>
    
    	<ul class="nav nav-tabs">
			<li role="presentation" class="active"> <a href='<?php echo site_url('welcome/roshan')?>'>Users</a> | </li>
			<li role="presentation"> <a href='<?php echo site_url('welcome/offices_management')?>'>Offices</a> </li>
		</ul>	
		
	</div>
	
    
    <div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
    
<script src="<?php echo base_url(); ?>"></script>
<script src="<?php echo base_url(); ?>"></script>

</body>
</html>
