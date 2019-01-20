<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_acceuil extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Macceuil', 'db_table');
        $this->load->helper('file');
    }


    /**
     * 
     *index function administration
     */
	public function index()
	{
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Modifier l'acceuil du site";
            $data['include'] = "admin/acceuil.php";
            $data['error'] = "";
            $row = $this->db_table->getText();
            $data['row'] = $row;
                   
            $this->load->view('template3', $data);
        }else {
            redirect('admin','refresh');
        }
    }


    
    function update($id) {
        if (isset($_POST)) {// if posted
            $this->form_validation->set_rules('derniere_infos', 'DERNIERE INFOS', 'required');
            $this->form_validation->set_rules('recruitment', 'RECRUITEMENT', 'required');
            $this->form_validation->set_rules('repetition', 'REPETITION', 'required');
            $this->form_validation->set_rules('nous_chantons', 'NOUS CHANTONS', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->index();
            } else {
                $derniere_info = $this->input->post('derniere_infos');
                $recruitment = $this->input->post('recruitment');
                $repetition = $this->input->post('repetition');
                $nous_chantons = $this->input->post('nous_chantons');

                $updateStatus = $this->db_table->update($derniere_info, $recruitment, $repetition, $nous_chantons, $id);
                if ($updateStatus == TRUE) {
                    $this->session->set_flashdata('success', "MISE A JOUR AVEC SUCCESS  !!!");
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('Admin_acceuil','refresh');
                
            }
        }else{
            redirect('Admin_acceuil','refresh');
        }
    }
    
    

}