<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presentation_chorale extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mpresentation_choral', 'model');
        //$this->load->model('Mskills', 'skills');
        //$this->load->model('Mcompany', 'company');
		//$this->load->model('Maward', 'award');
        $this->load->helper('file');
        $this->output->enable_profiler(TRUE);
    }

	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Presentation Chorale";
        $data['include'] = "presentation_chorale.php";
		$data['comments'] = "comments.php";
		$data['presentation'] = $this->model->getText();
        
		$this->load->view('template', $data);
	}

}
