<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Contactez nous";
        $data['include'] = "vcontact.php";
        
		$this->load->view('template', $data);
	}
}