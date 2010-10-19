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
        $this->form_validation->set_rules('property_id', 'Property Id', '');
        $this->form_validation->set_rules('value', 'Value', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('property_add');
        } else {
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
            $this->form_validation->set_rules('property_id', 'Property Id', '');
            $this->form_validation->set_rules('value', 'Value', '');
            if ($this->form_validation->run() == FALSE) {
                $data['property'] = $this->Property_model->find_one($property_query);
                $this->load->view('property_edit', $data);
            } else {
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
