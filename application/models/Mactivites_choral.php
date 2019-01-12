<?php

class Mactivites_choral extends CI_Model {

    var $table = 'activites_choral';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }


    /**
     * fetch all entries
     */
    function selectAll() {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        //$this->db->where('username', $username);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $rows = $query->result();
            return $rows;
        } else {
            return FALSE;
        }
    }

    function selectByID($ID) {
        $this->db->select('*');
        $this->db->where('id', $ID);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        } else {
            return FALSE;
        }
    }

    /**
     * save edited
     */
    function update($id, $date_act, $libelle, $description) {
        $data = array(
            'date_act' => $date_act,
            'libelle' => $libelle,
            'description' => $description
            
        );
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0 ) {
            return TRUE;
        }
        return FALSE;
    }


    /**
     * save new
     */
    function save($date_act, $libelle, $description) {
        $data = array(
            'date_act' => $date_act,
            'libelle' => $libelle,
            'description' => $description     
        );
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() > 0 ) {
            return TRUE;
        }
        return FALSE;
    }


    function delete($ID) {
        $this->db->where('id', $ID);
        $this->db->delete($this->table);
    }

    /**
     *
     * @param type $email
     * @param type $username
     * @param type $password
     * @param type $access_level represent "account_type" field in memeber's database table
     * @return type 
     */
    function signUp($email, $username, $password, $access_level) {
        //$this->output->enable_profiler(TRUE);
        $this->db->set('email', $email);
        $this->db->set('username', $username);
        $this->db->set('password', md5($password));  
        //database insert 1 as default value in account_type, so it is unecessary to send 1 as value here, but only when the value is greater than 1
        if($access_level == 2)
            $this->db->set('access_level_id', $access_level);        
        $this->db->insert($this->table);
        return $this->db->insert_id();
    }
    
    function storeReInitializedPwd($email, $generatedPwd){
        $this->db->set('password', md5($generatedPwd));    
        $this->db->where('email', $email);  
        $this->db->update($this->table);
    }

    function selectByEmail($email) {
        $this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            return $row[0];
        } else {
            return FALSE;
        }
    }

 

    function login($login, $password) {
        $this->db->select('*');
        $this->db->where('login', $login);
        $this->db->where('password', md5($password));
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        } else {
            return FALSE;
        }
    }

    
    
    public function findByEmailAndPassword($email, $password) {
        $this->db->select('*');
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $this->db->from($this->table);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        } else {
            return FALSE;
        }
    }



    function change_password($password,$member_id) {
        $data = array(
            'password' => md5($password)
        );
        $this->db->where('member_id', $member_id);
        $this->db->update($this->table, $data);
    }
    function editPersonalInformations($dob, $email, $gender, $mobile, $name, $username, $member_id) {
        $data = array(
            'dob' => $dob,
            'email' => $email,
            'gender' => $gender,
            'mobile' => $mobile,
            'name' => $name,
            'username' => $username
            
        );
        $this->db->where('member_id', $member_id);
        $this->db->update($this->table, $data);
    }
    function editLinks($facebook, $twitter, $linkedIn, $member_id) {
        $data = array(
            'facebook' => $facebook,
            'twitter' => $twitter,
            'linkedIn' => $linkedIn            
        );
        $this->db->where('member_id', $member_id);
        $this->db->update($this->table, $data);
    }
    
     function editPhoto($photo,$member_id) {
        $data = array(
            'photo' => $photo
        );
        $this->db->where('member_id', $member_id);
        $this->db->update($this->table, $data);
    }
    
    public function fetchUserByType($type=1) {
        $this->db->select('*');
        $this->db->where('access_level_id', $type);
        $this->db->from($this->table);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $rows = array();
            foreach ($query->result_array() as $row) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return array(); //an empty array
        }
    }
}

/* End of file mstudent.php */
/* Location: ./system/application/models/mstudent.php */