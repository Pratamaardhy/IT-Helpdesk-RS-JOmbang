<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        belum_login('user/dashboard');
        $this->load->model('Mlogin', 'ml');
        $this->load->model('user/Mtuser', 'mu');
        $this->load->library('form_validation', 'session');
        $this->load->helper('files', 'fungsi');
    }

    public function index()
    {

        $id = $this->session->userdata('id_user');
        $data['user'] = $this->mu->get_profil($id)->row_array();
        $data['title'] = ' Tiket Saya';
        $data['tiket'] = $this->mu->tiket();
        $this->template->load('user/template', 'user/page', $data);
    }

    public function buat_tiket()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->mu->get_profil($id)->row_array();
        $data['title'] = 'Buat Tiket';
        $data['inventory'] = $this->mu->inventory();
        $this->template->load('user/template', 'user/buat_tiket', $data);
    }

    public function buat_tiket_action()
    {
        $this->form_validation->set_rules('masalah', 'Nama Masalah', 'trim|required', ['required' => 'Masalah Wajib Diisi !!!']);
        if ($this->form_validation->run() == TRUE) {
        $tiket = "T-" . date("Ymd") . rand(999, 111);
        $masalah = $this->input->post('masalah');
        $SUB_MASALAH = $this->input->post('SUB_MASALAH');
        $tanggal = date("Y-m-d H:i:s");
        $id_user = $this->input->post('id_user');
        $STATUS_TIKET = 1;
        $id_inventory = $this->input->post('id_inventory');
        $data = array(
            'masalah' => $masalah,
            'id_user' => $id_user,
            'tanggal' => $tanggal,
            'id_tiket' => $tiket,
            'STATUS_TIKET' => $STATUS_TIKET,
            'SUB_MASALAH' => $SUB_MASALAH,
            'id_inventory' => $id_inventory
        );
        $this->mu->insert($data, 'tiket');
        redirect('user/Dashboard');
    } else {
        $this->buat_tiket();
    }
    }


    public function profil()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->mu->get_profil($id)->row_array();
        $data['title'] = 'Profil';
        $this->template->load('user/template', 'user/profil', $data);
    }

    public function form_ubah_profil()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->mu->get_profil($id)->row_array();
        $data['departemen'] = $this->mu->departemen();
        $data['title'] = 'Ubah Profil';
        $this->template->load('user/template', 'user/form_edit_profil', $data);
    }

    public function ubah_profil()
    {
        $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'trim|required|min_length[4]|max_length[30]', ['required' => 'Nama Lengkap Harus Diisi Terlebih Dahulu !!!']);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|max_length[50]', ['required' => 'Email Harus Diisi Terlebih Dahulu !!!']);
        $this->form_validation->set_rules('no_telp', 'Telp', 'trim|required|min_length[11]|max_length[12]', ['required' => 'No. Telepon Harus Diisi Terlebih Dahulu !!!']);

        if ($this->form_validation->run() == TRUE) {
            $id_user = $this->input->post('id_user');
            $id_departemen = $this->input->post('id_departemen');
            $nama_user = $this->input->post('nama_user');
            $email = $this->input->post('email');
            $no_telp = $this->input->post('no_telp');

            $data = array(
                'id_departemen' => $id_departemen,
                'nama_user' => $nama_user,
                'email' => $email,
                'no_telp' => $no_telp,
            );

            $where = array(
                'id_user' => $id_user
            );

            $this->mu->update_profil($where, $data, 'user');
            $this->session->set_userdata('nama_user', $nama_user);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate !!!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('user/Dashboard/profil');
        } else {
            $this->form_ubah_profil();
        }
    }
    public function ubah_password()
    {
        $data['title'] = 'Ubah Kata Sandi';
        $this->template->load('user/template', 'user/ubah_password', $data);
    }
    public function ubah_password_action()
    {
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->mu->get_profil($id)->row_array();
        $this->form_validation->set_rules('password', 'Password Lama', 'trim|required', ['required' => 'Password Lama Wajib Diisi !!!']);
        $this->form_validation->set_rules('password1', 'Password Baru', 'trim|required|min_length[8]', ['required' => 'Password Baru Wajib Diisi !!!']);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password Baru', 'trim|required|min_length[8]|matches[password1]', ['required' => 'Konfirmasi Password Wajib Diisi !!!'], ['matches[password1]' => 'Konfirmasi Masuk Harus Sama!!!']);
        if ($this->form_validation->run() == TRUE) {
            $password_lama = $this->input->post('password');
            $password_baru = $this->input->post('password1');
            if (!password_verify($password_lama, $data['user']['password_user'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Password Tidak Sama Dengan Password Sebelumnya</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect('user/Dashboard/ubah_password');
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Password Baru Tidak Boleh Sama Dengan Password Lama</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('user/Dashboard/ubah_password');
                } else {
                    // $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->db->set('password_user', $password_hash);
                    $this->db->where('id_user', $this->session->userdata('id_user'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>password Telah Diubah</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                    redirect('user/Dashboard/ubah_password');
                }
            }
        } else {
            $this->ubah_password();
        }
    }

    public function track($ID_TIKET)
    {
        $data['title'] = 'Riwayat Aktivitas';
        $data['track'] = $this->mu->track($ID_TIKET);
        $data['track_user'] = $this->mu->track_user($ID_TIKET);
        $this->template->load('user/template', 'user/track', $data);
    }
    public function konfirmasi($ID_TIKET)
    {
        $STATUS_TIKET = 7;
        $TEKNISI = $this->session->userdata('id_user');
        $tanggal = date("Y-m-d H:i:s");
        $data = [
            'STATUS_TIKET' => $STATUS_TIKET,
        ];
        $data2 = [
            'ID_TIKET' => $ID_TIKET,
            'ID_STATUS' => $STATUS_TIKET,
            'ID_TEKNISI' => $TEKNISI,
            'TANGGAL' => $tanggal
        ];

        $this->mu->update_konfirmasi($data, $ID_TIKET, $data2);
        redirect('user/Dashboard');
    }
}
