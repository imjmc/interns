<?php
class check_user extends CI_Model
 {
	
	function user_validation($user_id)
	{
		
		 $this->db->select('user_id');
		 $this->db->from('user');
		 $this->db->where('user_id',$user_id);
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
