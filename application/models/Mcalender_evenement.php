<?php

class Mcalender_evenement extends CI_Model {

    var $table = 'calender_evenement';
    //var $table = 'kj_documents';    
    //var $documentTable = 'kj_documents';
    //var $type_of_document = 'kj_type_of_document';
    var $db_chants = 'chants_evenement';
    var $db_deroulement = 'deroulement_evenement';
    var $db_passcode = 'passcode';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }


    /**
     * fetch all entries
     */
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

    function selectAllCalenderAndDeroulement($deroulementID, $calenderID) {
        $data = array(
            $this->table . '.id AS calenderID',
            $this->table . '.timestamp',
            $this->table . '.celebration',
            $this->table . '.has_link',
            $this->table . '.month_int',
            $this->db_deroulement . '.id AS deroulementID',
            $this->db_deroulement . '.forme_ordinaire AS deroulement'
        );

        $this->db->select($data);
        $this->db->from($this->table);
        $this->db->join($this->db_deroulement, $this->table . '.id = ' . $this->db_deroulement . '.calenderID', 'inner');

        $this->db->where($this->db_deroulement . '.id', $deroulementID);
        $this->db->where($this->table . '.id', $calenderID);
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
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
    function update($timestamp, $celebration, $has_link, $month_int, $ID) {
        $data = array(
            'timestamp' => $timestamp,
            'celebration' => $celebration,
            'has_link' => $has_link,
            'month_int' => $month_int
        );
        $this->db->where('id', $ID);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0 ) {
            return TRUE;
        }
        return FALSE;
    }


    /**
     * save new
     */
    function save($timestamp, $celebration, $has_link, $month_int) {
        $data = array(
            'timestamp' => $timestamp,
            'celebration' => strtoupper($celebration),
            'has_link' => $has_link,
            'month_int' => $month_int   
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

 

    function selectByMonth($month_integer) {
        $this->db->select('*');
        $this->db->where('month_int', $month_integer);
        $this->db->order_by('timestamp', 'ASC');
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $rows = $query->result();
            return $rows;
        } else {
            return FALSE;
        }
    }

 
    //get passcode to display full calender infos
    function getcode($code) {
        $this->db->select('*');
        $query = $this->db->get($this->db_passcode);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        } else {
            return FALSE;
        }
    }

    function save_new_code($new_code) {
        $data = array(
            'code' => $new_code
        );
        $this->db->update($this->db_passcode, $data);
        
    }

   
    
}

/* End of file mstudent.php */
/* Location: ./system/application/models/mstudent.php */