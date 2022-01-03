<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Varciri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_varciri');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'varciri/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'varciri/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'varciri/index.html';
            $config['first_url'] = base_url() . 'varciri/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_varciri->total_rows($q);
        $varciri = $this->M_varciri->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'varciri_data' => $varciri,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'varciri/varciri_list',
            'judul' => 'Variabel Linguistik Ciri',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->M_varciri->get_by_id($id);
        if ($row) {
            $data = array(
		'id_varciri' => $row->id_varciri,
		'kd_varciri' => $row->kd_varciri,
		'varciri' => $row->varciri,
		'kd_ciri' => $row->kd_ciri,
	    );
            $this->load->view('varciri/varciri_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('varciri'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('varciri/create_action'),
	    'id_varciri' => set_value('id_varciri'),
	    'kd_varciri' => set_value('kd_varciri'),
	    'varciri' => set_value('varciri'),
	    'kd_ciri' => set_value('kd_ciri'),
        'konten' => 'varciri/varciri_form',
            'judul' => 'Variabel Linguistik Ciri',
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
		'kd_varciri' => $this->input->post('kd_varciri',TRUE),
		'varciri' => $this->input->post('varciri',TRUE),
		'kd_ciri' => $this->input->post('kd_ciri',TRUE),
	    );

            $this->M_varciri->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('varciri'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_varciri->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('varciri/update_action'),
		'id_varciri' => set_value('id_varciri', $row->id_varciri),
		'kd_varciri' => set_value('kd_varciri', $row->kd_varciri),
		'varciri' => set_value('varciri', $row->varciri),
		'kd_ciri' => set_value('kd_ciri', $row->kd_ciri),
        'konten' => 'varciri/varciri_form',
            'judul' => 'Variabel Linguistik Ciri',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('varciri'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_varciri', TRUE));
        } else {
            $data = array(
		'kd_varciri' => $this->input->post('kd_varciri',TRUE),
		'varciri' => $this->input->post('varciri',TRUE),
		'kd_ciri' => $this->input->post('kd_ciri',TRUE),
	    );

            $this->M_varciri->update($this->input->post('id_varciri', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('varciri'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_varciri->get_by_id($id);

        if ($row) {
            $this->M_varciri->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('varciri'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('varciri'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kd_varciri', 'kd varciri', 'trim|required');
	$this->form_validation->set_rules('varciri', 'varciri', 'trim|required');
	$this->form_validation->set_rules('kd_ciri', 'kd ciri', 'trim|required');

	$this->form_validation->set_rules('id_varciri', 'id_varciri', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Varciri.php */
/* Location: ./application/controllers/Varciri.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-09-28 10:21:50 */
/* http://harviacode.com */