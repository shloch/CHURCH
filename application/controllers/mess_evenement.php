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
	
	public function index2()
	{
        $data['title'] = "Chorale Lwanga Kisito - Mess et Evenement";
		$data['comments'] = "vmess_evenement.php";
		$data['include'] = "vmess_evenement.php";
		$this->load->view('template', $data);
    }
    
    public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Mess et Evenement";
        $data['comments'] = "comments.php";
		// ============CAPTCHA===================================       
		$vals = array(
			'img_path' => './img/captcha/',              
			'img_url' => base_url() . 'img/captcha/',
			'img_width' => '120',
			'img_height' => '30',
			'font_path' => './img/captchaFONT/tahomabd.ttf',
			'expiration' => '7200',
			//'word'          => 'Random word',
			'word_length'   => 4,
			'font_size'     => 20,
			'img_id'        => 'Imageid',
			'pool'          => '2345678ADEFHJKMNPRSTUVWXYZ',

			// White background and border, black text and red grid
			'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(0, 255, 30)
        	)
		);
		$data['CAPTCHA'] = create_captcha($vals);
		// ============CAPTCHA=================================== 
		$this->load->view('vmess_evenement', $data);
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

     /**
     * display WITHOUT downloadable files
     */
	function displayListDeroulement($calenderID){
        $rows = $this->db_deroulement->selectAllByCalenderID($calenderID); //get all derouelemt

        //$rows = $this->db_chant->selectAllByCalenderID($calenderID); //from Calender, deroulement & chants TABLES 
        if ($rows != FALSE) {
            $data['title'] = "List des deroulements";
            $data['include'] = "__vmess_evenement2.php"; 
            $data['calenderID'] = $calenderID;  //to remove
            $data['error'] = '';
            $data['rows'] = $rows;
            $this->load->view('template', $data);
        } else {
            $this->detail_event($calenderID);
        }     
    }

    /**
     * display with downloadable files
     */
    function displayListDeroulement2($calenderID){
        $rows = $this->db_deroulement->selectAllByCalenderID($calenderID); //get all derouelemt

        //$rows = $this->db_chant->selectAllByCalenderID($calenderID); //from Calender, deroulement & chants TABLES 
        if ($rows != FALSE) {
            $data['title'] = "List des deroulements";
            $data['include'] = "vmess_evenement2.php"; 
            $data['calenderID'] = $calenderID;  //to remove
            $data['error'] = '';
            $data['rows'] = $rows;
            $this->load->view('template', $data);
        } else {
            $this->detail_event($calenderID);
        }     
    }


    function getCode($calenderID) {
        if (isset($_POST)) {// if posted
            $this->form_validation->set_rules('passcode', 'passcode', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->detail_event($calenderID);
            } else {
                $passcode = $this->input->post('passcode');

                $row = $this->db_event->getcode($passcode);
                if ($row != FALSE) {
                    if ($row->code == $passcode) {
                        //$this->displayListDeroulement2($calenderID);
                        redirect('Mess_evenement/displayListDeroulement2/'.$calenderID,'refresh');
                    } else {
                        $this->session->set_flashdata('error', "MAUVAIS CODE");
                    }
                }else{
                    $this->session->set_flashdata('error', "AUCUN CODE CREER PAR ADMIN");
                    
                }
                $this->detail_event($calenderID);
                
            }
        }else{
            $this->detail_event($calenderID);
        }
    }
}
