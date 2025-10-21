<?php
defined('BASEPATH') or exit('No direct script access allowed');

class spt_detil_penerangan_jalan_model extends CI_Model
{

	private $spt_detil_penerangan_jalan_id, $spt_id, $spt_detil_id, $kapasitas_daya, $koefisien_daya, $waktu_pemakaian, $tarif_dasar,
		$nilai_terkena_pajak, $persen_tarif, $pajak;

	const pkey = "spt_detil_penerangan_jalan_id";
	const tbl_name = "spt_detil_penerangan_jalan";

	function get_pkey()
	{
		return self::pkey;
	}

	function get_tbl_name()
	{
		return self::tbl_name;
	}

	function __construct(array $init_properties = array())
	{

		if (count($init_properties) > 0) {
			foreach ($init_properties as $key => $val) {
				$this->$key = $val;
			}
		}
	}

	function get_spt_detil_penerangan_jalan_id()
	{
		return $this->spt_detil_penerangan_jalan_id;
	}

	function get_spt_id()
	{
		return $this->spt_id;
	}

	function get_spt_detil_id()
	{
		return $this->spt_detil_id;
	}

	function get_kapasitas_daya()
	{
		return $this->kapasitas_daya;
	}

	function get_koefisien_daya()
	{
		return $this->koefisien_daya;
	}

	function get_waktu_pemakaian()
	{
		return $this->waktu_pemakaian;
	}

	function get_tarif_dasar()
	{
		return $this->tarif_dasar;
	}

	function get_nilai_terkena_pajak()
	{
		return $this->nilai_terkena_pajak;
	}

	function get_persen_tarif()
	{
		return $this->persen_tarif;
	}

	function get_pajak()
	{
		return $this->pajak;
	}




	function set_spt_detil_penerangan_jalan_id($data)
	{
		$this->spt_detil_penerangan_jalan_id = $data;
	}

	function set_spt_id($data)
	{
		$this->spt_id = $data;
	}

	function set_spt_detil_id($data)
	{
		$this->spt_detil_id = $data;
	}

	function set_kapasitas_daya($data)
	{
		$this->kapasitas_daya = $data;
	}

	function set_koefisien_daya($data)
	{
		$this->koefisien_daya = $data;
	}

	function set_waktu_pemakaian($data)
	{
		$this->waktu_pemakaian = $data;
	}

	function set_tarif_dasar($data)
	{
		$this->tarif_dasar = $data;
	}

	function set_nilai_terkena_pajak($data)
	{
		$this->nilai_terkena_pajak = $data;
	}

	function set_persen_tarif($data)
	{
		$this->persen_tarif = $data;
	}

	function set_pajak($data)
	{
		$this->pajak = $data;
	}

	function get_field_list()
	{
		return get_object_vars($this);
	}

	function get_property_collection()
	{
		$field_list = get_object_vars($this);

		$collections = array();
		foreach ($field_list as $key => $val) {
			if ($val != '')
				$collections[$key] = $val;
		}

		return $collections;
	}

	function get_all_data()
	{
		$query = $this->db->query("SELECT * FROM " . $this->get_tbl_name() . " ORDER BY " . $this->get_pkey() . " ASC");
		return $query->result_array();
	}
}
