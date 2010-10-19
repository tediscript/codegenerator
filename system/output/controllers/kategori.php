<?php

class Kategori extends Controller {

    function Kategori() {
        parent::Controller();
    }

    function index() {
        $this->load->model('Kategori_model');
        $data['kategori'] = $this->Kategori_model->find();
        $this->load->view('kategori', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
        $this->form_validation->set_rules('nama', 'Nama', '');
        $this->form_validation->set_rules('parent_id', 'Parent Id', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kategori_add');
        } else {
            $kategori['kategori_id'] = $this->input->post('kategori_id');
            $kategori['nama'] = $this->input->post('nama');
            $kategori['parent_id'] = $this->input->post('parent_id');
            $this->load->model('Kategori_model');
            $this->Kategori_model->save($kategori);
            redirect('kategori');
        }
    }

    function delete($id) {
        if ($id) {
            $kategori_query['kategori_id'] = $id;
            $this->load->model('Kategori_model');
            $this->Kategori_model->delete($kategori_query);
        } else {
            redirect('kategori');
        }
    }

    function edit($id) {
        if ($id) {
            $kategori_query['kategori_id'] = $id;
            $this->load->model('Kategori_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
            $this->form_validation->set_rules('nama', 'Nama', '');
            $this->form_validation->set_rules('parent_id', 'Parent Id', '');
            if ($this->form_validation->run() == FALSE) {
                $data['kategori'] = $this->Kategori_model->find_one($kategori_query);
                $this->load->view('kategori_edit', $data);
            } else {
                $kategori['kategori_id'] = $this->input->post('kategori_id');
                $kategori['nama'] = $this->input->post('nama');
                $kategori['parent_id'] = $this->input->post('parent_id');
                $this->Kategori_model->update($kategori_query, $kategori);
                redirect('kategori');
            }
        } else {
            redirect('kategori');
        }
    }

}
