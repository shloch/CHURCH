<?php

class Mcontact extends CI_Model {

    var $table = 'contact';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function save($nom, $email, $msg, $d) {
        $data = array(
            'nom' => $nom,
            'email' => $email,
            'msg' => $msg,
            'date' => $d 
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

    function savePhoto2DB($ID, $fileName) {
        $data = array(
            'photo_url' => $fileName
            
        );
        $this->db->where('id', $ID);
        $this->db->update($this->table, $data);
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
        //$this->db->where('status', );
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $rows = $query->result();
            return $rows;
        } else {
            return FALSE;
        }
    }

    function count_unread() {
        $this->db->select('*');
        $this->db->where('status', 'unread');
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $count = $query->num_rows();
            return $count;
        } else {
            return FALSE;
        }
    }

    function get_unread() {
        $this->db->select('*');
        //$this->db->where('status', 'unread');

        $this->db->order_by('date', 'DESC');
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
    function update_msg_statuses() {
        $data = array(
            'status' => 'READ'
        );
        $this->db->where('status', 'unread');
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0 ) {
            return TRUE;
        }
        return FALSE;
    }

    
    
}

/* End of file mstudent.php */
/* Location: ./system/application/models/mstudent.php */