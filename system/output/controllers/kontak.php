<?php

class Kontak extends Controller {

    function Kontak() {
        parent::Controller();
    }

    function index() {
        $this->load->model('Kontak_model');
        $data['kontak'] = $this->Kontak_model->find();
        $this->load->view('kontak', $data);
    }

    function add() {
        $this->load->library('form_validation');
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
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kontak_add');
        } else {
            $kontak['kontak_id'] = $this->input->post('kontak_id');
            $kontak['instansi'] = $this->input->post('instansi');
            $kontak['gelar_depan'] = $this->input->post('gelar_depan');
            $kontak['nama'] = $this->input->post('nama');
            $kontak['gelar_belakang'] = $this->input->post('gelar_belakang');
            $kontak['jabatan'] = $this->input->post('jabatan');
            $kontak['alamat'] = $this->input->post('alamat');
            $kontak['telp'] = $this->input->post('telp');
            $kontak['faks'] = $this->input->post('faks');
            $kontak['handphone'] = $this->input->post('handphone');
            $kontak['email'] = $this->input->post('email');
            $kontak['temp'] = $this->input->post('temp');
            $this->load->model('Kontak_model');
            $this->Kontak_model->save($kontak);
            redirect('kontak');
        }
    }

    function delete($id) {
        if ($id) {
            $kontak_query['kontak_id'] = $id;
            $this->load->model('Kontak_model');
            $this->Kategori_model->delete($kontak_query);
        } else {
            redirect('kontak');
        }
    }

    function edit($id) {
        if ($id) {
            $kontak_query['kontak_id'] = $id;
            $this->load->model('Kontak_model');

            $this->load->library('form_validation');
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
            if ($this->form_validation->run() == FALSE) {
                $data['kontak'] = $this->Kontak_model->find_one($kontak_query);
                $this->load->view('kontak_edit', $data);
            } else {
                $kontak['kontak_id'] = $this->input->post('kontak_id');
                $kontak['instansi'] = $this->input->post('instansi');
                $kontak['gelar_depan'] = $this->input->post('gelar_depan');
                $kontak['nama'] = $this->input->post('nama');
                $kontak['gelar_belakang'] = $this->input->post('gelar_belakang');
                $kontak['jabatan'] = $this->input->post('jabatan');
                $kontak['alamat'] = $this->input->post('alamat');
                $kontak['telp'] = $this->input->post('telp');
                $kontak['faks'] = $this->input->post('faks');
                $kontak['handphone'] = $this->input->post('handphone');
                $kontak['email'] = $this->input->post('email');
                $kontak['temp'] = $this->input->post('temp');
                $this->Kontak_model->update($kontak_query, $kontak);
                redirect('kontak');
            }
        } else {
            redirect('kontak');
        }
    }

}
