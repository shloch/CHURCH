<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reglement extends CI_Controller {


	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Reglement Interieur Chorale";
        $data['include'] = "reglement_interieur_chorale.php";
        $data['comments'] = "comments.php";
        
		$this->load->view('template', $data);
	}
}
