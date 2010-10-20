<?php

class Kelas extends Controller {

    function Kelas() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Kelas_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/kelas/index/';
        $config['total_rows'] = $this->Kelas_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['kelas'] = $this->Kelas_model->find(array(), $limit, $offset);
        $this->load->view('kelas', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kelas_id', 'Kelas Id', '');
        $this->form_validation->set_rules('nama', 'Nama', '');
        $this->form_validation->set_rules('semester', 'Semester', '');
        $this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kelas_add');
        } else {
            $kelas['kelas_id'] = $this->input->post('kelas_id');
            $kelas['nama'] = $this->input->post('nama');
            $kelas['semester'] = $this->input->post('semester');
            $kelas['tahun_ajaran'] = $this->input->post('tahun_ajaran');
            $this->load->model('Kelas_model');
            $this->Kelas_model->save($kelas);
            redirect('kelas');
        }
    }

    function delete($id) {
        if ($id) {
            $kelas_query['kelas_id'] = $id;
            $this->load->model('Kelas_model');
            $this->Kategori_model->delete($kelas_query);
        } else {
            redirect('kelas');
        }
    }

    function edit($id) {
        if ($id) {
            $kelas_query['kelas_id'] = $id;
            $this->load->model('Kelas_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('kelas_id', 'Kelas Id', '');
            $this->form_validation->set_rules('nama', 'Nama', '');
            $this->form_validation->set_rules('semester', 'Semester', '');
            $this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', '');
            if ($this->form_validation->run() == FALSE) {
                $data['kelas'] = $this->Kelas_model->find_one($kelas_query);
                $this->load->view('kelas_edit', $data);
            } else {
                $kelas['kelas_id'] = $this->input->post('kelas_id');
                $kelas['nama'] = $this->input->post('nama');
                $kelas['semester'] = $this->input->post('semester');
                $kelas['tahun_ajaran'] = $this->input->post('tahun_ajaran');
                $this->Kelas_model->update($kelas_query, $kelas);
                redirect('kelas');
            }
        } else {
            redirect('kelas');
        }
    }

}
