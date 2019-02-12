<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mgalerie_videos', 'db_table');
        //$this->load->model('Mskills', 'skills');
        //$this->load->model('Mcompany', 'company');
		//$this->load->model('Maward', 'award');
		$this->load->helper('file');
		$this->load->library('email');
        //$this->output->enable_profiler(TRUE);
    }


	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Contactez nous";
		$data['include'] = "vcontact.php";
		//delete all COMMENT captcha created images
		$captcha_folder = './img/captcha/';
		delete_files($captcha_folder);
        
		$this->load->view('template', $data);
	}

	function send_emails() {
		if (isset($_POST)) {// if posted
			$this->form_validation->set_rules('nom', 'NOM', 'required');
			$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
            $this->form_validation->set_rules('msg', 'MESSAGE', 'required');
            //$this->form_validation->set_rules('role', 'ROLE', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->add();
            } else {
				$nom = $this->input->post('nom');
				$email = $this->input->post('email');
				$msg = $this->input->post('msg');
				
				$this->load->library('email');

				/*$config['protocol']    = 'smtp';
				$config['smtp_host']    = 'mail.lwangakisito.cm';
				$config['smtp_port']    = '465';
				$config['smtp_timeout'] = '7';
				$config['smtp_user']    = 'contact@lwangakisito.cm';
				$config['smtp_pass']    = '=====';
				$config['charset']    = 'utf-8';
				$config['newline']    = "\r\n";
				$config['mailtype'] = 'text'; // or html
				$config['validation'] = TRUE; // bool whether to validate email or not      
				$this->email->initialize($config);
				$this->email->from($email, $nom);
				$this->email->to('contact@lwangakisito.cm'); 
				$this->email->subject('Contact a partir de lwangakisito.cm');
				$this->email->message($msg);  
				$this->email->send();*/

				
				// use wordwrap() if lines are longer than 70 characters
				$msg = wordwrap($msg,70);
				// send email
				//contact@lwangakisito.cm
				mail("shloch2007@yahoo.fr","Message envoyer de lwangakisito.cm",$msg);

				//echo $this->email->print_debugger();
                //redirect('Contact','refresh');
                
            }
        }else{
            redirect('Contact','refresh');
        }
	}
}