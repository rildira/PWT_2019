<?php 
 
class Semnas_model extends CI_Model{
	function tampil_data(){
		return $this->db->get('peserta_semnas');
	}
	
	function input_data($id_pendaftaran,$nama,$mail,$identitas,$no_identitas,$jenis_kelamin,$asal,$pendidikan,$nama_instansi,$image_name){
		$data = array(
			'id_pendaftaran' =>$id_pendaftaran,
			'nama' => $nama,
			'mail' => $mail,
			'identitas' => $identitas,
			'no_identitas' => $no_identitas,
			'jenis_kelamin' => $jenis_kelamin,
			'asal' => $asal,
			'pendidikan' => $pendidikan,
			'nama_instansi' => $nama_instansi, 
			'qrcode' 	=> $image_name
		);
		$this->db->insert('peserta_semnas',$data);
	}
}