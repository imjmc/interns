
<div class="row">
<div class="large-12 meadium-12 columns content">

  <ul data-orbit>
  <li>
    <img src="<?php echo base_url()?>assets/images/first.jpg" alt="slide 1" />
  </li>
  <li class="active">
    <img src="<?php echo base_url()?>assets/images/second.jpg" alt="slide 2" />
  </li>
  <li>
    <img src="<?php echo base_url()?>assets/images/third.jpg" alt="slide 3" />
  </li>
  <li>
    <img src="<?php echo base_url()?>assets/images/fourth.jpg" alt="slide 3" />
  </li>
  <li>
    <img src="<?php echo base_url()?>assets/images/fifth.jpg" alt="slide 3" />
  </li>
</ul>

<div class='small-6 large-4 medium-6 columns first_column'>
<?php 

$query = $this->db->query("SELECT id, msg_title, msg_content FROM cms_content where content_position='left'");


foreach ($query->result() as $row)
{
    echo "<div class='msg_title'>";
	echo "<p class='msg_title'>".$row->msg_title."</p>";
	echo "</div>";
	echo "<div class='msg_content'>";
    echo "<p>".$row->msg_content."</p>";
	echo "</div>";
	
}
?>
</div>

<div class='small-6 large-8 medium-6 columns second_column'>
<?php 

$query = $this->db->query("SELECT id, msg_title, msg_content FROM cms_content where content_position='right'");


foreach ($query->result() as $row)
{
    echo "<div class='msg_title'>";
	echo "<p class='msg_title'>".$row->msg_title."</p>";
	echo "</div>";
	echo "<div class='msg_content'>";
    echo "<p>".$row->msg_content."<p>";
	echo "</div>";
}
?>


</div>
</div>
</div>

