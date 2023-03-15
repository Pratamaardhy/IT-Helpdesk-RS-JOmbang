<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        belum_login('admin/dashboard');
        $this->load->model('admin/Mdata', 'md');
        $this->load->model('admin/Mpengguna', 'mp');
        $this->load->model('admin/Minv', 'mi');
        $this->load->model('admin/Mlaptiket', 'ml');
        $this->load->model('admin/Mdash', 'mda');
        $this->load->model('teknisi/M_dashboard', 'md');
        $this->load->helper('files', 'fungsi');
    }

    public function index()
    {
        $data['count_total'] = $this->mda->get_count();
        $data['count_diajukan'] = $this->mda->get_diajukan();
        $data['count_dalamproses'] = $this->mda->get_dalamproses();
        $data['count_selesai'] = $this->mda->get_selesai();
        $data['tiket_diajukan'] = $this->mda->tiket_diajukan();
        $data['tiket_selesai'] = $this->mda->tiket_selesai();
        $data['chart'] = $this->mda->get_tiket_detail();
        $data['chart_teknisi'] = $this->mda->get_chart_teknisi();
        $data['data_perbaikan'] = $this->mda->dataperbaikan();

        $this->template->load('admin/template', 'admin/dashboard', $data);
    }


    function departemen()
    {
        $data["user"] = $this->M->getTable();
        $this->template->load('admin/template', 'admin/departemen', $data);
    }

    function inventory()
    {
        $data["user"] = $this->mi->getTable();
        $this->template->load('admin/template', 'admin/inventory', $data);
    }

    function laporan_tiket()
    {
        $data["tiket"] = $this->ml->getTable();
        $this->template->load('admin/template', 'admin/laporan_tiket', $data);
    }


    function edit_pengguna()
    {
        $this->template->load('admin/template', 'admin/edit_pengguna');
    }

    function tambah_inventory()
    {
        $this->template->load('admin/template', 'admin/tambah_inventory');
    }
}
