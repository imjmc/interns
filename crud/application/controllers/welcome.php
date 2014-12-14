<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 session_start();
 
 
class Welcome extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }

    public function index()
    {
		$this->main_frame();
		$this->load->view('home_page');
		$this->footer();
	
    }
	
	 
	public function main_frame()
	{
		$this->load->view('welcome_message');
		$this->menu_bar();

	}
	
	public function menu_bar()
	{
		$this->load->view('menu_bar');

	}
	
	public function home_page()
	{
		$this->main_frame();
		$this->load->view('home_page');
		$this->footer();
	}
	
	public function about_page()
	
	{
		$this->main_frame();
		$this->load->view('about_page');
		$this->footer();
	}
	
	public function contact_page()
	{
		$this->main_frame();
		$this->load->view('contact_page');
		$this->footer();
	}
	
	public function footer()
	{
		$this->load->view('footer');
	}
	
	
	
	public function user()
	{
		if(!$this->session->userdata('user_id'))
		{
			header("Location:login_page");
		}
		else
		{
			
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('user');
			$crud->set_subject('user');
			$crud->columns('first_name','last_name','address');
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_edit();
			
			$output = $crud->render();
			$this->crud_output($output);
		}
	}
	
	
	public function admin()
	{
		if(!$this->session->userdata('user_id'))
		{
			header("Location:login_page");
		}
		else
		{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('user');
			$crud->set_subject('user');
			$crud->columns('first_name','last_name','address');
			$output = $crud->render();

			$this->crud_output($output);
		}
	}
	
		



	
	
	public function crud_output($output = null)
 
    {
		$this->load->view('show_result',$output);   
		 
    }
	
	
	public function login_page()
	{
		$this->main_frame();
		$this->load->view('login_page');
		$this->footer();
		
	}
	

	public function login_validation()
	{
		$this->form_validation->set_rules('user_id','user id','trim|required|callback_userCheck|xss_clean');
		$this->form_validation->set_rules('password','password','trim|required|callback_loginProcess');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->login_page();
		}
		
		else
		{
			header("Location:main");
		}
	}
	
	public function loginProcess()
	{
		$user_id = $this->input->post('user_id');
		$password = md5($this->input->post('password'));
		
		$this->load->model('login_validation');
		
		if($this->login_validation->login_validate($user_id,$password)== TRUE)
		{
			return TRUE;
		}
		
		else
		{
			$this->form_validation->set_message('loginProcess','user id or password doesnot Match!!');
			return FALSE;
		}
		
	}
	
	public function forget_password()
	{
		$this->main_frame();
		$this->load->view('forgot_password');
		$this->footer();
	}
	
	
	
	public function forgot_password_validation()
	
	{
		$this->form_validation->set_rules('user_id','user id','trim|required|xss_clean|callback_userCheck');		
		$this->form_validation->set_rules('security_answer','answer','trim|required|callback_resetProcess');
		$this->form_validation->set_rules('password','password','trim|required|min_length[8]|max_length[16]|matches[confirm_password]|md5');
		$this->form_validation->set_rules('confirm_password','password confirm','trim|required|min_length[8]|max_length[16]');
		
		if($this->form_validation->run()== FALSE)
		{
			 $this->forget_password();
		}
		
		else
		{
			header("Location:login_page");
		}
		
		
	}
	
	
	public function resetProcess()
	{
		$user_id = $this->input->post('user_id');
		$password = md5($this->input->post('password'));
		$security_question = md5($this->input->post('security_question'));
		$security_answer = md5($this->input->post('security_answer'));
		
		$this->load->model('reset_validation');
		
		if($this->reset_validation->reset_validate($user_id,$password,$security_question,$security_answer)== TRUE)
		{
			$this->db->where('user_id',$user_id);
			$update_password = array('password'=>$password);
			$this->db->update('user',$update_password);
			
			return TRUE;
		}
		
		else
		{
			$this->form_validation->set_message('resetProcess','Doesnot match question & answer!!');
			return FALSE;
		}
		
	}
	
	public function userCheck()
	{
		$user_id = $this->input->post('user_id');
		
		$this->load->model('check_user');
		if($this->check_user->user_validation($user_id) == TRUE)
		{
			return true;
		}
		
		else
		{
			$this->form_validation->set_message('userCheck','Canot Find User ID!!');
			return false;
		}
	}
		
	public function signup_page()
	{
		$data['message'] = "";
		$this->main_frame();
		$this->load->view('signup_page',$data);
		$this->footer();
	}
	
	public function signup_validation()
	
	{
		//validaiton rules
		
		
		$this->form_validation->set_rules('first_name','first name','trim|required');
		
		$this->form_validation->set_rules('last_name','last name','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('user_id','user id','trim|required|min_length[8]|max_length[16]|callback_userAvailability|xss_clean');
		
		$this->form_validation->set_rules('password','password','trim|required|min_length[8]|max_length[16]|matches[confim_password]|md5');
		$this->form_validation->set_rules('confim_password','password confirm','trim|required|min_length[8]|max_length[16]');
		
		$this->form_validation->set_rules('first_question','first question','required');
		
		$this->form_validation->set_rules('second_question','second question','required');
		
		$this->form_validation->set_rules('third_question','third question','required');
		
		$this->form_validation->set_rules('first_answer','first answer','trim|required');
		
		$this->form_validation->set_rules('second_answer','second answer','trim|required');
		
		
		$this->form_validation->set_rules('third_answer','third answer','trim|required');
		
		
		if($this->form_validation->run()== FALSE)
		{
			$data['message']= "";
			 $this->signup_page($data);
		}
		
		else
		{
			
			$this->signup_process();
			
		}
		
		
	}
	
	public function userAvailability()
	{
		$user_id = $this->input->post('user_id');
		
		$this->load->model('check_user');
		if($this->check_user->user_validation($user_id) == TRUE)
		{
			$this->form_validation->set_message('userAvailability','User ID is already exits!!');
			return false;
		}
		
		else
		{
			return true;
		}
	}
	
	
	
		
	
	public function signup_process()
	{
		$this->load->model('signup_process');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$user_id = $this->input->post('user_id');
		$password = md5($this->input->post('password'));
		$first_question = md5($this->input->post('first_question'));
		$second_question = md5($this->input->post('second_question'));
		$third_question = md5($this->input->post('third_question')); 
		
		$first_answer = md5($this->input->post('first_answer'));
		$second_answer = md5($this->input->post('second_answer'));
		$third_answer = md5($this->input->post('third_answer'));
		
		
		$this->signup_process->insertdata($first_name,$last_name,$email,$user_id,$password,$first_question,$second_question,$third_question,$first_answer,$second_answer,$third_answer);
		
	}
	
	public function tabs()
	{
		if(!$this->session->userdata('user_id'))
		{
			header("Location:login_page");
		}
		else
		{
		$this->load->view('tabs');
		}
	}
	 
	
	public function main()
	{
		if(!$this->session->userdata('user_id'))
		{
			header("Location:login_page");
		}
		
		else
		{
			
			if($this->session->userdata('user_type')=="admin")
			{
				$this->load->view('welcome_message');
				$this->load->view('menu_bar2');
				$this->tabs();
				$this->admin();
				$this->footer();
			}
			else if($this->session->userdata('user_type') == "user")
			{
				$this->load->view('welcome_message');
				$this->load->view('menu_bar2');
				$this->tabs(); 
				$this->user();
				$this->footer();
			}
		}
	}
	
	public function cms_content()
	{
		$this->load->view('welcome_message');
		$this->load->view('menu_bar2');
		$this->tabs();
		$this->load->view('cms_page');
		
	}
	
	public function cms_message()
	{
		$msg_title = $this->input->post('msg_title');
		$msg_content = $this->input->post('msg_content');
		$content_position = $this->input->post('rbtn');
		$this->load->model('cms_submission');
		$this->cms_submission->submission_process($msg_title,$msg_content,$content_position);
	}
	
	public function manage_cms()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('cms_content');
			$crud->set_subject('Manage CMS Content');
			$output = $crud->render();
			$this->cms_output($output);
	}
	
	public function cms_output($output = null)
	{
		$this->load->view('welcome_message');
		$this->load->view('menu_bar2');
		$this->tabs();
		$this->load->view('cms_output',$output);
	}
	
	public function dest_session()
	{
		$this->session->sess_destroy();
		header("Location:login_page");	
	}
	
}
 
 
 ?>