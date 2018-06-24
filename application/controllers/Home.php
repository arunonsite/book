<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
		{
		$this->load->view('includes/header');    	
		$this->load->view('books');
		$this->load->view('includes/footer');	
	}

	public function process(){
        // Load the model
        $this->load->model('login_model');
	  
        // Validate the user can login
        $result = $this->login_model->login();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->loginView($msg);
        }else{

            // If user did validate, 
            // Send them to members area
            redirect('index.php/home/booksListView');
        }        
    }
	public function loginView($msg = NULL)
	{
		$this->load->view('includes/header');    
		$data['msg'] = $msg;		
		$this->load->view('login',$data);
		$this->load->view('includes/footer');
	}
	public function booksListView()
	{
		$this->load->model('book_model');
		$data['book_list'] = $this->book_model->getAllBooks();
        $this->load->view('includes/header');       
        $this->load->view('books',$data);
        $this->load->view('includes/footer');
		 
	}
	public function checkLogin()
	{
		if($this->session->userdata('username'))
		{
			$this->load->model('book_model');
			$bookid= 1;
			$data = $this->book_model->addFavBooks($this->session->userdata('userid'),$bookid);
			if($data ==1){
			redirect('index.php/books');
			}
		}else{
			redirect('index.php/Home/loginView','refresh');
		}
	}
	public function searchBooks()
	{
		$this->load->model('book_model');
		$data['book_list'] = $this->book_model->getSearchBooks();
        $this->load->view('includes/header');       
        $this->load->view('books',$data);
        $this->load->view('includes/footer');

	}
	public function logout()
	{
		$this->session->unset_userdata('username');	
		
		redirect('index.php/home/booksListView','refresh');
	}

}
	
