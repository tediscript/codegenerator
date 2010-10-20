<?php

class Siswa extends Controller {

    function Siswa() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Siswa_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/siswa/index/';
        $config['total_rows'] = $this->Siswa_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['siswa'] = $this->Siswa_model->find(array(), $limit, $offset);
        $this->load->view('siswa', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('siswa_id', 'Siswa Id', '');
        $this->form_validation->set_rules('nis', 'Nis', '');
        $this->form_validation->set_rules('nama', 'Nama', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('siswa_add');
        } else {
            $siswa['siswa_id'] = $this->input->post('siswa_id');
            $siswa['nis'] = $this->input->post('nis');
            $siswa['nama'] = $this->input->post('nama');
            $this->load->model('Siswa_model');
            $this->Siswa_model->save($siswa);
            redirect('siswa');
        }
    }

    function delete($id) {
        if ($id) {
            $siswa_query['siswa_id'] = $id;
            $this->load->model('Siswa_model');
            $this->Kategori_model->delete($siswa_query);
        } else {
            redirect('siswa');
        }
    }

    function edit($id) {
        if ($id) {
            $siswa_query['siswa_id'] = $id;
            $this->load->model('Siswa_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('siswa_id', 'Siswa Id', '');
            $this->form_validation->set_rules('nis', 'Nis', '');
            $this->form_validation->set_rules('nama', 'Nama', '');
            if ($this->form_validation->run() == FALSE) {
                $data['siswa'] = $this->Siswa_model->find_one($siswa_query);
                $this->load->view('siswa_edit', $data);
            } else {
                $siswa['siswa_id'] = $this->input->post('siswa_id');
                $siswa['nis'] = $this->input->post('nis');
                $siswa['nama'] = $this->input->post('nama');
                $this->Siswa_model->update($siswa_query, $siswa);
                redirect('siswa');
            }
        } else {
            redirect('siswa');
        }
    }

}
