<?php

class Kontak_kategori extends Controller {

    function Kontak_kategori() {
        parent::Controller();
    }

    function index() {
        $this->load->model('Kontak_kategori_model');
        $data['kontak_kategori'] = $this->Kontak_kategori_model->find();
        $this->load->view('kontak_kategori', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kontak_kategori_id', 'Kontak Kategori Id', '');
        $this->form_validation->set_rules('kontak_id', 'Kontak Id', '');
        $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kontak_kategori_add');
        } else {
            $kontak_kategori['kontak_kategori_id'] = $this->input->post('kontak_kategori_id');
            $kontak_kategori['kontak_id'] = $this->input->post('kontak_id');
            $kontak_kategori['kategori_id'] = $this->input->post('kategori_id');
            $this->load->model('Kontak_kategori_model');
            $this->Kontak_kategori_model->save($kontak_kategori);
            redirect('kontak_kategori');
        }
    }

    function delete($id) {
        if ($id) {
            $kontak_kategori_query['kontak_kategori_id'] = $id;
            $this->load->model('Kontak_kategori_model');
            $this->Kategori_model->delete($kontak_kategori_query);
        } else {
            redirect('kontak_kategori');
        }
    }

    function edit($id) {
        if ($id) {
            $kontak_kategori_query['kontak_kategori_id'] = $id;
            $this->load->model('Kontak_kategori_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('kontak_kategori_id', 'Kontak Kategori Id', '');
            $this->form_validation->set_rules('kontak_id', 'Kontak Id', '');
            $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
            if ($this->form_validation->run() == FALSE) {
                $data['kontak_kategori'] = $this->Kontak_kategori_model->find_one($kontak_kategori_query);
                $this->load->view('kontak_kategori_edit', $data);
            } else {
                $kontak_kategori['kontak_kategori_id'] = $this->input->post('kontak_kategori_id');
                $kontak_kategori['kontak_id'] = $this->input->post('kontak_id');
                $kontak_kategori['kategori_id'] = $this->input->post('kategori_id');
                $this->Kontak_kategori_model->update($kontak_kategori_query, $kontak_kategori);
                redirect('kontak_kategori');
            }
        } else {
            redirect('kontak_kategori');
        }
    }

}
