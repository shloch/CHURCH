<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statut extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Mstatut_choral', 'model');
    }

	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Statut Chorale";
        $data['include'] = "statut_chorale.php";
		$data['comments'] = "comments.php";
		$data['txt'] = $this->model->getText();
        
		$this->load->view('template', $data);
	}
}
