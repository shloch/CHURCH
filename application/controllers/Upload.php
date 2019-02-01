<?php

class Upload extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('captcha');
            $this->load->model('Mnotre_equipe', 'db_table');
            $this->load->model('Mil_en_parlent', 'db_table2');
            $this->load->model('Mgalerie_images', 'db_table3');
            $this->load->helper('file');
            //$this->output->enable_profiler(TRUE);
        }

        

        public function index()
        {
            $logged = $this->session->userdata('member_id');
            if (isset($logged) && $logged != FALSE) {
                $data['title'] = "Notre Equipe";
                $data['include'] = "admin/notre_equipe.php";
                $data['error'] = "";
                $rows = $this->db_table->selectAll();
                if ($rows != FALSE) {
                    $data['rows'] = $rows;
                }
                
                
                $this->load->view('template2', $data);
            }else {
                redirect('admin','refresh');
            }
        }

        /**
         * photo notre_equipe
         */
        public function do_upload($ID)
        {
                
                $config['upload_path']          =  './img/notre_equipe/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 500;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['encrypt_name']           = TRUE;               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        //$error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
                        //
                        
                        $row = $this->db_table->selectByID($ID);
                        $data['title'] = 'Ajouter la Photo de <strong>'. $row['nom'] .' </strong>';
                        $data['include'] = "admin/add_photo_membre.php";
                        $data['error'] = $this->upload->display_errors();
                        $data['ID'] = $ID;
                        $data['nom'] = $row['nom'];

                        $this->load->view('template2', $data);
                }
                else
                {                                           
                        $upload_data = $this->upload->data(); //get saved data
                        $fileName = $upload_data['file_name']; //get file name

                        $updateStatus = $this->db_table->savePhoto2DB($ID, $fileName);
                        if ($updateStatus == TRUE) {
                            redirect('admin_notre_equipe','refresh');
                        }

                }
        }

        /**
         * ajout photo membre
         */
        public function do_upload2($ID)
        {
                
                $config['upload_path']          =  './img/notre_equipe/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 500;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['encrypt_name']           = TRUE;               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        //$error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
                        //
                        
                        $row = $this->db_table2->selectByID($ID);
                        $data['title'] = 'Ajouter la Photo de <strong>'. $row['nom'] .' </strong>';
                        $data['include'] = "admin/add_photo_membre2.php";
                        $data['error'] = $this->upload->display_errors();
                        $data['ID'] = $ID;
                        $data['nom'] = $row['nom'];

                        $this->load->view('template2', $data);
                }
                else
                {                                           
                        $upload_data = $this->upload->data(); //get saved data
                        $fileName = $upload_data['file_name']; //get file name

                        $updateStatus = $this->db_table2->savePhoto2DB($ID, $fileName);
                        if ($updateStatus == TRUE) {
                            redirect('Admin_ilsEnParlent','refresh');
                        }

                }
        }


        /**
         * ajout photo gallery
         */
        public function do_upload3($ID)
        {
                
                $config['upload_path']          =  './img/galeryPhoto/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 500;
                $config['max_width']            = 1224;
                $config['max_height']           = 860;
                $config['encrypt_name']           = TRUE;               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        //$error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
                        //
                        
                        $row = $this->db_table3->selectByID($ID);
                        $data['title'] = 'Selectionner photo pour Gallerie';
                        $data['include'] = "admin/add_photo_gallery2.php";
                        $data['error'] = $this->upload->display_errors();
                        $data['ID'] = $ID;
                        $data['description'] = $row['description'];

                        $this->load->view('template2', $data);
                }
                else
                {                                           
                        $upload_data = $this->upload->data(); //get saved data
                        $fileName = $upload_data['file_name']; //get file name

                        $updateStatus = $this->db_table3->savePhoto2DB($ID, $fileName);
                        if ($updateStatus == TRUE) {
                            redirect('Admin_galerieImages','refresh');
                        }

                }
        }
 
}
?>