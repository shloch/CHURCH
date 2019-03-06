<?php

class Macceuil extends CI_Model {

    var $table = 'acceuil';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * safe into database infos of HOME PAGE
     */
    function update($derniere_info, $recruitment, $repetition, $nous_chantons, $ID) {
        $data = array(
            'derniere_infos' => $derniere_info,
            'recruitement' => $recruitment,  
            'repetitions' => $repetition,   
            'nous_chantons' => $nous_chantons,    
        );
        $this->db->where('id', $ID);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0 ) {
            return TRUE;
        }
        return FALSE;
    }

    function delete($ID) {
        $this->db->where('id', $ID);
        $this->db->delete($this->table);
    }

    


    function getText() {
        $this->db->select('*');
        //$this->db->where('username', $username);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            return $row[0];
        } else {
            return FALSE;
        }
    }

    
    


    
}

/* End of file mstudent.php */
/* Location: ./system/application/models/mstudent.php */