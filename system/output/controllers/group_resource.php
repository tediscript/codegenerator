<?php

class Group_resource extends Controller {

    function Group_resource() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Group_resource_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/group_resource/index/';
        $config['total_rows'] = $this->Group_resource_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['group_resource'] = $this->Group_resource_model->find(array(), $limit, $offset);
        $this->load->view('group_resource', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('group_resource_id', 'Group Resource Id', '');
        $this->form_validation->set_rules('group_id', 'Group Id', '');
        $this->form_validation->set_rules('resource_id', 'Resource Id', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('group_resource_add');
        } else {
            $group_resource['group_resource_id'] = $this->input->post('group_resource_id');
            $group_resource['group_id'] = $this->input->post('group_id');
            $group_resource['resource_id'] = $this->input->post('resource_id');
            $this->load->model('Group_resource_model');
            $this->Group_resource_model->save($group_resource);
            redirect('group_resource');
        }
    }

    function delete($id) {
        if ($id) {
            $group_resource_query['group_resource_id'] = $id;
            $this->load->model('Group_resource_model');
            $this->Kategori_model->delete($group_resource_query);
        } else {
            redirect('group_resource');
        }
    }

    function edit($id) {
        if ($id) {
            $group_resource_query['group_resource_id'] = $id;
            $this->load->model('Group_resource_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('group_resource_id', 'Group Resource Id', '');
            $this->form_validation->set_rules('group_id', 'Group Id', '');
            $this->form_validation->set_rules('resource_id', 'Resource Id', '');
            if ($this->form_validation->run() == FALSE) {
                $data['group_resource'] = $this->Group_resource_model->find_one($group_resource_query);
                $this->load->view('group_resource_edit', $data);
            } else {
                $group_resource['group_resource_id'] = $this->input->post('group_resource_id');
                $group_resource['group_id'] = $this->input->post('group_id');
                $group_resource['resource_id'] = $this->input->post('resource_id');
                $this->Group_resource_model->update($group_resource_query, $group_resource);
                redirect('group_resource');
            }
        } else {
            redirect('group_resource');
        }
    }

}
