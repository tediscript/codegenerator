<?php

class Kelas_guru extends Controller {

    function Kelas_guru() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Kelas_guru_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/kelas_guru/index/';
        $config['total_rows'] = $this->Kelas_guru_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['kelas_guru'] = $this->Kelas_guru_model->find(array(), $limit, $offset);
        $this->load->view('kelas_guru', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kelas_guru_id', 'Kelas Guru Id', '');
        $this->form_validation->set_rules('kelas_id', 'Kelas Id', '');
        $this->form_validation->set_rules('guru_id', 'Guru Id', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kelas_guru_add');
        } else {
            $kelas_guru['kelas_guru_id'] = $this->input->post('kelas_guru_id');
            $kelas_guru['kelas_id'] = $this->input->post('kelas_id');
            $kelas_guru['guru_id'] = $this->input->post('guru_id');
            $this->load->model('Kelas_guru_model');
            $this->Kelas_guru_model->save($kelas_guru);
            redirect('kelas_guru');
        }
    }

    function delete($id) {
        if ($id) {
            $kelas_guru_query['kelas_guru_id'] = $id;
            $this->load->model('Kelas_guru_model');
            $this->Kategori_model->delete($kelas_guru_query);
        } else {
            redirect('kelas_guru');
        }
    }

    function edit($id) {
        if ($id) {
            $kelas_guru_query['kelas_guru_id'] = $id;
            $this->load->model('Kelas_guru_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('kelas_guru_id', 'Kelas Guru Id', '');
            $this->form_validation->set_rules('kelas_id', 'Kelas Id', '');
            $this->form_validation->set_rules('guru_id', 'Guru Id', '');
            if ($this->form_validation->run() == FALSE) {
                $data['kelas_guru'] = $this->Kelas_guru_model->find_one($kelas_guru_query);
                $this->load->view('kelas_guru_edit', $data);
            } else {
                $kelas_guru['kelas_guru_id'] = $this->input->post('kelas_guru_id');
                $kelas_guru['kelas_id'] = $this->input->post('kelas_id');
                $kelas_guru['guru_id'] = $this->input->post('guru_id');
                $this->Kelas_guru_model->update($kelas_guru_query, $kelas_guru);
                redirect('kelas_guru');
            }
        } else {
            redirect('kelas_guru');
        }
    }

}
