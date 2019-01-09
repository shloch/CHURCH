<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mess_evenement extends CI_Controller {


	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Mess et Evenement";
        $data['comments'] = "comments.php";
        
		$this->load->view('vmess_evenement', $data);
	}
}
