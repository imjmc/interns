   <nav class="top-bar fixed-top" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#"><i class="fi-social-windows"></i></a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="has-dropdown">
        <a href="#"><?php echo ucfirst($this->session->userdata('first_name'));?></a>
        <ul class="dropdown">
          <li><a href="#">Profile</a></li>
          <li><a href="#">Account</a></li>
          <li><a href="<?php echo base_url();?>welcome/dest_session">Signout</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="#">HOME</a></li>
      <li><a href="#">ABOUT</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
  </section>
</nav>