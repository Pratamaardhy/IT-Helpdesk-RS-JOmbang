<?php

    function cekLogin()
    {
        
        $a =& get_instance();
        
        if(empty($a->session->userdata('id_user'))) {
            redirect('login');
        }
    }
    function render($view, $data=null){
        $a =& get_instance();
        $data['xview'] = $view;
        $a->load->view('back/template', $data);
    }

    function notif($arr)
    {
        
        $a =& get_instance();
        $a->session->set_flashdata('msg', $arr);
    }
?>