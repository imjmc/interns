<?php
class login_validation extends CI_Model
 {
	
	function login_validate($user_id,$password)
	{
		
		
		 $this->db->select('user_id');
		 $this->db->from('user');
		 $this->db->where('user_id',$user_id);
		 $this->db->where('password',$password);
		 
		 $query = $this->db->get();
		 
		 if($query->num_rows()== 1)
		 {
			$query = mysql_query("SELECT user_type, first_name from user where user_id='$user_id'");
			 
			$data = mysql_fetch_array($query);
			 
			$user_type =  $data['user_type'];
			
			$first_name =  $data['first_name'];
			
			$data = array('user_id'=>$user_id,'first_name'=>$first_name,'user_type'=>$user_type);  			
			
			$this->session->set_userdata($data);
						
			return true;
		 }
		 
		 else
		 {
			 return false;
		 }
		 
		 
	}
		
 }

?>
