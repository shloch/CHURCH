<?php

class Mstatut_choral extends CI_Model {

    var $table = 'statut_choral';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    


    function getText() {
        $this->db->select('*');
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
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