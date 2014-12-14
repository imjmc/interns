<?php
class cms_submission extends CI_Model {
	
	function submission_process($msg_title, $msg_content,$content_position)
	{
		
		$data=array
		(
		"msg_title"=>$msg_title,
		"msg_content"=>$msg_content,
		"content_position"=>$content_position
		);
		
	
		if($this->db->insert("cms_content",$data))
		{
			header("Location:main");
		}
		
		else
		{
			return false;
		}
	}
	
	
}

?>
