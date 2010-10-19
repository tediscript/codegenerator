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
        $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
        $this->form_validation->set_rules('nama', 'Nama', '');
        $this->form_validation->set_rules('parent_id', 'Parent Id', '');
        $this->form_validation->set_rules('kontak_id', 'Kontak Id', '');
        $this->form_validation->set_rules('instansi', 'Instansi', '');
        $this->form_validation->set_rules('gelar_depan', 'Gelar Depan', '');
        $this->form_validation->set_rules('nama', 'Nama', '');
        $this->form_validation->set_rules('gelar_belakang', 'Gelar Belakang', '');
        $this->form_validation->set_rules('jabatan', 'Jabatan', '');
        $this->form_validation->set_rules('alamat', 'Alamat', '');
        $this->form_validation->set_rules('telp', 'Telp', '');
        $this->form_validation->set_rules('faks', 'Faks', '');
        $this->form_validation->set_rules('handphone', 'Handphone', '');
        $this->form_validation->set_rules('email', 'Email', '');
        $this->form_validation->set_rules('temp', 'Temp', '');
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
        $this->form_validation->set_rules('kontak_kategori_id', 'Kontak Kategori Id', '');
        $this->form_validation->set_rules('kontak_id', 'Kontak Id', '');
        $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kontak_kategori_add');
        } else {
            $kontak_kategori['kategori_id'] = $this->input->post('kategori_id');
            $kontak_kategori['nama'] = $this->input->post('nama');
            $kontak_kategori['parent_id'] = $this->input->post('parent_id');
            $kontak_kategori['kontak_id'] = $this->input->post('kontak_id');
            $kontak_kategori['instansi'] = $this->input->post('instansi');
            $kontak_kategori['gelar_depan'] = $this->input->post('gelar_depan');
            $kontak_kategori['nama'] = $this->input->post('nama');
            $kontak_kategori['gelar_belakang'] = $this->input->post('gelar_belakang');
            $kontak_kategori['jabatan'] = $this->input->post('jabatan');
            $kontak_kategori['alamat'] = $this->input->post('alamat');
            $kontak_kategori['telp'] = $this->input->post('telp');
            $kontak_kategori['faks'] = $this->input->post('faks');
            $kontak_kategori['handphone'] = $this->input->post('handphone');
            $kontak_kategori['email'] = $this->input->post('email');
            $kontak_kategori['temp'] = $this->input->post('temp');
            $kontak_kategori['kontak_id'] = $this->input->post('kontak_id');
            $kontak_kategori['instansi'] = $this->input->post('instansi');
            $kontak_kategori['nama'] = $this->input->post('nama');
            $kontak_kategori['jabatan'] = $this->input->post('jabatan');
            $kontak_kategori['alamat'] = $this->input->post('alamat');
            $kontak_kategori['telp'] = $this->input->post('telp');
            $kontak_kategori['faks'] = $this->input->post('faks');
            $kontak_kategori['handphone'] = $this->input->post('handphone');
            $kontak_kategori['email'] = $this->input->post('email');
            $kontak_kategori['kategori_id'] = $this->input->post('kategori_id');
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
            $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
            $this->form_validation->set_rules('nama', 'Nama', '');
            $this->form_validation->set_rules('parent_id', 'Parent Id', '');
            $this->form_validation->set_rules('kontak_id', 'Kontak Id', '');
            $this->form_validation->set_rules('instansi', 'Instansi', '');
            $this->form_validation->set_rules('gelar_depan', 'Gelar Depan', '');
            $this->form_validation->set_rules('nama', 'Nama', '');
            $this->form_validation->set_rules('gelar_belakang', 'Gelar Belakang', '');
            $this->form_validation->set_rules('jabatan', 'Jabatan', '');
            $this->form_validation->set_rules('alamat', 'Alamat', '');
            $this->form_validation->set_rules('telp', 'Telp', '');
            $this->form_validation->set_rules('faks', 'Faks', '');
            $this->form_validation->set_rules('handphone', 'Handphone', '');
            $this->form_validation->set_rules('email', 'Email', '');
            $this->form_validation->set_rules('temp', 'Temp', '');
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
            $this->form_validation->set_rules('kontak_kategori_id', 'Kontak Kategori Id', '');
            $this->form_validation->set_rules('kontak_id', 'Kontak Id', '');
            $this->form_validation->set_rules('kategori_id', 'Kategori Id', '');
            if ($this->form_validation->run() == FALSE) {
                $data['kontak_kategori'] = $this->Kontak_kategori_model->find_one($kontak_kategori_query);
                $this->load->view('kontak_kategori_edit', $data);
            } else {
                $kontak_kategori['kategori_id'] = $this->input->post('kategori_id');
                $kontak_kategori['nama'] = $this->input->post('nama');
                $kontak_kategori['parent_id'] = $this->input->post('parent_id');
                $kontak_kategori['kontak_id'] = $this->input->post('kontak_id');
                $kontak_kategori['instansi'] = $this->input->post('instansi');
                $kontak_kategori['gelar_depan'] = $this->input->post('gelar_depan');
                $kontak_kategori['nama'] = $this->input->post('nama');
                $kontak_kategori['gelar_belakang'] = $this->input->post('gelar_belakang');
                $kontak_kategori['jabatan'] = $this->input->post('jabatan');
                $kontak_kategori['alamat'] = $this->input->post('alamat');
                $kontak_kategori['telp'] = $this->input->post('telp');
                $kontak_kategori['faks'] = $this->input->post('faks');
                $kontak_kategori['handphone'] = $this->input->post('handphone');
                $kontak_kategori['email'] = $this->input->post('email');
                $kontak_kategori['temp'] = $this->input->post('temp');
                $kontak_kategori['kontak_id'] = $this->input->post('kontak_id');
                $kontak_kategori['instansi'] = $this->input->post('instansi');
                $kontak_kategori['nama'] = $this->input->post('nama');
                $kontak_kategori['jabatan'] = $this->input->post('jabatan');
                $kontak_kategori['alamat'] = $this->input->post('alamat');
                $kontak_kategori['telp'] = $this->input->post('telp');
                $kontak_kategori['faks'] = $this->input->post('faks');
                $kontak_kategori['handphone'] = $this->input->post('handphone');
                $kontak_kategori['email'] = $this->input->post('email');
                $kontak_kategori['kategori_id'] = $this->input->post('kategori_id');
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
