<?php

class Tahun_ajaran extends Controller {

    function Tahun_ajaran() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Tahun_ajaran_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/tahun_ajaran/index/';
        $config['total_rows'] = $this->Tahun_ajaran_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['tahun_ajaran'] = $this->Tahun_ajaran_model->find(array(), $limit, $offset);
        $this->load->view('tahun_ajaran', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('periode', 'Periode', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tahun_ajaran_add');
        } else {
            $tahun_ajaran['periode'] = $this->input->post('periode');
            $this->load->model('Tahun_ajaran_model');
            $this->Tahun_ajaran_model->save($tahun_ajaran);
            redirect('tahun_ajaran');
        }
    }

    function delete($id) {
        if ($id) {
            $tahun_ajaran_query['periode'] = $id;
            $this->load->model('Tahun_ajaran_model');
            $this->Kategori_model->delete($tahun_ajaran_query);
        } else {
            redirect('tahun_ajaran');
        }
    }

    function edit($id) {
        if ($id) {
            $tahun_ajaran_query['periode'] = $id;
            $this->load->model('Tahun_ajaran_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('periode', 'Periode', '');
            if ($this->form_validation->run() == FALSE) {
                $data['tahun_ajaran'] = $this->Tahun_ajaran_model->find_one($tahun_ajaran_query);
                $this->load->view('tahun_ajaran_edit', $data);
            } else {
                $tahun_ajaran['periode'] = $this->input->post('periode');
                $this->Tahun_ajaran_model->update($tahun_ajaran_query, $tahun_ajaran);
                redirect('tahun_ajaran');
            }
        } else {
            redirect('tahun_ajaran');
        }
    }

}
