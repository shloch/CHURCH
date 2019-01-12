<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activites extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mactivites_choral', 'db_table');
        //$this->load->model('Mskills', 'skills');
        //$this->load->model('Mcompany', 'company');
		//$this->load->model('Maward', 'award');
        $this->load->helper('file');
        //$this->output->enable_profiler(TRUE);
	}
	

	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Reglement Interieur Chorale";
        $data['include'] = "vnos_activites.php";
		$data['comments'] = "comments.php";
		$data['rows'] = $this->db_table->selectAll();
        
		$this->load->view('template', $data);
	}
}
