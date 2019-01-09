<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statut extends CI_Controller {


	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Statut Chorale";
        $data['include'] = "statut_chorale.php";
        $data['comments'] = "comments.php";
        
		$this->load->view('template', $data);
	}
}
