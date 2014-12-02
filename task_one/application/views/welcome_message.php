<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

<link type="text/css" href="<?php echo base_url();?>/assets/personal/css/style.css" rel="stylesheet">

<link type="text/css" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>welcome/index"><img id="logo_margin" src="<?php echo base_url();?>/assets/images/logo.png" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url();?>welcome/index">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">CONTACT</a></li>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<div class="container">
<br/>
<br/>
<br/>
<ul class="nav nav-tabs inverse">
  <li class="active"><a href="<?php echo base_url();?>welcome/employee">Employee</a></li>
  <li><a href="<?php echo base_url();?>welcome/customer">Customer</a></li>
 </ul>
</div>
