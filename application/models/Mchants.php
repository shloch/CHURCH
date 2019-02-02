<?php

class Mchants extends CI_Model {

    var $table = 'chants_evenement';
    var $db_deroulement = 'deroulement_evenement';
    var $db_calender = 'calender_evenement';

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

    function selectByCalenderID($calenderID) {
        $this->db->select('*');
        $this->db->where('calenderID', $calenderID);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        } else {
            return FALSE;
        }
    }

    function selectAllByCalenderID($calenderID) {
        $data = array(
            $this->table . '.id AS chantID',
            $this->table . '.nom_chant',
            $this->table . '.reference AS lyrics',
            $this->table . '.cdo_page',
            $this->table . '.cdo_nr',
            $this->table . '.mp3',
            $this->db_deroulement . '.id AS deroulementID',
            $this->db_deroulement . '.forme_ordinaire AS deroulement',
            $this->db_calender . '.id AS calenderID',
            $this->db_calender . '.timestamp',
            $this->db_calender . '.celebration',
            $this->db_calender . '.has_link',
            $this->db_calender . '.month_int'
        );

        $this->db->select($data);
        $this->db->from($this->table);
        $this->db->join($this->db_deroulement, $this->table . '.derouelementID = ' . $this->db_deroulement . '.id', 'inner');
        $this->db->join($this->db_calender, $this->table . '.calenderID = ' . $this->db_calender . '.id', 'inner');

        $this->db->where($this->db_calender . '.id', $calenderID);
        $this->db->order_by($this->table . '.derouelementID', 'ASC');
        
        $query = $this->db->get();
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

    function updateChantFieldDB($chantID, $fileName, $databaseField) {
        $data = array(
            $databaseField => $fileName
        );
        $this->db->where('id', $chantID);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0 ) {
            return TRUE;
        }
        return FALSE;
    }

    function setDBField2zero($fieldDB, $chantID) {
        $data = array(
            $fieldDB => '0'
        );
        $this->db->where('id', $chantID);
        $this->db->update($this->table, $data);
        
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
    function save($chant_name, $calenderID, $deroulementID) {
        $data = array(
            'nom_chant' => $chant_name,
            'calenderID' => $calenderID,
            'derouelementID' => $deroulementID   
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

 



   
    
}

/* End of file mstudent.php */
/* Location: ./system/application/models/mstudent.php */