<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->main_page();
		$this->footer();
	}
	
	public function main_page()
	{
		$this->load->view('welcome_message');
		
	}
	
	public function footer()
	{
		$this->load->view('footer');
	}
	
	
	public function __construct()
	{
		parent::__construct();

		$this->load->database('task_one');
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}
	
	
	public function employee()
    {
		$crud = new grocery_CRUD();

    	$crud->set_theme('twitter-bootstrap'); //change the theme here

    	$crud->set_table('employees');
    $output = $crud->render();

    $this->show_result($output);        
    }
	
 
    public function show_result($output = null)
 
    {
		$this->main_page();
		$this->load->view('employee_result',$output);    
    	$this->footer();
	}
	
	public function customer()
    {
		$crud = new grocery_CRUD();

    	$crud->set_theme('twitter-bootstrap'); //change the theme here

    	$crud->set_table('customers');
    	
		$output = $crud->render();

    	$this->show_result_customer($output);        
    }
	
 
    public function show_result_customer($output = null)
 
    {
		$this->main_page();
		$this->load->view('customer_result',$output);    
    	$this->footer();
	}
	
	
	
}
