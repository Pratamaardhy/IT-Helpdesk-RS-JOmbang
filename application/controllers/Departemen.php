<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        cekLogin();

        
        $this->load->model('Mdepartemen', 'md');
        
    }
    

    public function index()
    {
        $data['departemen'] = $this->md->get()->result();
        render('departemen', $data);
    }

}

/* End of file Departemen.php */
