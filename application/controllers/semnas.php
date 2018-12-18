<?php 
 
class Semnas extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('semnas_model');
	}
 
	function index(){
		$data = array(
			'title' => 'SEMNAS 2019'
		);
		$this->load->view('v_semnas',$data);
	}

	function data(){
		$data['peserta_semnas'] = $this->semnas_model->tampil_data()->result();
		$this->load->view('data_semnas',$data);
	}

	function pendaftaran(){
		$data = array(
			'title' => 'SEMNAS 2019'
		);
		$this->load->view('tambah_semnas',$data);
	}
 
	function pendaftaran_aksi(){
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE

		$id_pendaftaran = 'A-'.random_string('numeric', 4);
		$nama = $this->input->post('nama');
		$mail = $this->input->post('mail');
		$identitas = $this->input->post('identitas');
		$no_identitas = $this->input->post('no_identitas');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$asal = $this->input->post('asal');
		$pendidikan = $this->input->post('pendidikan');
		$nama_instansi = $this->input->post('nama_instansi');
 
		$data = array(
			'id_pendaftaran' =>$id_pendaftaran,
			'nama' => $nama,
			'mail' => $mail,
			'identitas' => $identitas,
			'no_identitas' => $no_identitas,
			'jenis_kelamin' => $jenis_kelamin,
			'asal' => $asal,
			'pendidikan' => $pendidikan,
			'nama_instansi' => $nama_instansi
			);

		$config['cacheable']	= true; //boolean, the default is true
		$config['cachedir']		= './assets/'; //string, the default is application/cache/
		$config['errorlog']		= './assets/'; //string, the default is application/logs/
		$config['imagedir']		= './assets/images/'; //direktori penyimpanan qr code
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		$image_name=$id_pendaftaran.'.png'; //buat name dari qr code sesuai dengan nim

		$params['data'] = $id_pendaftaran; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

		$config = Array(  
	    'protocol' => 'smtp',  
	    'smtp_host' => 'ssl://smtp.googlemail.com',  
	    'smtp_port' => 465,  
	    'smtp_user' => 'richiilham21@gmail.com',   
	    'smtp_pass' => 'FakeSaitama',   
	    'mailtype' => 'html',   
	    'crlf'     => '\r\n',
    	'newline'  => '\r\n', 
	    'charset' => 'utf-8',  
	    'wordwrap' => TRUE
	   );  
		$this->email->initialize($config);
		$this->semnas_model->input_data($id_pendaftaran,$nama,$mail,$identitas,$no_identitas,$jenis_kelamin,$asal,$pendidikan,$nama_instansi,$image_name);

		$this->load->library('email', $config);  
	   	$this->email->set_newline("\r\n");  
	   	$this->email->from('richiilham21@gmail.com', 'PWT SEMNAS 2019');   
	   	$this->email->to($mail);   
	   	// $this->email->attach('./assets/images/'.$id_pendaftaran.'.png');
	   	$this->email->subject('Pemberitahuan Kelanjutan Registrasi');   
	   	$this->email->message("Selamat ".$nama.", anda berhasil mendaftar menjadi peserta PWT SEMNAS 2019.<br>Untuk membayar silahkan transfer ke no. rek : xxxx-xxxx-xxxx-xxxx an : admin.<br>
	   		Klik link ini untuk verifikasi pembayaran : http://www.google.co.id<br>
	   		Gunakan kode ".random_string('alnum',5)." pada form verifikasi pembayaran yang tersedia.");  
	   	// $this->email->message($m);
	   	if (!$this->email->send()) 
	   	{  
	    show_error($this->email->print_debugger());   
	   	}
	   	else
	   	{  
	    redirect('semnas/index');  
	   	}  
	}
}