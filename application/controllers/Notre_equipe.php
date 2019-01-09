<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notre_equipe extends CI_Controller {


	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Notre equipe";
        $data['include'] = "notre_equipe.php";
        $data['comments'] = "comments.php";

		$this->load->view('template', $data);
	}
}
