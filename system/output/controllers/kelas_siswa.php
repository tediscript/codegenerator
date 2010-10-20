<?php

class Kelas_siswa extends Controller {

    function Kelas_siswa() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Kelas_siswa_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/kelas_siswa/index/';
        $config['total_rows'] = $this->Kelas_siswa_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['kelas_siswa'] = $this->Kelas_siswa_model->find(array(), $limit, $offset);
        $this->load->view('kelas_siswa', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kelas_siswa_id', 'Kelas Siswa Id', '');
        $this->form_validation->set_rules('kelas_id', 'Kelas Id', '');
        $this->form_validation->set_rules('siswa_id', 'Siswa Id', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kelas_siswa_add');
        } else {
            $kelas_siswa['kelas_siswa_id'] = $this->input->post('kelas_siswa_id');
            $kelas_siswa['kelas_id'] = $this->input->post('kelas_id');
            $kelas_siswa['siswa_id'] = $this->input->post('siswa_id');
            $this->load->model('Kelas_siswa_model');
            $this->Kelas_siswa_model->save($kelas_siswa);
            redirect('kelas_siswa');
        }
    }

    function delete($id) {
        if ($id) {
            $kelas_siswa_query['kelas_siswa_id'] = $id;
            $this->load->model('Kelas_siswa_model');
            $this->Kategori_model->delete($kelas_siswa_query);
        } else {
            redirect('kelas_siswa');
        }
    }

    function edit($id) {
        if ($id) {
            $kelas_siswa_query['kelas_siswa_id'] = $id;
            $this->load->model('Kelas_siswa_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('kelas_siswa_id', 'Kelas Siswa Id', '');
            $this->form_validation->set_rules('kelas_id', 'Kelas Id', '');
            $this->form_validation->set_rules('siswa_id', 'Siswa Id', '');
            if ($this->form_validation->run() == FALSE) {
                $data['kelas_siswa'] = $this->Kelas_siswa_model->find_one($kelas_siswa_query);
                $this->load->view('kelas_siswa_edit', $data);
            } else {
                $kelas_siswa['kelas_siswa_id'] = $this->input->post('kelas_siswa_id');
                $kelas_siswa['kelas_id'] = $this->input->post('kelas_id');
                $kelas_siswa['siswa_id'] = $this->input->post('siswa_id');
                $this->Kelas_siswa_model->update($kelas_siswa_query, $kelas_siswa);
                redirect('kelas_siswa');
            }
        } else {
            redirect('kelas_siswa');
        }
    }

}
