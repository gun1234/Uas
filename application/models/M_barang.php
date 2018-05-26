<?php
class M_barang extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT * FROM tbl_barang");
		return $hasil->result();
	}

	function simpan_barang($kobar,$nabar,$harga){
		$hasil=$this->db->query("INSERT INTO tbl_barang (kode_onderdil,nama_onderdil,harga_onderdil)VALUES('$kobar','$nabar','$harga')");
		return $hasil;
	}

	function get_barang_by_kode($kobar){
		$hsl=$this->db->query("SELECT * FROM tbl_barang WHERE kode_onderdil='$kobar'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'kode_onderdil' => $data->kode_onderdil,
					'nama_onderdil' => $data->nama_onderdil,
					'harga_onderdil' => $data->harga_onderdil,
					);
			}
		}
		return $hasil;
	}

	function update_barang($kobar,$nabar,$harga){
		$hasil=$this->db->query("UPDATE tbl_barang SET nama_onderdil='$nabar',harga_onderdil='$harga' WHERE kode_onderdil='$kobar'");
		return $hasil;
	}

	function hapus_barang($kobar){
		$hasil=$this->db->query("DELETE FROM tbl_barang WHERE kode_onderdil='$kobar'");
		return $hasil;
	}
	
}