{php_open}

class {ucfirst_table_name} extends Controller {

    function {ucfirst_table_name}() {
        parent::Controller();
    }

    function index($offset = 0) {
        $limit = 25;
        $this->load->model('{ucfirst_table_name}_model');
        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/{table_name}/index/';
        $config['total_rows'] = $this->{ucfirst_table_name}_model->total_rows();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['{table_name}'] = $this->{ucfirst_table_name}_model->find(array(), $limit, $offset);
        $this->load->view('{table_name}', $data);
    }

    function add() {
        $this->load->library('form_validation');{table_fields_add1}
        $this->form_validation->set_rules('{table_field}', '{table_field_humanized}', '');{/table_fields_add1}
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('{table_name}_add');
        } else {{table_fields_add2}
            ${table_name}['{table_field}'] = $this->input->post('{table_field}');{/table_fields_add2}
            $this->load->model('{ucfirst_table_name}_model');
            $this->{ucfirst_table_name}_model->save(${table_name});
            redirect('{table_name}');
        }
    }

    function delete($id) {
        if ($id) {
            ${table_name}_query['{primary_key}'] = $id;
            $this->load->model('{ucfirst_table_name}_model');
            $this->Kategori_model->delete(${table_name}_query);
        } else {
            redirect('{table_name}');
        }
    }

    function edit($id) {
        if ($id) {
            ${table_name}_query['{primary_key}'] = $id;
            $this->load->model('{ucfirst_table_name}_model');

            $this->load->library('form_validation');{table_fields_edit1}
            $this->form_validation->set_rules('{table_field}', '{table_field_humanized}', '');{/table_fields_edit1}
            if ($this->form_validation->run() == FALSE) {
                $data['{table_name}'] = $this->{ucfirst_table_name}_model->find_one(${table_name}_query);
                $this->load->view('{table_name}_edit', $data);
            } else {{table_fields_edit2}
                ${table_name}['{table_field}'] = $this->input->post('{table_field}');{/table_fields_edit2}
                $this->{ucfirst_table_name}_model->update(${table_name}_query, ${table_name});
                redirect('{table_name}');
            }
        } else {
            redirect('{table_name}');
        }
    }

}
