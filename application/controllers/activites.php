<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activites extends CI_Controller {


	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Reglement Interieur Chorale";
        $data['include'] = "vnos_activites.php";
        $data['comments'] = "comments.php";
        
		$this->load->view('template', $data);
	}
}
