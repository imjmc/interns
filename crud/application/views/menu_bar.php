   <nav class="top-bar fixed-top" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="<?php base_url();?>welcome"><i class="fi-social-windows"></i></a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li>
        <a href="<?php echo base_url();?>welcome/login_page"><i class="fi-torsos"></i> LOGIN</a>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li class="active"><a href="<?php echo base_url();?>welcome/home_page">HOME</a></li>
      <li><a href="#">ABOUT</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
  </section>
</nav>