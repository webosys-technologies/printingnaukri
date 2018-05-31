    <?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','date'));
		$this->load->library(array('session', 'form_validation', 'email'));
		$this->load->database();
		

                 
	}
       
	
	function index()
	{
	    	
            $this->load->view('printing_header');
            $this->load->view('printing_home');
            $this->load->view('printing_footer');
            
	}
        function services()
        {
            $this->load->view('printing_header');
             $this->load->view('printing_services');
             $this->load->view('printing_footer');
        }
        function about_us()
        {
            $this->load->view('printing_header');
             $this->load->view('printing_about_us');
             $this->load->view('printing_footer');
        }
        function contact_us()
        {
            $this->load->view('printing_header');
             $this->load->view('printing_contact_us');
             $this->load->view('printing_footer');
        }
        function post_resume()
        {
            $this->load->view('printing_header');
             $this->load->view('printing_post_resume');
             $this->load->view('printing_footer');
        }
        function post_requirement()
        {
            $this->load->view('printing_header');
             $this->load->view('printing_post_requirement');
             $this->load->view('printing_footer');
        }
        function recruitment()
        {
            $this->load->view('printing_header');
             $this->load->view('printing_recruitment');
             $this->load->view('printing_footer');
        }
        function resource_outsourcing()
        {
            $this->load->view('printing_header');
             $this->load->view('printing_resource_outsourcing');
             $this->load->view('printing_footer');
        }

    
}


  
    
    

