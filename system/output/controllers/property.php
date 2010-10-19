<?php

class Property extends Controller {

    function Property() {
        parent::Controller();
    }

    function index() {
        $this->load->model('Property_model');
        $data['property'] = $this->Property_model->find();
        $this->load->view('property', $data);
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
        $this->form_validation->set_rules('property_id', 'Property Id', '');
        $this->form_validation->set_rules('value', 'Value', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('property_add');
        } else {
            $property['kategori_id'] = $this->input->post('kategori_id');
            $property['nama'] = $this->input->post('nama');
            $property['parent_id'] = $this->input->post('parent_id');
            $property['kontak_id'] = $this->input->post('kontak_id');
            $property['instansi'] = $this->input->post('instansi');
            $property['gelar_depan'] = $this->input->post('gelar_depan');
            $property['nama'] = $this->input->post('nama');
            $property['gelar_belakang'] = $this->input->post('gelar_belakang');
            $property['jabatan'] = $this->input->post('jabatan');
            $property['alamat'] = $this->input->post('alamat');
            $property['telp'] = $this->input->post('telp');
            $property['faks'] = $this->input->post('faks');
            $property['handphone'] = $this->input->post('handphone');
            $property['email'] = $this->input->post('email');
            $property['temp'] = $this->input->post('temp');
            $property['kontak_id'] = $this->input->post('kontak_id');
            $property['instansi'] = $this->input->post('instansi');
            $property['nama'] = $this->input->post('nama');
            $property['jabatan'] = $this->input->post('jabatan');
            $property['alamat'] = $this->input->post('alamat');
            $property['telp'] = $this->input->post('telp');
            $property['faks'] = $this->input->post('faks');
            $property['handphone'] = $this->input->post('handphone');
            $property['email'] = $this->input->post('email');
            $property['kategori_id'] = $this->input->post('kategori_id');
            $property['kontak_kategori_id'] = $this->input->post('kontak_kategori_id');
            $property['kontak_id'] = $this->input->post('kontak_id');
            $property['kategori_id'] = $this->input->post('kategori_id');
            $property['property_id'] = $this->input->post('property_id');
            $property['value'] = $this->input->post('value');
            $this->load->model('Property_model');
            $this->Property_model->save($property);
            redirect('property');
        }
    }

    function delete($id) {
        if ($id) {
            $property_query['property_id'] = $id;
            $this->load->model('Property_model');
            $this->Kategori_model->delete($property_query);
        } else {
            redirect('property');
        }
    }

    function edit($id) {
        if ($id) {
            $property_query['property_id'] = $id;
            $this->load->model('Property_model');

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
            $this->form_validation->set_rules('property_id', 'Property Id', '');
            $this->form_validation->set_rules('value', 'Value', '');
            if ($this->form_validation->run() == FALSE) {
                $data['property'] = $this->Property_model->find_one($property_query);
                $this->load->view('property_edit', $data);
            } else {
                $property['kategori_id'] = $this->input->post('kategori_id');
                $property['nama'] = $this->input->post('nama');
                $property['parent_id'] = $this->input->post('parent_id');
                $property['kontak_id'] = $this->input->post('kontak_id');
                $property['instansi'] = $this->input->post('instansi');
                $property['gelar_depan'] = $this->input->post('gelar_depan');
                $property['nama'] = $this->input->post('nama');
                $property['gelar_belakang'] = $this->input->post('gelar_belakang');
                $property['jabatan'] = $this->input->post('jabatan');
                $property['alamat'] = $this->input->post('alamat');
                $property['telp'] = $this->input->post('telp');
                $property['faks'] = $this->input->post('faks');
                $property['handphone'] = $this->input->post('handphone');
                $property['email'] = $this->input->post('email');
                $property['temp'] = $this->input->post('temp');
                $property['kontak_id'] = $this->input->post('kontak_id');
                $property['instansi'] = $this->input->post('instansi');
                $property['nama'] = $this->input->post('nama');
                $property['jabatan'] = $this->input->post('jabatan');
                $property['alamat'] = $this->input->post('alamat');
                $property['telp'] = $this->input->post('telp');
                $property['faks'] = $this->input->post('faks');
                $property['handphone'] = $this->input->post('handphone');
                $property['email'] = $this->input->post('email');
                $property['kategori_id'] = $this->input->post('kategori_id');
                $property['kontak_kategori_id'] = $this->input->post('kontak_kategori_id');
                $property['kontak_id'] = $this->input->post('kontak_id');
                $property['kategori_id'] = $this->input->post('kategori_id');
                $property['property_id'] = $this->input->post('property_id');
                $property['value'] = $this->input->post('value');
                $this->Property_model->update($property_query, $property);
                redirect('property');
            }
        } else {
            redirect('property');
        }
    }

}
