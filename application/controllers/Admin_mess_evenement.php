<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_mess_evenement extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('captcha');
        $this->load->model('Mcalender_evenement', 'db_table');
        $this->load->model('Mderoulement', 'db_deroulement');
        $this->load->model('Mchants', 'db_chant');
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
            $this->displayCalender();
        } else {
            redirect('admin','refresh');
        }
    }

    public function add_calender_celebration()
	{
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "AJouter Evenement Dans Calandrier";
            $data['include'] = "admin/add_mess_evenement.php";
            $data['error'] = "";
            //$rows = $this->db_table->selectAll(); //returns result() or FALSE
            //$data['rows'] = $rows;      
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }

    public function displayCalender()
	{
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Calendrier Mess et Evenement";
            $data['include'] = "admin/calender_mess_evenement.php";
            $data['error'] = "";
            //$rows = $this->db_table->selectAll(); //returns result() or FALSE
            //$data['rows'] = $rows;       
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }

    function detail_event($calenderID) {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            
            $row = $this->db_deroulement->selectByCalenderID($calenderID);
            if ($row != FALSE) {
                //$data['title'] = "Modifier L'activite du Calendrier";
                //$data['include'] = "admin/detailed_mess_evenement_id.php";
                //$data['row'] = $row;
                $this->displayListDeroulement($calenderID);
            } else { //calender detail not loaded yet
                $data['title'] = "AUCUN DEROULEMENT/CHANT POUR CE JOUR, IL FAUT CHARGER";
                $data['include'] = "admin/nodetailed_mess_evenement_id.php";
                $data['calenderID'] = $calenderID;
                $this->load->view('template2', $data);
            }          
        }else {
            redirect('admin','refresh');
        }
    }

    function add_deroulement($calenderID) {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Ajouter un Deroulement(FORME ORDINAIRE)";
            $data['include'] = "admin/add_deroulement.php";  
            $data['calenderID'] = $calenderID;  
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }

    function edit_deroulement($deroulementID, $calenderID) {
        $data['title'] = "Modifier deroulement du Calendrier";
        $data['include'] = "admin/edit_deroulement.php";
        $data['calenderID'] = $calenderID; 
        $row = $this->db_deroulement->selectByID($deroulementID);
        if ($row != FALSE) {
            $data['row'] = $row;
        }             
        $this->load->view('template2', $data);
    }

    function delete_deroulement($deroulementID, $calenderID) {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $row = $this->db_deroulement->delete($deroulementID);
            redirect('Admin_mess_evenement/displayListDeroulement/'.$calenderID,'refresh');
        }else {
            redirect('admin','refresh');
        }
    }

    function update_deroulement($deroulementID, $calenderID) {
        if (isset($_POST)) {// if posted
            $this->form_validation->set_rules('deroulement', 'DEROUELEMENT', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->edit_deroulement($deroulementID, $calenderID);
            } else {
                $txt = $this->input->post('deroulement');
                $updateStatus = $this->db_deroulement->update($txt, $deroulementID);
                if ($updateStatus == TRUE) {
                    redirect('Admin_mess_evenement/displayListDeroulement/'.$calenderID,'refresh');
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('Admin_mess_evenement','refresh');           
            }
        }else{
            redirect('Admin_mess_evenement','refresh');
        }
    }

    function save_deroulement($calenderID){
        if (isset($_POST)) {// if posted
            $this->form_validation->set_rules('deroulement', 'DEROUELEMENT', 'required');
            if ($this->form_validation->run() == FALSE) {
				$this->add_deroulement($calenderID);
            } else {
                $txt = $this->input->post('deroulement');
                $updateStatus = $this->db_deroulement->save($txt, $calenderID);
                if ($updateStatus == TRUE) {
                    redirect('Admin_mess_evenement/displayListDeroulement/'.$calenderID,'refresh');
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('Admin_mess_evenement','refresh');       
            }
        }else{
            redirect('Admin_mess_evenement','refresh');
        }
    }

    function displayListDeroulement($calenderID){
        $rows2 = $this->db_deroulement->selectAllByCalenderID($calenderID); //get all derouelemt

        $rows = $this->db_chant->selectAllByCalenderID($calenderID); //from Calender, deroulement & chants TABLES 
        if ($rows2 != FALSE) {
            $data['title'] = "List des deroulements";
            $data['include'] = "admin/list_deroulement.php"; 
            $data['calenderID'] = $calenderID;  //to remove
            $data['all_chant'] = $rows;
            $data['rows'] = $rows2;
            $this->load->view('template2', $data);
        } else {
            $this->detail_event($calenderID);
        }     
    }

    function delete($ID) {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $row = $this->db_table->delete($ID);
            redirect('Admin_mess_evenement','refresh');
        }else {
            redirect('admin','refresh');
        }
    }


    function save() {
        if (isset($_POST)) {// if posted
            $this->form_validation->set_rules('datepicker', 'DATE', 'required');
            $this->form_validation->set_rules('celebration', 'CELEBRATION', 'required');
            $this->form_validation->set_rules('lien', 'LIEN', 'required');

            if ($this->form_validation->run() == FALSE) {
				$this->index();
            } else {
                $datepicker = $this->input->post('datepicker');

                $str_dates = explode("-", $datepicker); //$month_array = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
                $month_int = $str_dates[1];
                $timestamp = strtotime($datepicker); 
                
                $celebration = $this->input->post('celebration');
                $has_link = $this->input->post('lien');

                $updateStatus = $this->db_table->save($timestamp, $celebration, $has_link, $month_int);
                if ($updateStatus == TRUE) {
                    //$row = $this->db_table->selectByNameAndRole($nom, $role);
                    redirect('Admin_mess_evenement/displayCalender/','refresh');
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('Admin_mess_evenement','refresh');          
            }
        }else{
            redirect('Admin_mess_evenement','refresh');
        }
    }
    

    public function add() {
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Ajouter le message d'un membre";
            $data['include'] = "admin/add_msg_ils_parlent.php";    
            $this->load->view('template2', $data);
        }else {
            redirect('admin','refresh');
        }
    }

    public function edit($ID)
	{
        $logged = $this->session->userdata('member_id');
        if (isset($logged) && $logged != FALSE) {
            $data['title'] = "Modifier L'activite du Calendrier";
            $data['include'] = "admin/edit_calender_mess_evenement.php";
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
            $this->form_validation->set_rules('datepicker', 'DATE', 'required');
            $this->form_validation->set_rules('celebration', 'CELEBRATION', 'required');
            $this->form_validation->set_rules('lien', 'LIEN', 'required');

            if ($this->form_validation->run() == FALSE) {
				$this->edit($ID);
            } else {
                $datepicker = $this->input->post('datepicker');

                $str_dates = explode("-", $datepicker);
                //$month_array = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
                $month_int = $str_dates[1];
                $timestamp = strtotime($datepicker); 
                $celebration = $this->input->post('celebration');
                $has_link = $this->input->post('lien');
      
                $updateStatus = $this->db_table->update($timestamp, $celebration, $has_link, $month_int, $ID);
                if ($updateStatus == TRUE) {
                    //$row = $this->db_table->selectByNameAndRole($nom, $role);
                    redirect('Admin_mess_evenement/displayCalender/','refresh');
                }else{
                    $this->session->set_flashdata('error', "ERREUR DE MISE A JOUR");
                }
                redirect('Admin_mess_evenement','refresh');          
            }
        }else{
            redirect('Admin_mess_evenement','refresh');
        }
    }

}