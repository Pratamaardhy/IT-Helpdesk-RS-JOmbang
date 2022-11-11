<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

    public function auth()
    {
        
        $this->db->from('user')->where(['username'=> $this->input->post('username'),'password'=>$this->input->post('password')
        ]);
        
        $res=$this->db->get();
        if($res->num_rows() > 0){
            $res = $res->row();
            $session = array(
                'id_user' => $res->id_user,
                'nama' => $res->nama
            );
            
            $this->session->set_userdata( $session );
            
            return true;
        }else {
            return false;
        }
        
    }    

}

/* End of file Mlogin.php */
