<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mess_evenement extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mcalender_evenement', 'db_event');
        $this->load->model('Mderoulement', 'db_deroulement');
        $this->load->model('Mchants', 'db_chant');
        $this->load->helper('file');
        //$this->output->enable_profiler(TRUE);
	}
	
	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Mess et Evenement";
		$data['comments'] = "vmess_evenement.php";
		$data['include'] = "vmess_evenement.php";
		$this->load->view('template', $data);
	}

	function detail_event($calenderID) {
            $row = $this->db_deroulement->selectByCalenderID($calenderID);
            if ($row != FALSE) {
                $this->displayListDeroulement($calenderID);
            } else { //calender detail not loaded yet
                $data['title'] = "List des deroulements";
                $data['include'] = "noderoulement.php";
                $data['calenderID'] = $calenderID;
                $this->load->view('template', $data);
            }          
       
	}


	function displayListDeroulement($calenderID){
        $rows = $this->db_deroulement->selectAllByCalenderID($calenderID); //get all derouelemt

        //$rows = $this->db_chant->selectAllByCalenderID($calenderID); //from Calender, deroulement & chants TABLES 
        if ($rows != FALSE) {
            $data['title'] = "List des deroulements";
            $data['include'] = "vmess_evenement2.php"; 
            $data['calenderID'] = $calenderID;  //to remove
            //$data['all_chant'] = $rows;
            $data['rows'] = $rows;
            $this->load->view('template', $data);
        } else {
            $this->detail_event($calenderID);
        }     
    }
}
