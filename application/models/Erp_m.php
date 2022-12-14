<?php
class Erp_m extends CI_model{
    public function view_join_2table_2filed($table1,$table2,$field1,$field2,$data,$order,$ordering)
    {
      $this->db->select('*');
      $this->db->from($table1);
      $this->db->join($table2, $table1.'.'.$field1.'='.$table2.'.'.$field2);
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
          return $this->db->get()->result_array();
    }
    public function view_join_2table_2filed_nonordering($table1,$table2,$field1,$field2,$data)
    {
      $this->db->select('*');
      $this->db->from($table1);
      $this->db->join($table2, $table1.'.'.$field1.'='.$table2.'.'.$field2);
      $this->db->where($data);
      return $this->db->get()->result_array();
    }

    public function view_join_2table_2filed_like($table1,$table2,$field1,$field2,$data,$data1,$data2,$data3,$order,$ordering)
    {
      $this->db->select('*');
      $this->db->from($table1);
      $this->db->join($table2, $table1.'.'.$field1.'='.$table2.'.'.$field2);
      $this->db->like($data2,$data3);
      $this->db->where($data,$data1);
      $this->db->order_by($order,$ordering);
      return $this->db->get()->result_array();
    }

    public function view_join_ordering_trace($table1,$table2,$field1,$field2,$data,$order,$ordering)
    {
      $this->db->select('*');
      $this->db->from($table1);
      $this->db->join($table2, $table1.'.'.$field1.'='.$table2.'.'.$field2);
      $this->db->order_by($order,$ordering);
      $this->db->where($data);
      return $this->db->get()->result_array();
    }
}
 ?>
