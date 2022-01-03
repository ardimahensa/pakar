<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vargejala extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_vargejala');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'vargejala/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'vargejala/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'vargejala/index.html';
            $config['first_url'] = base_url() . 'vargejala/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_vargejala->total_rows($q);
        $vargejala = $this->M_vargejala->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'vargejala_data' => $vargejala,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'vargejala/vargejala_list',
            'judul' => 'Variabel Linguistik Gejala',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->M_vargejala->get_by_id($id);
        if ($row) {
            $data = array(
		'id_vargejala' => $row->id_vargejala,
		'kd_vargejala' => $row->kd_vargejala,
		'vargejala' => $row->vargejala,
		'kd_gejala' => $row->kd_gejala,
	    );
            $this->load->view('vargejala/vargejala_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('vargejala'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('vargejala/create_action'),
	    'id_vargejala' => set_value('id_vargejala'),
	    'kd_vargejala' => set_value('kd_vargejala'),
	    'vargejala' => set_value('vargejala'),
	    'kd_gejala' => set_value('kd_gejala'),
        'konten' => 'vargejala/vargejala_form',
            'judul' => 'Variabel Linguistik Gejala',
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kd_vargejala' => $this->input->post('kd_vargejala',TRUE),
		'vargejala' => $this->input->post('vargejala',TRUE),
		'kd_gejala' => $this->input->post('kd_gejala',TRUE),
	    );

            $this->M_vargejala->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('vargejala'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_vargejala->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('vargejala/update_action'),
		'id_vargejala' => set_value('id_vargejala', $row->id_vargejala),
		'kd_vargejala' => set_value('kd_vargejala', $row->kd_vargejala),
		'vargejala' => set_value('vargejala', $row->vargejala),
		'kd_gejala' => set_value('kd_gejala', $row->kd_gejala),
        'konten' => 'vargejala/vargejala_form',
            'judul' => 'Variabel Linguistik Gejala',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('vargejala'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_vargejala', TRUE));
        } else {
            $data = array(
		'kd_vargejala' => $this->input->post('kd_vargejala',TRUE),
		'vargejala' => $this->input->post('vargejala',TRUE),
		'kd_gejala' => $this->input->post('kd_gejala',TRUE),
	    );

            $this->M_vargejala->update($this->input->post('id_vargejala', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('vargejala'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_vargejala->get_by_id($id);

        if ($row) {
            $this->M_vargejala->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('vargejala'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('vargejala'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kd_vargejala', 'kd vargejala', 'trim|required');
	$this->form_validation->set_rules('vargejala', 'vargejala', 'trim|required');
	$this->form_validation->set_rules('kd_gejala', 'kd gejala', 'trim|required');

	$this->form_validation->set_rules('id_vargejala', 'id_vargejala', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Vargejala.php */
/* Location: ./application/controllers/Vargejala.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-28 10:21:07 */
/* http://harviacode.com */