<?php 
Class Search_expert Extends CI_Controller  
{  
 
    public function __construct()  
    {  
        parent::__construct();  
    }  
       
   public function index()
	{
			$data['main_content'] = 'search_expert_result_view';
      $this->load->view('template', $data);
	}
	
    
    public function result()  
    {  
    
        $name = $this->input->post('name',TRUE);  
       
        if(empty($name))  
        {  
            $this->load->view('pages/hata_view');  
        }  
        else  
        {  
         
            $this->load->model('search_model');    
            $data['results'] = $this->search_model->get_result($name);  
            $this->load->view('pages/search_expert',$data);              
        }  
    }  
}
?>      
