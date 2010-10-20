<?php

class Account_group extends Controller {

    function Account_group() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Account_group_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/account_group/index/';
        $config['total_rows'] = $this->Account_group_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['account_group'] = $this->Account_group_model->find(array(), $limit, $offset);
        $this->load->view('account_group', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('account_group_id', 'Account Group Id', '');
        $this->form_validation->set_rules('account_id', 'Account Id', '');
        $this->form_validation->set_rules('group_id', 'Group Id', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('account_group_add');
        } else {
            $account_group['account_group_id'] = $this->input->post('account_group_id');
            $account_group['account_id'] = $this->input->post('account_id');
            $account_group['group_id'] = $this->input->post('group_id');
            $this->load->model('Account_group_model');
            $this->Account_group_model->save($account_group);
            redirect('account_group');
        }
    }

    function delete($id) {
        if ($id) {
            $account_group_query['account_group_id'] = $id;
            $this->load->model('Account_group_model');
            $this->Kategori_model->delete($account_group_query);
        } else {
            redirect('account_group');
        }
    }

    function edit($id) {
        if ($id) {
            $account_group_query['account_group_id'] = $id;
            $this->load->model('Account_group_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('account_group_id', 'Account Group Id', '');
            $this->form_validation->set_rules('account_id', 'Account Id', '');
            $this->form_validation->set_rules('group_id', 'Group Id', '');
            if ($this->form_validation->run() == FALSE) {
                $data['account_group'] = $this->Account_group_model->find_one($account_group_query);
                $this->load->view('account_group_edit', $data);
            } else {
                $account_group['account_group_id'] = $this->input->post('account_group_id');
                $account_group['account_id'] = $this->input->post('account_id');
                $account_group['group_id'] = $this->input->post('group_id');
                $this->Account_group_model->update($account_group_query, $account_group);
                redirect('account_group');
            }
        } else {
            redirect('account_group');
        }
    }

}
