<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
		//$this->load->model('Mgalerie_videos', 'db_table');
		$this->load->model('Mcontact', 'db_table');
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

	function delete_msg($id) {
		$logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $this->db_table->delete($id);
            redirect('Admin/read_messages','refresh');
        }else {
            redirect('admin','refresh');
        }
	}

	function send_emails() {
		if (isset($_POST)) {// if posted
			$this->form_validation->set_rules('nom', 'NOM', 'required');
			$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
            $this->form_validation->set_rules('msg', 'MESSAGE', 'required|min_length[15]');
            //$this->form_validation->set_rules('role', 'ROLE', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->index();
            } else {
				$nom = $this->input->post('nom');
				$email = $this->input->post('email');
				$msg = $this->input->post('msg');
				$moment = time();
				// insert to DB
				$updateStatus = $this->db_table->save($nom, $email, $msg, $moment);
                if ($updateStatus == TRUE) {
                    $this->session->set_flashdata('error', "MESSAGE ENVOYE AUX ADMINISTRATEURS  !!!");
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('Contact','refresh');
			
            }
        }else{
            redirect('Contact','refresh');
        }
	}
}