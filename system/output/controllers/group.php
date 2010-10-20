<?php

class Group extends Controller {

    function Group() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Group_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/group/index/';
        $config['total_rows'] = $this->Group_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['group'] = $this->Group_model->find(array(), $limit, $offset);
        $this->load->view('group', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('group_id', 'Group Id', '');
        $this->form_validation->set_rules('name', 'Name', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('group_add');
        } else {
            $group['group_id'] = $this->input->post('group_id');
            $group['name'] = $this->input->post('name');
            $this->load->model('Group_model');
            $this->Group_model->save($group);
            redirect('group');
        }
    }

    function delete($id) {
        if ($id) {
            $group_query['group_id'] = $id;
            $this->load->model('Group_model');
            $this->Kategori_model->delete($group_query);
        } else {
            redirect('group');
        }
    }

    function edit($id) {
        if ($id) {
            $group_query['group_id'] = $id;
            $this->load->model('Group_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('group_id', 'Group Id', '');
            $this->form_validation->set_rules('name', 'Name', '');
            if ($this->form_validation->run() == FALSE) {
                $data['group'] = $this->Group_model->find_one($group_query);
                $this->load->view('group_edit', $data);
            } else {
                $group['group_id'] = $this->input->post('group_id');
                $group['name'] = $this->input->post('name');
                $this->Group_model->update($group_query, $group);
                redirect('group');
            }
        } else {
            redirect('group');
        }
    }

}
