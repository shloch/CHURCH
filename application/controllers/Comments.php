<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mcomments', 'db_table');
        //$this->load->model('Mskills', 'skills');
        //$this->load->model('Mcompany', 'company');
        //$this->load->model('Maward', 'award');
        $this->load->helper('security');
        $this->load->helper('text');
        $this->load->helper('file');
        $this->output->enable_profiler(TRUE);
    }

	public function index()
	{
        redirect('Homepage','refresh');
    }
    
    public function save()
	{
        if (isset($_POST)) {// if posted
            //$this->form_validation->set_rules('prenom', 'required');
            //$this->form_validation->set_rules('msg', 'required');
            //$this->form_validation->set_rules('captchaInput', 'required|matches[captchaWord]');
            //echo $this->form_validation->run();
            if ( !(empty($_POST['prenom'])) && !(empty($_POST['msg'])) && !(empty($_POST['captchaInput'])) && ($_POST['captchaInput'] == $_POST['captchaWord']) ) {
                //redirect('Notre_equipe','refresh');  convert_accented_characters($string);
                $prenom = xss_clean(convert_accented_characters($_POST['prenom']));
                $msg = xss_clean(convert_accented_characters($_POST['msg']));
                $comment_time = mdate('%d-%m-%Y', time()); 

                $this->db_table->save($prenom, $msg, $comment_time);
                
                $captcha_folder = './img/captcha/';
		        delete_files($captcha_folder);
                
            } 
            redirect('Homepage','refresh'); 
            
        }else{
            redirect('Homepage','refresh'); 
        }
	}
}