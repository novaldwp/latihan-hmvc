<?php

class M_global extends CI_Model {

	function get_all($table) {
		$query = $this->db->get($table);
        return $query->result();
	}
	
	function get_order($table, $by, $order) {
		$query = $this->db->order_by($by, $order)->get($table);
        return $query->result();
	}
	
	function get_list($table, $field) {
		$query = $this->db->get_where($table, array($field => 1));
        return $query->result();
	}
	
	function get_by_id($table, $field, $id) {
		$query = $this->db->get_where($table, array($field => $id));
        return $query->result();
	}
	
	function get_by_order($table, $field, $id, $by, $order) {
		$query = $this->db->order_by($by, $order)->get_where($table, array($field => $id));
        return $query->result();
	}
	
	function get_by_id_order($table, $field, $id, $fields, $ids, $by, $order) {
		$query = $this->db->order_by($by, $order)->get_where($table, array($field => $id, $fields => $ids));
        return $query->result();
	}
	
	function get_order_by_id($table, $field, $id, $by, $order) {
		$query = $this->db->order_by($by, $order)->get_where($table, array($field => $id));
        return $query->result();
	}
	
	function get_by_id_limit_order($table, $field, $id, $limit, $by, $order) {
		$query = $this->db->limit($limit)->order_by($by, $order)->get_where($table, array($field => $id));
        return $query->result();
	}
	
	function get_by_limit($table, $field, $id, $limit) {
		$query = $this->db->limit($limit)->get_where($table, array($field => $id));
        return $query->result();
	}
	
	function get_by_status($table, $field, $status) {
		$query = $this->db->get_where($table, array($field => $status));
        return $query->result();
	}
	
	function get_by_status_arr($table, $field, $status) {
		$query = $this->db->where_in($field, $status)->get($table);
        return $query->result();
	}
	
	function get_by_id_status_arr($table, $field, $id, $fields, $status) {
		$query = $this->db->where_in($fields, $status)->get_where($table, array($field => $id));
        return $query->result();
	}
	
	function get_by_id_status_arr_order($table, $field, $id, $fields, $status, $order, $by) {
		$query = $this->db->order_by($order, $by)->where_in($fields, $status)->get_where($table, array($field => $id));
        return $query->result();
	}
	
	function get_by_id_not_in($table, $field, $id, $not, $not_id) {
		$query = $this->db->where_not_in($not, $not_id)->get_where($table, array($field => $id));
        return $query->result();
	}
	
	function get_select($table, $field, $id) {
		$query = $this->db->where_not_in($field, $id)->get($table);
        return $query->result();
	}
	
	function get_select_limit($table, $field, $id, $limit) {
		$query = $this->db->where_not_in($field, $id)->limit($limit)->get($table);
        return $query->result();
	}
	
	function get_select_in_id($table, $field, $id, $in, $in_id) {
		$query = $this->db->where_not_in($field, $id)->where($in, $in_id)->get($table);
        return $query->result();
	}
	
	function get_rand_by_limit($table, $field, $limit) {
		$query = $this->db->order_by($field, "random")->limit($limit)->get_where($table);
        return $query->result();
	}
	
	function set_status($table, $field, $id, $stat, $status) {
		$this->db->set($stat, $status);
		$this->db->where($field, $id);
		$this->db->update($table);
		
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return 0;
		}
		else {
			$this->db->trans_commit();
			return 1;
		}
	}
	
	function get_count_by_id($tb, $fd, $id) {
        $this->db->select('count(*) as count');
		$this->db->from($tb);
		$this->db->where($fd, $id); 
		$query = $this->db->get();    
        
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$count = $row->count;
			}    

			return $count;
		}
		else {
			return "";
		}	
    }
	function check_exist($table, $field, $value) {
		$query = $this->db->get_where($table, array($field => $value), 1, 0);
		
		if ($query->num_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}	
	}
	
	function check_existing($table, $field1, $value1, $field2, $value2) {
		$query = $this->db->get_where($table, array($field1 => $value1, $field2 => $value2), 1, 0);
		
		if ($query->num_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}	
	}
	
	function get_page_by_num_offset($table, $field, $num, $offset){
        $this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($field, 'DESC');
		$this->db->limit($num, $offset);
		$query = $this->db->get();

        return $query->result();
    }
	
	function get_sum_by_id($table, $sums, $field, $id){
        $sum=0;
        $q = "select sum(".$sums.") as sums FROM ".$table."  WHERE ".$field."='".$id."'";;
		$query =  $this->db->query($q);
		
		foreach ($query->result() as $row) {
			$sum = $row->sums;
		}
        return $sum;
    }
	
	function get_by_two_id($table, $field, $id, $field2, $id2) {
		$q="select * from ".$table." where ".$field." = '".$id."' and ".$field2." = '".$id2."'";
		$query =  $this->db->query($q);
		
		return $query->result();
	}
}		