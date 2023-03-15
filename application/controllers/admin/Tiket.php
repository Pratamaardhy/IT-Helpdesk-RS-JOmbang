<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		belum_login('admin/tiket');
		$this->load->model("admin/Mlaptiket", 'ml');
		$this->load->model('admin/Mtiket', 'mt');
		$this->load->model('admin/Mfilter', 'mf');
		$this->load->helper('files', 'fungsi');
	}
	public function index()
	{
		$data["tiket"] = $this->ml->getTable();
		$this->template->load('admin/template', 'admin/laporan_tiket', $data);
	}
	public function l_tiket_selesai()
	{
		if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Laporan Tiket Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $url_cetak = 'transaksi/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaksi = $this->mf->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Laporan Tiket Tahun '.$tahun;
                $url_cetak = 'transaksi/cetak?filter=3&tahun='.$tahun;
                $transaksi = $this->mf->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Laporan Tiket';
            $url_cetak = 'transaksi/cetak';
            $transaksi = $this->mf->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
    $data['ket'] = $ket;
    $data['url_cetak'] = base_url('index.php/'.$url_cetak);
    $data['transaksi'] = $transaksi;
        $data['option_tahun'] = $this->mf->option_tahun();
		$data["tiket"] = $this->ml->getTable_selesai();
		$this->template->load('admin/template', 'admin/laporan_tiket_selesai', $data);
	}
	public function daftar_tiket()
	{
		$data["tiket"] = $this->ml->daftar_tiket();
		$this->template->load('admin/template', 'admin/daftar_tiket', $data);
	}
	public function edit($ID_TIKET)
	{
		$data['teknisi'] = $this->mt->teknisi();
		$data['tiket'] = $this->ml->get($ID_TIKET);
		$this->template->load('admin/template', 'admin/data_tiket', $data);
	}

	public function update()
	{
		$ID_TIKET = $this->input->post('ID_TIKET');
		$TEKNISI = $this->input->post('TEKNISI');

		$data = [
			'TEKNISI' => $TEKNISI
		];

		$this->ml->update($data, $ID_TIKET);
		redirect('admin/Tiket/daftar_tiket');
	}

	public function print()
	{
		if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Laporan Tiket Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $url_cetak = 'transaksi/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaksi = $this->mf->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Laporan Tiket Tahun '.$tahun;
                $url_cetak = 'transaksi/cetak?filter=3&tahun='.$tahun;
                $transaksi = $this->mf->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Laporan Data Tiket';
            $url_cetak = 'transaksi/cetak';
            $transaksi = $this->mf->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
    $data['ket'] = $ket;
    $data['url_cetak'] = base_url('index.php/'.$url_cetak);
    $data['transaksi'] = $transaksi;
        $data['option_tahun'] = $this->mf->option_tahun();
		$data["tiket"] = $this->ml->getTable();
		$this->load->view('admin/print_tiket', $data);
	}
}
