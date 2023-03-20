<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->helper('files', 'form', 'fungsi');
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $this->template->load('auth/template_auth', 'auth/upload_cover', array('error' => ' ' ));
    }
    public function aksi_upload(){
		$config['upload_path']          = './assets/uploads';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2000;
 
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors('<div class="alert alert-danger" role="alert">', '</div>'));
			$this->template->load('auth/template_auth', 'auth/upload_cover', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->template->load('auth/template_auth', 'auth/login_uploaded', $data);
		}
	}
}