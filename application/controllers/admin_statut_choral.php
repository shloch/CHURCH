<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_statut_choral extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mstatut_choral', 'db_table');
        //$this->load->model('Mskills', 'skills');
        //$this->load->model('Mcompany', 'company');
		//$this->load->model('Maward', 'award');
        $this->load->helper('file');
        //$this->output->enable_profiler(TRUE);
    }


    /**
     * 
     *index function administration
     */
	public function index()
	{
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Chorale Lwanga Kisito - STATUT Chorale";
            $data['include'] = "admin/statut_chorale.php";
            $statut = $this->db_table->getText();
            if ($statut != FALSE) {
                $data['statut'] = $statut;
            }
            
            
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }
    
    

    function update() {
		if (isset($_POST)) {// if posted
			$this->form_validation->set_rules('present_txt', 'PRESENTATION TEXT', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->index();
            } else {
                $text = $this->input->post('present_txt');
                $updateStatus = $this->db_table->update($text);
                if ($updateStatus == TRUE) {
                    $this->session->set_flashdata('success', "MISE A JOUR AVEC SUCCESS");
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('admin_statut_choral','refresh');
                
            }
        }
    
    }

}