<?php

class Mgalerie_videos extends CI_Model {

    var $table = 'gallery_videos';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function save($url, $description) {
        $data = array(
            'description' => $description,
            'url' => $url
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

    function selectByDesc($description) {
        $this->db->select('*');
        //$this->db->where('nom', $nom);
        $this->db->where('description', $description);
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
    function update($url, $txt) {
        $data = array(
            'description' => $txt,
            'url' => $url
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