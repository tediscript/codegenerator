<?php

class Account extends Controller {

    function Account() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('Account_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/account/index/';
        $config['total_rows'] = $this->Account_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['account'] = $this->Account_model->find(array(), $limit, $offset);
        $this->load->view('account', $data);
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('account_id', 'Account Id', '');
        $this->form_validation->set_rules('username', 'Username', '');
        $this->form_validation->set_rules('password', 'Password', '');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('account_add');
        } else {
            $account['account_id'] = $this->input->post('account_id');
            $account['username'] = $this->input->post('username');
            $account['password'] = $this->input->post('password');
            $this->load->model('Account_model');
            $this->Account_model->save($account);
            redirect('account');
        }
    }

    function delete($id) {
        if ($id) {
            $account_query['account_id'] = $id;
            $this->load->model('Account_model');
            $this->Kategori_model->delete($account_query);
        } else {
            redirect('account');
        }
    }

    function edit($id) {
        if ($id) {
            $account_query['account_id'] = $id;
            $this->load->model('Account_model');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('account_id', 'Account Id', '');
            $this->form_validation->set_rules('username', 'Username', '');
            $this->form_validation->set_rules('password', 'Password', '');
            if ($this->form_validation->run() == FALSE) {
                $data['account'] = $this->Account_model->find_one($account_query);
                $this->load->view('account_edit', $data);
            } else {
                $account['account_id'] = $this->input->post('account_id');
                $account['username'] = $this->input->post('username');
                $account['password'] = $this->input->post('password');
                $this->Account_model->update($account_query, $account);
                redirect('account');
            }
        } else {
            redirect('account');
        }
    }

}
