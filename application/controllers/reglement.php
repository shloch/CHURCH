<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reglement extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Mreglement_choral', 'model');
    }

	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Reglement Interieur Chorale";
        $data['include'] = "reglement_interieur_chorale.php";
		$data['comments'] = "comments.php";
		$data['txt'] = $this->model->getText();
        
		$this->load->view('template', $data);
	}
}
