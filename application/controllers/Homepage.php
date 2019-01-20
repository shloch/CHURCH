<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
        parent::__construct();
        $this->load->model('Macceuil', 'db_table');
	}
	

	public function index()
	{
        $data['title'] = "Chorale Lwanga Kisito";
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
		
		$row = $this->db_table->getText();
        $data['row'] = $row;


		$this->load->view('home_page', $data);
	}
}
