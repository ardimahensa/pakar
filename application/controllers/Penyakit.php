<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penyakit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_penyakit');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'penyakit/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'penyakit/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'penyakit/index.html';
            $config['first_url'] = base_url() . 'penyakit/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_penyakit->total_rows($q);
        $penyakit = $this->M_penyakit->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'penyakit_data' => $penyakit,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'penyakit/penyakit_list',
            'judul' => 'Data Penyakit',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->M_penyakit->get_by_id($id);
        if ($row) {
            $data = array(
		'id_penyakit' => $row->id_penyakit,
		'kd_penyakit' => $row->kd_penyakit,
		'penyakit' => $row->penyakit,
		'gambar' => $row->gambar,
		'solusi' => $row->solusi,
		'g1' => $row->g1,
		'g2' => $row->g2,
		'g3' => $row->g3,
		'g4' => $row->g4,
		'g5' => $row->g5,
		'c1' => $row->c1,
		'c2' => $row->c2,
		'c3' => $row->c3,
		'c4' => $row->c4,
		'c5' => $row->c5,
		'konten' => 'penyakit/penyakit_read',
            'judul' => 'Detail Penyakit',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penyakit'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('penyakit/create_action'),
	    'id_penyakit' => set_value('id_penyakit'),
	    'kd_penyakit' => set_value('kd_penyakit'),
	    'penyakit' => set_value('penyakit'),
	    'gambar' => set_value('gambar'),
	    'solusi' => set_value('solusi'),
	    'g1' => set_value('g1'),
	    'g2' => set_value('g2'),
	    'g3' => set_value('g3'),
	    'g4' => set_value('g4'),
	    'g5' => set_value('g5'),
	    'c1' => set_value('c1'),
	    'c2' => set_value('c2'),
	    'c3' => set_value('c3'),
	    'c4' => set_value('c4'),
	    'c5' => set_value('c5'),
	    'konten' => 'penyakit/penyakit_form',
            'judul' => 'Data Penyakit',
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

        	// setting konfigurasi upload
            $nmfile = "penyakit_".time();
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = $nmfile;
            // load library upload
            $this->load->library('upload', $config);
            // upload gambar 1
            $this->upload->do_upload('gambar');
            $result1 = $this->upload->data();
            $result = array('gambar'=>$result1);

            $data = array(
		'kd_penyakit' => $this->input->post('kd_penyakit',TRUE),
		'penyakit' => $this->input->post('penyakit',TRUE),
		'gambar' => $result['gambar']['file_name'],
		'solusi' => $this->input->post('solusi',TRUE),
		'g1' => $this->input->post('g1',TRUE),
		'g2' => $this->input->post('g2',TRUE),
		'g3' => $this->input->post('g3',TRUE),
		'g4' => $this->input->post('g4',TRUE),
		'g5' => $this->input->post('g5',TRUE),
		'c1' => $this->input->post('c1',TRUE),
		'c2' => $this->input->post('c2',TRUE),
		'c3' => $this->input->post('c3',TRUE),
		'c4' => $this->input->post('c4',TRUE),
		'c5' => $this->input->post('c5',TRUE),
	    );

            $this->M_penyakit->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('penyakit'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_penyakit->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('penyakit/update_action'),
		'id_penyakit' => set_value('id_penyakit', $row->id_penyakit),
		'kd_penyakit' => set_value('kd_penyakit', $row->kd_penyakit),
		'penyakit' => set_value('penyakit', $row->penyakit),
		'gambar' => set_value('gambar', $row->gambar),
		'solusi' => set_value('solusi', $row->solusi),
		'g1' => set_value('g1', $row->g1),
		'g2' => set_value('g2', $row->g2),
		'g3' => set_value('g3', $row->g3),
		'g4' => set_value('g4', $row->g4),
		'g5' => set_value('g5', $row->g5),
		'c1' => set_value('c1', $row->c1),
		'c2' => set_value('c2', $row->c2),
		'c3' => set_value('c3', $row->c3),
		'c4' => set_value('c4', $row->c4),
		'c5' => set_value('c5', $row->c5),
		'konten' => 'penyakit/penyakit_form',
            'judul' => 'Data Penyakit',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penyakit'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_penyakit', TRUE));
        } else {

        	// setting konfigurasi upload
            $nmfile = "penyakit_".time();
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = $nmfile;
            // load library upload
            $this->load->library('upload', $config);
            // upload gambar 1
            $this->upload->do_upload('gambar');
            $result1 = $this->upload->data();
            $result = array('gambar'=>$result1);

            $data = array(
		'kd_penyakit' => $this->input->post('kd_penyakit',TRUE),
		'penyakit' => $this->input->post('penyakit',TRUE),
		'gambar' => $result['gambar']['file_name'],
		'solusi' => $this->input->post('solusi',TRUE),
		'g1' => $this->input->post('g1',TRUE),
		'g2' => $this->input->post('g2',TRUE),
		'g3' => $this->input->post('g3',TRUE),
		'g4' => $this->input->post('g4',TRUE),
		'g5' => $this->input->post('g5',TRUE),
		'c1' => $this->input->post('c1',TRUE),
		'c2' => $this->input->post('c2',TRUE),
		'c3' => $this->input->post('c3',TRUE),
		'c4' => $this->input->post('c4',TRUE),
		'c5' => $this->input->post('c5',TRUE),
	    );

            $this->M_penyakit->update($this->input->post('id_penyakit', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('penyakit'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_penyakit->get_by_id($id);

        if ($row) {
            $this->M_penyakit->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('penyakit'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penyakit'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kd_penyakit', 'kd penyakit', 'trim|required');
	$this->form_validation->set_rules('penyakit', 'penyakit', 'trim|required');
	$this->form_validation->set_rules('g1', 'g1', 'trim|required');
	$this->form_validation->set_rules('g2', 'g2', 'trim|required');
	$this->form_validation->set_rules('g3', 'g3', 'trim|required');
	$this->form_validation->set_rules('g4', 'g4', 'trim|required');
	$this->form_validation->set_rules('g5', 'g5', 'trim|required');
	$this->form_validation->set_rules('c1', 'c1', 'trim|required');
	$this->form_validation->set_rules('c2', 'c2', 'trim|required');
	$this->form_validation->set_rules('c3', 'c3', 'trim|required');
	$this->form_validation->set_rules('c4', 'c4', 'trim|required');
	$this->form_validation->set_rules('c5', 'c5', 'trim|required');

	$this->form_validation->set_rules('id_penyakit', 'id_penyakit', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Penyakit.php */
/* Location: ./application/controllers/Penyakit.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-28 10:22:06 */
/* http://harviacode.com */