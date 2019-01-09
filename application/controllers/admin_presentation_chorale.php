<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_presentation_chorale extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mpresentation_choral', 'present_choral');
        //$this->load->model('Mskills', 'skills');
        //$this->load->model('Mcompany', 'company');
		//$this->load->model('Maward', 'award');
        $this->load->helper('file');
        $this->output->enable_profiler(TRUE);
    }

	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Presentation Chorale";
        $data['include'] = "admin/presentation_chorale.php";
        $presentation = $this->present_choral->getText();
        if ($presentation != FALSE) {
            $data['presentation'] = $presentation;
        }
        
        
		$this->load->view('template2', $data);
    }
    
    

    function update() {
		if (isset($_POST)) {// if posted
			$this->form_validation->set_rules('present_txt', 'PRESENTATION TEXT', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->index();
            } else {
                $text = $this->input->post('present_txt');
                $updateStatus = $this->present_choral->update($text);
                if ($updateStatus == TRUE) {
                    $this->session->set_flashdata('success', "MISE A JOUR AVEC SUCCESS");
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('admin_presentation_chorale/index','refresh');
                
            }
        }
    
    }

}
