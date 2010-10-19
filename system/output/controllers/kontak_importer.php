<?php

class Kontak_importer extends Controller {

    function Kontak_importer() {
        parent::Controller();
    }

    function index() {
        $this->load->model('Kontak_importer_model');
        $data['kontak_importer'] = $this->Kontak_importer_model->find();
        $this->load->view('kontak_importer', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kontak_id', 'Kontak Id', '');
        $this->form_validation->set_rules('instansi', 'Instansi', '');
        $this->form_validation->set_rules('nama', 'Nama', '');
        $this->form_validation->set_rules('jabatan', 'Jabatan', '');
        $this->form_validation->set_rules('alamat', 'Alamat', '');
        $this->form_validation->set_rules('telp', 'Telp', '');
        $this->form_validation->set_rules('faks', 'Faks', '');
        $this->form_validation->set_rules('handphone', 'Handphone', '');
        $this->form_validation->set_rules('email', 'Email', '');
        $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kontak_importer_add');
        } else {
            $kontak_importer['kontak_id'] = $this->input->post('kontak_id');
            $kontak_importer['instansi'] = $this->input->post('instansi');
            $kontak_importer['nama'] = $this->input->post('nama');
            $kontak_importer['jabatan'] = $this->input->post('jabatan');
            $kontak_importer['alamat'] = $this->input->post('alamat');
            $kontak_importer['telp'] = $this->input->post('telp');
            $kontak_importer['faks'] = $this->input->post('faks');
            $kontak_importer['handphone'] = $this->input->post('handphone');
            $kontak_importer['email'] = $this->input->post('email');
            $kontak_importer['kategori_id'] = $this->input->post('kategori_id');
            $this->load->model('Kontak_importer_model');
            $this->Kontak_importer_model->save($kontak_importer);
            redirect('kontak_importer');
        }
    }

    function delete($id) {
        if ($id) {
            $kontak_importer_query['kontak_id'] = $id;
            $this->load->model('Kontak_importer_model');
            $this->Kategori_model->delete($kontak_importer_query);
        } else {
            redirect('kontak_importer');
        }
    }

    function edit($id) {
        if ($id) {
            $kontak_importer_query['kontak_id'] = $id;
            $this->load->model('Kontak_importer_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('kontak_id', 'Kontak Id', '');
            $this->form_validation->set_rules('instansi', 'Instansi', '');
            $this->form_validation->set_rules('nama', 'Nama', '');
            $this->form_validation->set_rules('jabatan', 'Jabatan', '');
            $this->form_validation->set_rules('alamat', 'Alamat', '');
            $this->form_validation->set_rules('telp', 'Telp', '');
            $this->form_validation->set_rules('faks', 'Faks', '');
            $this->form_validation->set_rules('handphone', 'Handphone', '');
            $this->form_validation->set_rules('email', 'Email', '');
            $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
            if ($this->form_validation->run() == FALSE) {
                $data['kontak_importer'] = $this->Kontak_importer_model->find_one($kontak_importer_query);
                $this->load->view('kontak_importer_edit', $data);
            } else {
                $kontak_importer['kontak_id'] = $this->input->post('kontak_id');
                $kontak_importer['instansi'] = $this->input->post('instansi');
                $kontak_importer['nama'] = $this->input->post('nama');
                $kontak_importer['jabatan'] = $this->input->post('jabatan');
                $kontak_importer['alamat'] = $this->input->post('alamat');
                $kontak_importer['telp'] = $this->input->post('telp');
                $kontak_importer['faks'] = $this->input->post('faks');
                $kontak_importer['handphone'] = $this->input->post('handphone');
                $kontak_importer['email'] = $this->input->post('email');
                $kontak_importer['kategori_id'] = $this->input->post('kategori_id');
                $this->Kontak_importer_model->update($kontak_importer_query, $kontak_importer);
                redirect('kontak_importer');
            }
        } else {
            redirect('kontak_importer');
        }
    }

}
