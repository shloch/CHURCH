<?php

class Mderoulement extends CI_Model {

    var $table = 'deroulement_evenement';

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
        $this->db->select('*');
        $this->db->where('calenderID', $calenderID);
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
    function update($txt, $ID) {
        $data = array(
            'forme_ordinaire' => $txt
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
    function save($txt, $calenderID) {
        $data = array(
            'forme_ordinaire' => $txt,
            'calenderID' => $calenderID
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