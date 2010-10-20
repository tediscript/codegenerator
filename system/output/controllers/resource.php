<?php

class Resource extends Controller {

    function Resource() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Resource_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/resource/index/';
        $config['total_rows'] = $this->Resource_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['resource'] = $this->Resource_model->find(array(), $limit, $offset);
        $this->load->view('resource', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('resource_id', 'Resource Id', '');
        $this->form_validation->set_rules('description', 'Description', '');
        $this->form_validation->set_rules('location', 'Location', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('resource_add');
        } else {
            $resource['resource_id'] = $this->input->post('resource_id');
            $resource['description'] = $this->input->post('description');
            $resource['location'] = $this->input->post('location');
            $this->load->model('Resource_model');
            $this->Resource_model->save($resource);
            redirect('resource');
        }
    }

    function delete($id) {
        if ($id) {
            $resource_query['resource_id'] = $id;
            $this->load->model('Resource_model');
            $this->Kategori_model->delete($resource_query);
        } else {
            redirect('resource');
        }
    }

    function edit($id) {
        if ($id) {
            $resource_query['resource_id'] = $id;
            $this->load->model('Resource_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('resource_id', 'Resource Id', '');
            $this->form_validation->set_rules('description', 'Description', '');
            $this->form_validation->set_rules('location', 'Location', '');
            if ($this->form_validation->run() == FALSE) {
                $data['resource'] = $this->Resource_model->find_one($resource_query);
                $this->load->view('resource_edit', $data);
            } else {
                $resource['resource_id'] = $this->input->post('resource_id');
                $resource['description'] = $this->input->post('description');
                $resource['location'] = $this->input->post('location');
                $this->Resource_model->update($resource_query, $resource);
                redirect('resource');
            }
        } else {
            redirect('resource');
        }
    }

}
