<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdepartemen extends CI_Model {

    public function get($where = null)
    {
        
        $this->db->from('departemen');
        if(!empty($where)) {
            $this->db->where($where);
        }

        
        $this->db->select('*');
        
        return $this->db->get();
        
    }    

}

/* End of file Mdepartemen.php */
