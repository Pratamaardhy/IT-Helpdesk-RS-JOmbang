<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdash extends CI_Model
{
    public function get_count()
    {
        $sql = "SELECT count(ID_TIKET) as id_tiket FROM tiket";
        $result = $this->db->query($sql);
        return $result->row()->id_tiket;
    }
    public function get_diajukan()
    {
        $sql = "SELECT count(STATUS_TIKET) as status_tiket FROM tiket where status_tiket = 1 ";
        $result = $this->db->query($sql);
        return $result->row()->status_tiket;
    }
    public function get_dalamproses()
    {
        $sql = "SELECT count(STATUS_TIKET) as status_tiket FROM tiket where status_tiket = 2 OR status_tiket = 3 OR status_tiket = 5 OR status_tiket = 6 ";
        $result = $this->db->query($sql);
        return $result->row()->status_tiket;
    }
    public function get_selesai()
    {
        $sql = "SELECT count(STATUS_TIKET) as status_tiket FROM tiket where status_tiket = 4 OR status_tiket = 7 ";
        $result = $this->db->query($sql);
        return $result->row()->status_tiket;
    }
    public function tiket_diajukan()
    {
        $this->db->select('t.*, u.nama_user AS nama_user, d.NAMA_DEPARTEMEN AS NAMA_DEPARTEMEN, s.STATUS_TIKET AS status');
        $this->db->from('tiket t');
        $this->db->join('user u', 'u.ID_USER=t.ID_USER');
        $this->db->join('inventory i', 'i.ID_INVENTORY =t.ID_INVENTORY');
        $this->db->join('departemen d', 'd.ID_DEPARTEMEN  =i.ID_DEPARTEMEN ');
        $this->db->join('status_tiket s', 's.ID_STATUS  = t.STATUS_TIKET ');
        // // $this->db->where('t.ID_TIKET', 30052008190);
        $this->db->where('t.STATUS_TIKET = 1 OR t.STATUS_TIKET = 6');
        $this->db->order_by('t.TANGGAL', 'DESC');
        $this->db->limit(3);

        return $this->db->get()->result();
    }
    public function tiket_selesai()
    {

        $this->db->select('t.*, u.nama_user AS nama_user, d.NAMA_DEPARTEMEN AS NAMA_DEPARTEMEN');
        $this->db->from('tiket t');
        $this->db->join('user u', 'u.ID_USER=t.ID_USER');
        $this->db->join('inventory i', 'i.ID_INVENTORY =t.ID_INVENTORY');
        $this->db->join('departemen d', 'd.ID_DEPARTEMEN  =i.ID_DEPARTEMEN ');
        // // $this->db->where('t.ID_TIKET', 30052008190);
        $this->db->where('t.STATUS_TIKET = 4 OR t.STATUS_TIKET = 7');
        $this->db->order_by('t.TANGGAL', 'DESC');
        $this->db->limit(3);



        return $this->db->get()->result();
    }
    public function get_tiket_detail()
    {
        return $this->db->get('tiket_detail')->result();
    }
    public function get_chart_teknisi()
    {
        $this->db->select('COUNT(*) as total, u.nama_user AS nama_teknisi,t.TEKNISI AS ID_TEKNISI');
        $this->db->from('tiket t');
        $this->db->join('user u', 'u.ID_USER=t.TEKNISI');
        $this->db->where('t.STATUS_TIKET = 7');

        $this->db->group_by('t.TEKNISI');

        return $this->db->get()->result();
    }
    public function dataperbaikan()
    {
        $this->db->select('COUNT(*) as total,MONTH(td.TANGGAL) AS bulan,YEAR(td.TANGGAL) AS tahun, td.TANGGAL as date');
        $this->db->from('tiket_detail td');
        $this->db->where('YEAR(td.TANGGAL) = 2022');
        $this->db->where('td.ID_STATUS = 7');

        $this->db->group_by('MONTH(tanggal)');

        return $this->db->get()->result();
    }
}
