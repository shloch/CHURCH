<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presentation_chorale extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mpresentation_choral', 'model');
        //$this->load->model('Mskills', 'skills');
        //$this->load->model('Mcompany', 'company');
		//$this->load->model('Maward', 'award');
        $this->load->helper('file');
        //$this->output->enable_profiler(TRUE);
    }

	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito - Presentation Chorale";
        $data['include'] = "presentation_chorale.php";
		$data['comments'] = "comments.php";
        $data['presentation'] = $this->model->getText();
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
        
		$this->load->view('template', $data);
	}

}
