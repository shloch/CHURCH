<?php

class Mnotre_equipe extends CI_Model {

    var $table = 'notre_equipe';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function save($nom, $role) {
        $data = array(
            'nom' => $nom,
            'role' => $role   
        );
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() > 0 ) {
            return TRUE;
        }
        return FALSE;
    }

    function savePhoto2DB($ID, $fileName) {
        $data = array(
            'photo_url' => $fileName   
        );
        $this->db->update($this->table, $data);
        $this->db->where('id', $ID);
        if ($this->db->affected_rows() > 0 ) {
            return TRUE;
        }
        return FALSE;
    }

    function selectByID($ID) {
        $this->db->select('*');
        $this->db->where('id', $ID);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            return $row[0];
        } else {
            return FALSE;
        }
    }

    function selectByNameAndRole($nom, $role) {
        $this->db->select('*');
        $this->db->where('nom', $nom);
        $this->db->where('role', $role);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            return $row[0];
        } else {
            return FALSE;
        }
    }

    


    function selectAll() {
        $this->db->select('*');
        //$this->db->where('username', $username);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $rows = $query->result();
            return $rows;
        } else {
            return FALSE;
        }
    }

    
    


    /**
     * update the Choire presentation text
     */
    function update($txt) {
        $data = array(
            'presentation_text' => $txt
        );
        //$this->db->where('member_id', $member_id);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0 ) {
            return TRUE;
        }
        return FALSE;
    }

    
    
}

/* End of file mstudent.php */
/* Location: ./system/application/models/mstudent.php */