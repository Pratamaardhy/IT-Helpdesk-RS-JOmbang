<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
    
class Login extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            if (!empty($this->session->userdata('id_user'))) {
                redirect('dashboard');
            }

            $this->load->model('Mlogin', 'ml');
            
        }
        
        public function index()
        {
            if(!empty($_POST)){
                
                $this->form_validation->set_rules('username', 'username', 'trim|required');
                
                $this->form_validation->set_rules('password', 'password', 'trim|required');
                
                if ($this->form_validation->run() == TRUE) {
                    $cek=$this->ml->auth();
                    if($cek){
                        redirect('dashboard');
                    } else {
                        
                        notif('login gagal,akuntidak ditemukan');
                    }
                } else {
                    $this->session->set_flashdata('msg', 'cek kembali inputan Anda!');
                }
                
            }

            $this->load->view('login');
            
        }
    }
?>