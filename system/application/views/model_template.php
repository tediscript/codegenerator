{php_open}

class {ucfirst_table_name}_model extends Model {

    var $table_name = '{table_name}';

    function {ucfirst_table_name}_model() {
        parent::Model();
        $this->load->database();
    }

    function save($data) {
        return $this->db->insert($this->table_name, $data);
    }

    function delete($data_query) {
        foreach ($data_query as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->delete($this->table_name);
    }

    function update($data_query, $data) {
        foreach ($data_query as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->update($this->table_name, $data);
    }

    function find($data_query = array(), $limit = 0, $offset = 0) {
        foreach ($data_query as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->limit($limit, $offset);
        $result = array();
        $query = $this->db->get($this->table_name);
        foreach ($query->result_array() as $row) {
            $result[] = $row;
        }
        return $result;
    }

    function find_one($data_query) {
        foreach ($data_query as $key => $value) {
            $this->db->where($key, $value);
        }
        $result = array();
        $query = $this->db->get($this->table_name);
        foreach ($query->result_array() as $row) {
            $result = $row;
        }
        return $result;
    }

    function query($sql) {
        $result = array();
        $query = $this->db->query($sql);
        $query = $this->db->get($this->table_name);
        foreach ($query->result_array() as $row) {
            $result[] = $row;
        }
        return $result;
    }

    function total_rows($data_query = array()) {
        foreach ($data_query as $key => $value) {
            $this->db->where($key, $value);
        }
        return $this->db->count_all($this->table_name);
    }

}

{php_close}
