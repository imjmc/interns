<?php
class reset_validation extends CI_Model
 {
	
	function reset_validate($user_id,$password,$security_question,$security_answer)
	{
		
		 $this->db->select('user_id');
		 $this->db->from('user');
		 $this->db->where('user_id',$user_id);
		 $this->db->where("(que1='$security_question' AND ans1='$security_answer' OR que2='$security_question' AND ans2='$security_answer' OR que3='$security_question' AND ans3='$security_answer')", NULL, FALSE);
		 
		 $query = $this->db->get();
		 
		 
		 if($query->num_rows()==1)
		 {			
			return true;
		 }
		 
		 else
		 {
			 return false;
		 }
		 
		 
	}
		
 }

?>
