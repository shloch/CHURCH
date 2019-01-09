<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IlsEnParlent extends CI_Controller {


	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Ils en parlent";
        $data['include'] = "vIlsEnParlent.php";
        $data['comments'] = "comments.php";
        
		$this->load->view('template', $data);
	}
}