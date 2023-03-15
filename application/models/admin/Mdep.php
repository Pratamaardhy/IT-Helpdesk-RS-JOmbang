<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdep extends CI_Model
{
	public function getAll()
	{
		$DELETED_AT = null;
		$options = array('DELETED_AT' => $DELETED_AT);
		return $this->db->get_where('departemen', $options)->result();
	}
	public function getAll1()
	{
		return $this->db->get('level')->result();
	}
}
	

