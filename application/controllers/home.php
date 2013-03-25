<?php if (!defined('BASEPATH')) die();
class Home extends Main_Controller {

   public function index()
	{
			$data['main_content'] = 'index';
      $this->load->view('template', $data);
	}
	
	public function about()
	{
			$data['main_content'] = 'about';
      $this->load->view('template', $data);
	}
	
	public function contact()
	{
			$data['main_content'] = 'contact';
      $this->load->view('template', $data);
	}
	
	public function profile()
	{
			$data['main_content'] = 'profile';
      $this->load->view('template', $data);
	}
	public function profile_expert()
	{
			$data['main_content'] = 'profile_expert';
      $this->load->view('template', $data);
	}
	
	public function mezun()
	{
			$data['main_content'] = 'mezun';
      $this->load->view('template', $data);
	}
	
	public function register()
	{
		$data['main_content'] = 'register';
      $this->load->view('template', $data);
    }
   
}
