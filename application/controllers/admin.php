<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Muser', 'user');
        $this->load->model('Mcontact', 'contact');
        //$this->load->model('Mskills', 'skills');
        //$this->load->model('Mcompany', 'company');
		//$this->load->model('Maward', 'award');
        $this->load->helper('file');
        //$this->output->enable_profiler(TRUE);
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Chorale Lwanga Kisito";
            $data['include'] = "admin/admin.php";
            $data['unread_msg'] = $this->contact->count_unread();

            $this->load->view('template2', $data);
        } else {
            $this->login_page();
        }

        
	}

	function login_page() {
        // display information for the view
        $data['title'] = "Log into your account";
        $data['include'] = "admin/login_page.php";

        $captcha_folder = './img/captcha/';
		delete_files($captcha_folder);

        $this->load->view('template2', $data);
	}

	function disconnect() {
		$logged = $this->session->userdata('member_id');
        if (($logged == FALSE)) {
            $this->login_page();
        } else {
            $this->session->sess_destroy();
            redirect('/admin/');
        }

    }
    
    function read_messages() {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            /** first convert 'UNREAD' to 'READ' messages */
            $this->contact->update_msg_statuses();
            //==============================================
            $data['title'] = "Chorale Lwanga Kisito";
            $data['include'] = "admin/read_contact_messages.php";
            $data['rows'] = $this->contact->get_unread();

            $this->load->view('template2', $data);
        } else {
            $this->login_page();
        }
    }
	
	function signIn() {
		if (isset($_POST)) {// if posted
			$this->form_validation->set_rules('login', 'Login', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
				$this->login_page();
            } else {
                $login = $this->input->post('login');
                $password = $this->input->post('password');
                $result = $this->user->login($login, $password);
                if ($result != FALSE) {
                    $this->session->set_userdata('member_id', $result->id);
                    $this->session->set_userdata('login', $result->login);
					
                    
					redirect('/admin/');
                } else {
                    //$this->session->set_userdata('loginError', 'Incorrect Email/Password combination');
					//$this->login_page();
					echo 'no user';
                }
            }
        } else {
			//$this->login_page();
			echo 'oups';
        }
    }
}
