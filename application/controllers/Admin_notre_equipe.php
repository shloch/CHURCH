<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_notre_equipe extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mnotre_equipe', 'db_table');
        //$this->load->model('Mskills', 'skills');
        //$this->load->model('Mcompany', 'company');
		//$this->load->model('Maward', 'award');
        $this->load->helper('file');
        //$this->output->enable_profiler(TRUE);
    }

    /**
     * 
     *index function administration
     */
	public function index()
	{
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Notre Equipe";
            $data['include'] = "admin/notre_equipe.php";
            $data['error'] = "";
            $rows = $this->db_table->selectAll(); //returns result() or FALSE
            $data['rows'] = $rows;
            
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }

    function delete($ID) {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $row = $this->db_table->selectByID($ID);

            if ($row['photo_url'] != 'NONE') {
                $imageOnDisk = base_url().'img/notre_equipe/'.$row['photo_url'];
                //echo $imageOnDisk;
                @unlink($imageOnDisk);
                echo 'deleted';

                $this->load->library('ftp');
                $config['hostname'] = 'ftp.lwangakisito.cm';
                $config['username'] = 'lwangaki';
                $config['password'] = 'Loic_191014';
                //$config['debug']        = TRUE;
                $this->ftp->connect($config);
                $this->ftp->delete_file($imageOnDisk);
                $this->ftp->close();
            }
            
            $row = $this->db_table->delete($ID);
            redirect('Admin_notre_equipe','refresh');
        }else {
            redirect('admin','refresh');
        }
    }

    public function addPhoto($ID)
	{
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $row = $this->db_table->selectByID($ID);
            $data['title'] = 'Ajouter la Photo de <strong>'. $row['nom'] .' </strong>';
            $data['include'] = "admin/add_photo_membre.php";
            $data['error'] = "";
            $data['ID'] = $ID;
            $data['nom'] = $row['nom'];
            
            
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }

    public function savePhoto($ID)
    {
            //
    }

    function save() {
        if (isset($_POST)) {// if posted
            $this->form_validation->set_rules('nom', 'NOM', 'required');
            $this->form_validation->set_rules('role', 'ROLE', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->add();
            } else {
                $nom = $this->input->post('nom');
                $role = $this->input->post('role');

                $updateStatus = $this->db_table->save($nom, $role);
                if ($updateStatus == TRUE) {
                    $row = $this->db_table->selectByNameAndRole($nom, $role);
                    redirect('Admin_notre_equipe/addPhoto/'.$row['id'],'refresh');
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('Admin_notre_equipe','refresh');
                
            }
        }else{
            redirect('Admin_notre_equipe','refresh');
        }
    }
    

    public function add() {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Ajouter un membre de l'equipe";
            $data['include'] = "admin/add_membre_equipe.php";    
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }
    
    

    function update() {
		if (isset($_POST)) {// if posted
			$this->form_validation->set_rules('present_txt', 'PRESENTATION TEXT', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->index();
            } else {
                $text = $this->input->post('present_txt');
                $updateStatus = $this->present_choral->update($text);
                if ($updateStatus == TRUE) {
                    $this->session->set_flashdata('success', "MISE A JOUR AVEC SUCCESS");
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('admin_presentation_chorale/index','refresh');
                
            }
        }
    
    }

}