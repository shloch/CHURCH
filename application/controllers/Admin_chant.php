<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_chant extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mchants', 'db_chant');
        $this->load->model('Mcalender_evenement', 'db_calender');
        $this->load->model('Mderoulement', 'db_deroulement');
        $this->load->helper('file');
        $this->output->enable_profiler(TRUE);
    }


    /**
     * 
     *index function administration
     */
	public function index()
	{
       
    }

    public function add($deroulementID, $calenderID) {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $row = $this->db_calender->selectAllCalenderAndDeroulement($deroulementID, $calenderID);               
            $data['title'] = "Ajouter un chant";
            $data['include'] = "admin/add_chant.php";  
            if ($row != FALSE) {
                $data['row'] = $row;
            } 
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }

    public function edit($ID)
	{
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Modifier les Activites de la  Chorale";
            $data['include'] = "admin/edit_activites_chorale.php";
            $row = $this->db_table->selectByID($ID);
            if ($row != FALSE) {
                $data['row'] = $row;
            }
                   
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }

    function update($ID) {
        if (isset($_POST)) {// if posted
            $this->form_validation->set_rules('date_act', 'Date', 'required');
            $this->form_validation->set_rules('libelle', 'Libelle', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->edit($ID);
            } else {
                $date_act = $this->input->post('date_act');
                $libelle = $this->input->post('libelle');
                $description = $this->input->post('description');

                $updateStatus = $this->db_table->update($ID, $date_act, $libelle, $description);
                if ($updateStatus == TRUE) {
                    $this->session->set_flashdata('success', "MISE A JOUR AVEC SUCCESS  !!!");
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('Admin_activites/edit/'.$ID,'refresh');
                
            }
        }else{
            redirect('Admin_activites','refresh');
        }
    }

    function delete($ID) {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $row = $this->db_table->delete($ID);
            redirect('Admin_activites','refresh');
        }else {
            redirect('admin','refresh');
        }
    }

    
    function save($calenderID, $deroulementID) {
        if (isset($_POST)) {// if posted
            $this->form_validation->set_rules('chant_name', 'NOM CHANT', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->add($deroulementID, $calenderID);
            } else {
                $chant_name = $this->input->post('chant_name');
               
                $updateStatus = $this->db_chant->save($chant_name, $calenderID, $deroulementID);
                if ($updateStatus == TRUE) {
                    $this->session->set_flashdata('success', "MISE A JOUR AVEC SUCCESS  !!!");
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('Admin_mess_evenement/detail_event/'.$calenderID,'refresh');
                
            }
        }else{
            redirect('Admin_activites','refresh');
        }
    }
    
    

}