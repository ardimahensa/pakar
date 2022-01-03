<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	
	public function index()
	{
		if ($this->session->userdata('id_user') == "") {
            redirect('app/login');
        } 
		$data = array(
			'konten' => 'home',
            'judul' => 'Apa Itu Kecanduan Game Online ?',
		);
		$this->load->view('v_index', $data);
	}

	public function history()
	{
		if ($this->session->userdata('id_user') == "") {
            redirect('app/login');
        } 
		$data = array(
			'konten' => 'history',
            'judul' => 'History Diagnosa',
		);
		$this->load->view('v_index', $data);
	}

	public function registrasi()
	{

		$this->load->view('reg_user');
	}

	public function login()
	{

		if ($this->input->post() == NULL) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek_user = $this->db->query("SELECT * FROM user WHERE username='$username' and password='$password' and level='user' ");
			$cek_admin = $this->db->query("SELECT * FROM user WHERE username='$username' and password='$password' and level='admin' ");
			if ($cek_user->num_rows() == 1) {
				foreach ($cek_user->result() as $row) {
					$sess_data['id_user'] = $row->id_user;
					$sess_data['nama'] = $row->nama;
					$sess_data['username'] = $row->username;
					$sess_data['level'] = $row->level;
					$this->session->set_userdata($sess_data);
				}
				redirect('app');
			}elseif ($cek_admin->num_rows() == 1) {
				foreach ($cek_admin->result() as $row) {
					$sess_data['id_user'] = $row->id_user;
					$sess_data['nama'] = $row->nama;
					$sess_data['username'] = $row->username;
					$sess_data['level'] = $row->level;
					$this->session->set_userdata($sess_data);
				}
				redirect('app');
			} else {
				?>
				<script type="text/javascript">
					alert('Username dan password kamu salah !');
					window.location="<?php echo base_url('app/login'); ?>";
				</script>
				<?php
			}

		}
	}

	function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('app/login');
	}

	public function simpan_reg()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'level' => 'user',
		);

		$this->db->insert('user', $data);
		?>
		<script type="text/javascript">
			alert('Pendaftaran Berhasil, Silahkan Login');
			window.location = '<?php echo base_url('app/login'); ?>'
		</script>
		<?php
	}

	public function konsultasi()
	{
		if ($this->session->userdata('id_user') == "") {
            redirect('app/login');
        } 
		$data = array(
			'konten' => 'konsultasi',
			'judul' => 'Silahkan Konsultasi',

			);
		$this->load->view('v_index', $data);
	}

	public function cek_penyakit()
	{

		$G1 = $this->input->post('G1');
		$G2 = $this->input->post('G2');
		$G3 = $this->input->post('G3');
		$G4 = $this->input->post('G4');
		$G5 = $this->input->post('G5');
		$C1 = $this->input->post('C1');
		$C2 = $this->input->post('C2');
		$C3 = $this->input->post('C3');
		$C4 = $this->input->post('C4');
		$C5 = $this->input->post('C5');

		$this->db->where('g1', $G1);
		$this->db->where('g2', $G2);
		$this->db->where('g3', $G3);
		$this->db->where('g4', $G4);
		$this->db->where('g5', $G5);
		$this->db->where('c1', $C1);
		$this->db->where('c2', $C2);
		$this->db->where('c3', $C3);
		$this->db->where('c4', $C4);
		$this->db->where('c5', $C5);
		$data = $this->db->get('penyakit');
		if ($data->num_rows() > 0) {
			$row = $data->row();
			$penyakit = ''.$row->penyakit;
			$d = array(
				'nama' => $this->session->userdata('nama'),
				'penyakit' => $penyakit,
			);
			$this->db->insert('history', $d);
			echo json_encode(array('status' => '1','pesan' => $penyakit,'gambar' => $row->gambar, 'solusi' => $row->solusi));
		} else {
			echo json_encode(array('status' => '0','pesan' => 'Data di Admin Gak ada, Jadi Mungkin Bisa Aja Anda Kecanduan Game Online / Bisa juga Tidak'));
		}
	}


}
