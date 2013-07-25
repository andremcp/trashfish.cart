<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trashfish_gnc_model
 *
 * @author Dell
 */
class Trashfish_GNC_Model extends CI_Model
{
    protected $model_name;
    protected $table_name;
    protected $delete_flag = 'disabled';

    function __construct(){
        parent::__construct();

        $this->load->helper('trashfishcom');
    }
	
    function delete($where){
        $data   = array('status' => $this->delete_flag);
        $result = $this->update($data, $where);

        return $result;
    }

    function insert($data){
        $query  = $this->db->insert_string($this->table_name, $data);
        $result = $this->db->query($query);

        return $result;
    }

    function select($fields = '*', $where = array(), $order = array(), $limit = array()){
        $this->db->select($fields);
        $this->db->from($this->table_name);
        if (is_array_filled($where))
        {
            $this->db->where($where);
        }
        if (is_array_filled($order))
        {
            $order_str = implode(',', $order);
            $this->db->order($order_str);
        }
        if (is_array_filled($limit))
        {
            $count = count($limit);
            if ($count == 1)
            {
                $this->db->limit($limit[0]);
            }
            else if ($count == 2)
            {
                $this->db->limit($limit[0], $limit[1]);
            }
        }

        $query  = $this->db->get();
        $result = $this->db->query($query);

        return $this->result_array($result);
    }

    function select_paging($key_name, $fields = NULL, $item_id = NULL, $filters = array(), $limit = NULL, $offset = 0, $order = NULL, $ref_ids = FALSE){
        $data = array();

        if (count($fields)){
            $this->db->from     ("{$this->table_name}");
            $this->db->select   ("{$this->table_name}.{$key_name}");

            $join = 0;

            foreach($fields as $field){
                switch($field->type){
                    case '1-n':
                        $id1 = $this->table_name.'.'.$field->db_name;
                        $id2 = $field->ref_table_db_name.'.'.$field->ref_table_db_name;

                        $this->db->join     ("{$field->ref_table_db_name}", $id1.' = '.$id2, 'left');
                        $this->db->select   ("{$field->ref_table_db_name}.{$field->ref_table_db_name} AS `{$field->unique_name}`");

                        $field->table_name = $field->ref_table_db_name;
                        $field->order_name = $field->ref_field_db_name;

                        $join++;

                        if ($ref_ids){
                            $this->db->select("{$this->table_name}.{$field->db_name} AS `{$field->unique_name}_id`");
                        }

                        break;

                    default:
                        $field->table_name = $this->table_name;
                        $field->order_name = $field->field_name;

                        $this->db->select("{$this->table_name}.{$field->field_name} AS `{$field->field_name_as}`");
                }
            }

            $this->set_filters($filters);

            if (!is_null($item_id)) $this->db->where("{$this->table_name}.{$key_name}", $item_id);
            if (!is_null($order)){
                foreach ($order as $key => $dir){
                    $this->db->order_by($fields[$key]->table_name.'.'.$fields[$key]->order_name, $dir);
                }
            }
            if(!is_null($limit)){
                $this->db->limit($limit, $offset);
            }
            $query = $this->db->get();

            return $query->result();
        }

        return $data;
    }
    
    function select_data_ddl($code, $text, $filters = array(), $limit = NULL, $offset = 0, $order = NULL){
        
        $this->db->from     ("{$this->table_name}");
        
        $this->db->select("{$this->table_name}.{$code} AS `CODE`");
        $this->db->select("{$this->table_name}.{$text} AS `TEXT`");

        $this->set_filters($filters);

        if (!is_null($order)){
            $order_str = implode(',', $order);
            $this->db->order_by($order_str);
        }
        if(!is_null($limit)){
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get();

        return $query->result();
    }

    function set_filters($filters = array()){
        foreach ($filters as $filter)
        {
            if (!isset($filter['operator']))
            {
                $filter['operator'] = 'eq';
            }
            switch ($filter['operator'])
            {
                case 'noteq':
                    $this->db->where($filter['field'] . ' !=', $filter['value']);
                    break;
                case 'lt':
                    $this->db->where($filter['field'] . ' <', $filter['value']);
                    break;
                case 'lte':
                    $this->db->where($filter['field'] . ' <=', $filter['value']);
                    break;
                case 'gt':
                    $this->db->where($filter['field'] . ' >', $filter['value']);
                    break;
                case 'gte':
                    $this->db->where($filter['field'] . ' >=', $filter['value']);
                    break;
                case 'in':
                    $this->db->where_in($filter['field'], $filter['value']);
                    break;
                case 'notin':
                    $this->db->where_not_in($filter['field'], $filter['value']);
                    break;
                case 'like':
                    $this->db->like($filter['field'], $filter['value']);
                    break;
                case 'notlike':
                    $this->db->not_like($filter['field'], $filter['value']);
                    break;
                case 'starts':
                    $this->db->where($filter['field'] . ' LIKE \'' . $this->db->escape_like_str($filter['value']) . '%\'');
                    break;
                case 'ends':
                    $this->db->where($filter['field'] . ' LIKE \'%' . $this->db->escape_like_str($filter['value']) . '\'');
                    break;

                default:
                    $this->db->where($filter['field'], $filter['value']);
            }
        }
    }
    
    function update($data, $where)
    {
            $where_str  = where_string($where);
            $query      = $this->db->update_string($this->table_name, $data, $where_str);
            $result     = $this->db->query($query);

            return $result;
    }

    function result_array($result)
    {
            $retarr = array();

            foreach($result->result_array() as $row){
                    array_push($retarr, $row);
            }

            return $retarr;
    }
    //put your code here
}

?>
