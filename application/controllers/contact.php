<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Contactez nous";
		$data['include'] = "vcontact.php";
		//delete all COMMENT captcha created images
		$captcha_folder = './img/captcha/';
		delete_files($captcha_folder);
        
		$this->load->view('template', $data);
	}
}