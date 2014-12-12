<?php
class signup_process extends CI_Model {
	
	function insertdata($first_name,$last_name,$email,$user_id,$password,$first_question,$second_question,$third_question,$first_answer,$second_answer,$third_answer)
	{
		
		$data=array
		(
		"first_name"=>$first_name,
		"last_name"=>$last_name,
		"email"=>$email,
		"user_id"=>$user_id,
		"password"=>$password,
		"que1" =>$first_question,
		"que2" =>$second_question,
		"que3" =>$third_question,
		"ans1" =>$first_answer,
		"ans2" =>$second_answer,
		"ans3" =>$third_answer
		
		
		);
		
	
		
		
		if($this->db->insert("user",$data))
		{
			header("Location:login_page");
		}
		
		else
		{
			return false;
		}
	}
	
	
}

?>
