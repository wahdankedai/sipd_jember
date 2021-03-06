<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * @author Mahendri Winata <mahen.0112@gmail.com>
 */
class Sub_district_model extends App_Model {

  public $table = 'sub_districts';

  function __construct() {
    parent::__construct();
  }

  function get_all($conditions = array(), $count = FALSE, $limit = NULL, $offset = NULL) {
    $this->db->select('*')
            ->from($this->table);
    
    if (!empty($conditions)) {
      $this->db->where($conditions);
    }

    if (!empty($limit) || !empty($offset)) {
      $this->db->limit($limit, $offset);
    }

    if ($count) {
      $sub_districts = $this->db->count_all_results();
    } else {
      $sub_districts = $this->db->get()->result();
    }
    return $sub_districts;
  }

  function save($data = array(), $id = NULL, $primary_key = 'id') {
    if (empty($id)) {
      $insert = $this->setInsertData($data);
      return $this->db->insert($this->table, $insert);
    } else {
      $this->db->where($primary_key, $id);
      $update = $this->setUpdateData($data);
      return $this->db->update($this->table, $update);
    }
  }

  function remove($id = NULL, $field = 'id') {
    return $this->db->delete($this->table, array($field => $id));
  }

  function get_all_where_not_in($data = array(), $field = 'id', $count = FALSE) {
    $this->db->select('*')
            ->from($this->table);
    if (!empty($data)) {
      $this->db->where_not_in($field, $data);
    }

    if ($count) {
      $sub_districts = $this->db->count_all_results();
    } else {
      $sub_districts = $this->db->get()->result();
    }
    return $sub_districts;
  }

}

?>