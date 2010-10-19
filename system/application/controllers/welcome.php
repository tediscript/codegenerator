<?php

class Welcome extends Controller {

    function Welcome() {
        parent::Controller();
        $this->load->library('parser');
        $this->load->helper('file');
        $this->load->helper('inflector');
    }

    function index() {
        $this->load->database();
        $tables = $this->db->list_tables();
        foreach ($tables as $table) {
            //generate model
            $data['table_name'] = $table;
            $data['ucfirst_table_name'] = ucfirst($table);
            $data['php_open'] = '<?php';
            $data['php_close'] = '?>';
            $model_source = $this->parser->parse('model_template', $data, TRUE);
            write_file(BASEPATH . 'output/models/' . $table . '_model.php', $model_source);

            //generate controller
            $data['primary_key'] = '';
            $data['table_fields'] = array();
            $fields = $this->db->field_data($table);
            foreach ($fields as $field) {
                $table_fields[] = array('table_field' => $field->name, 'table_field_humanized' => humanize($field->name));
                if ($field->primary_key) {
                    $data['primary_key'] = $field->name;
                }
                $data['table_fields_add1'] = $table_fields;
                $data['table_fields_add2'] = $table_fields;
                $data['table_fields_edit1'] = $table_fields;
                $data['table_fields_edit2'] = $table_fields;
            }
            $controller_source = $this->parser->parse('controller_template', $data, TRUE);
            write_file(BASEPATH . 'output/controllers/' . $table . '.php', $controller_source);

            //generate grid view
            $data['table_fields_view1'] = $table_fields;
            $data['table_fields_view2'] = $table_fields;
            $view_source = $this->parser->parse('view_template', $data, TRUE);
            write_file(BASEPATH . 'output/views/' . $table . '.php', $view_source);

            //generate grid view add
            $data['table_fields_view_add'] = $table_fields;
            $view_add_source = $this->parser->parse('view_add_template', $data, TRUE);
            write_file(BASEPATH . 'output/views/' . $table . '_add.php', $view_add_source);

            //generate grid view edit
            $data['table_fields_view_edit'] = $table_fields;
            $view_edit_source = $this->parser->parse('view_edit_template', $data, TRUE);
            write_file(BASEPATH . 'output/views/' . $table . '_edit.php', $view_edit_source);
        }
    }

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */