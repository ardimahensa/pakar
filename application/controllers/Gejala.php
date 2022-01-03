<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_gejala');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'gejala/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'gejala/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'gejala/index.html';
            $config['first_url'] = base_url() . 'gejala/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_gejala->total_rows($q);
        $gejala = $this->M_gejala->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'gejala_data' => $gejala,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'gejala/gejala_list',
            'judul' => 'Data Gejala',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->M_gejala->get_by_id($id);
        if ($row) {
            $data = array(
		'id_gejala' => $row->id_gejala,
		'gejala' => $row->gejala,
		'kd_gejala' => $row->kd_gejala,
	    );
            $this->load->view('gejala/gejala_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('gejala'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('gejala/create_action'),
	    'id_gejala' => set_value('id_gejala'),
	    'gejala' => set_value('gejala'),
	    'kd_gejala' => set_value('kd_gejala'),
        'konten' => 'gejala/gejala_form',
            'judul' => 'Data Gejala',
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
		'gejala' => $this->input->post('gejala',TRUE),
		'kd_gejala' => $this->input->post('kd_gejala',TRUE),
	    );

            $this->M_gejala->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('gejala'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_gejala->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('gejala/update_action'),
		'id_gejala' => set_value('id_gejala', $row->id_gejala),
		'gejala' => set_value('gejala', $row->gejala),
		'kd_gejala' => set_value('kd_gejala', $row->kd_gejala),
        'konten' => 'gejala/gejala_form',
            'judul' => 'Data Gejala',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('gejala'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_gejala', TRUE));
        } else {
            $data = array(
		'gejala' => $this->input->post('gejala',TRUE),
		'kd_gejala' => $this->input->post('kd_gejala',TRUE),
	    );

            $this->M_gejala->update($this->input->post('id_gejala', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('gejala'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_gejala->get_by_id($id);

        if ($row) {
            $this->M_gejala->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('gejala'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('gejala'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('gejala', 'gejala', 'trim|required');
	$this->form_validation->set_rules('kd_gejala', 'kd gejala', 'trim|required');

	$this->form_validation->set_rules('id_gejala', 'id_gejala', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Gejala.php */
/* Location: ./application/controllers/Gejala.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-28 10:20:45 */
/* http://harviacode.com */