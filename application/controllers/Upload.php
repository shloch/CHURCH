<?php

class Upload extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('captcha');
            $this->load->model('Mnotre_equipe', 'db_table');
            $this->load->helper('file');
            $this->output->enable_profiler(TRUE);
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


        public function do_upload2($ID)
        {
            $uplaodPath = base_url().'img/notre_equipe/';
            $config['upload_path']          =  $uplaodPath;
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            $status = $this->upload->do_upload('userfile');
            echo gettype($status);
            echo (string)($status);
            
            if ($status == FALSE)
            {
                    echo 'tttt';
                    $this->session->set_flashdata('error', "SELECTIONNER UNE PHOTO");
                    //$this->addPhoto($ID);
            }
            else
            {
                    $data = $this->upload->data();
                    echo 'yooo';
                    echo $data['full_path'];
                    //$this->load->view('upload_success', $data);
            }
        }
}
?>