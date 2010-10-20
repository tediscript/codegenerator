<?php

class Guru extends Controller {

    function Guru() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Guru_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/guru/index/';
        $config['total_rows'] = $this->Guru_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['guru'] = $this->Guru_model->find(array(), $limit, $offset);
        $this->load->view('guru', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('guru_id', 'Guru Id', '');
        $this->form_validation->set_rules('nip', 'Nip', '');
        $this->form_validation->set_rules('nama', 'Nama', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('guru_add');
        } else {
            $guru['guru_id'] = $this->input->post('guru_id');
            $guru['nip'] = $this->input->post('nip');
            $guru['nama'] = $this->input->post('nama');
            $this->load->model('Guru_model');
            $this->Guru_model->save($guru);
            redirect('guru');
        }
    }

    function delete($id) {
        if ($id) {
            $guru_query['guru_id'] = $id;
            $this->load->model('Guru_model');
            $this->Kategori_model->delete($guru_query);
        } else {
            redirect('guru');
        }
    }

    function edit($id) {
        if ($id) {
            $guru_query['guru_id'] = $id;
            $this->load->model('Guru_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('guru_id', 'Guru Id', '');
            $this->form_validation->set_rules('nip', 'Nip', '');
            $this->form_validation->set_rules('nama', 'Nama', '');
            if ($this->form_validation->run() == FALSE) {
                $data['guru'] = $this->Guru_model->find_one($guru_query);
                $this->load->view('guru_edit', $data);
            } else {
                $guru['guru_id'] = $this->input->post('guru_id');
                $guru['nip'] = $this->input->post('nip');
                $guru['nama'] = $this->input->post('nama');
                $this->Guru_model->update($guru_query, $guru);
                redirect('guru');
            }
        } else {
            redirect('guru');
        }
    }

}
