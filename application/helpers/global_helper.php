<?php
	function handling_characters($str) {
		$str = str_replace("@", "", $str);
		$str = str_replace("#", "", $str);
		$str = str_replace("$", "", $str);
		$str = str_replace("%", "", $str);
		$str = str_replace("^", "", $str);
		$str = str_replace("&", "", $str);
		$str = str_replace("*", "", $str);
		$str = str_replace("'", "", $str);
		$str = str_replace('"', '', $str);
		
		return $str;
	}
	
	function convert_to_nomor($id) {
		$digit = "";
		$nomor = "";
		
		$id = intval($id);
		if($id < 10) {
			$digit = "000000";
		}
		else if($id >= 10 && $id < 99) {
			$digit = "00000";
		}
		else if($id >= 100 && $id < 999) {
			$digit = "0000";
		}	
		else if($id >= 1000 && $id < 9999) {
			$digit = "000";
		}
		else if($id >= 10000 && $id < 99999) {
			$digit = "00";
		}
		else if($id >= 100000 && $id < 999999) {
			$digit = "0";
		}
		else {
			$digit = "";
		}
		
		$nomor = $digit .''. $id;
		
		return $nomor;
	}
	
	function convert_to_star($len) {
		$encryp = "";
		
		for($i=0; $i<$len; $i++) {
			$encryp = $encryp."*";
		}
		
		return $encryp;
	}
	
	function format_rupiah($value) {
		return 'Rp. '. number_format($value, 2);
	}
	
	function pembulatan_rupiah($value) {
		$value = intval($value);
		if(strlen($value) >= 3) {
			$depan = substr($value, 0, (strlen($value) - 3));
			$ratusan = substr($value, (strlen($value) - 3), 3);
			if($ratusan >= 1 && $ratusan < 250) {
				$ratusan = '000';
			}
			else if($ratusan >= 250 && $ratusan < 500) {
				$ratusan = '250';
			}
			else if($ratusan >= 500 && $ratusan < 750) {
				$ratusan = '500';
			}
			else if($ratusan >= 750 && $ratusan < 1000) {
				if(strlen($value) == 3) {
					$depan = substr($value, 0, (strlen($value) - 2));
					$ratusan = substr($value, (strlen($value) - 2), 2);
					
					if($ratusan >= 1 && $ratusan < 50) {
						$ratusan = '00';
					}
					else {
						$ratusan = '50';
					}
				}
				else {
					$depan = substr($value, 0, (strlen($value) - 2));
					$ratusan = substr($value, (strlen($value) - 2), 2);
					
					if($ratusan >= 51 && $ratusan < 100) {
						$ratusan = '50';
					}
					else {
						$ratusan = '00';
					}
					
				}
			}
			
			$value = $depan.''.$ratusan;
		}
		
		return number_format($value, 2);
	}

	function set_userdata($session, $value) {
		$CI =& get_instance();
		$CI->session->set_userdata($session, $value);
	}
	
	function unset_userdata($session) {
		$CI =& get_instance();
		$CI->session->unset_userdata($session);
	}
	
	function set_flashdata($session, $value) {
		$CI =& get_instance();
		$CI->session->set_flashdata($session, $value);
	}
	
	function unset_flashdata($session) {
		$CI =& get_instance();
		$CI->session->unset_flashdata($session);
	}
	
	function last_query() {
		$CI =& get_instance();
		echo $CI->db->last_query(); die();
	}
	
	function json($arr) {
		echo json_encode($arr); die();
	}
	
	function comp($a, $b) {
		if ($a['exam_score'] <= $b['exam_score']) {
			if ($a['student_id'] == $b['student_id']) {
				return $b['student_id'] - $a['student_id'];
			}
			
			return strcmp($a['student_id'], $b['student_id']);
		}
		
		return strcmp($a['exam_score'], $b['exam_score']);
	}
	
	function depan_koma($string, $find) {
		$value = 0;
		if (strpos($string, '.') !== false) {
			$pos 	= strpos($string, $find);
			$value 	= substr($string, 0, $pos);	
		}
		
		return $value;
	}
	
	function belakang_koma($string, $find) {
		$value = 0;
		if (strpos($string, '.') !== false) {
			$pos 	= strpos($string, $find);
			$value 	= substr($string, ($pos + 1), (strlen($string) - $pos));	
		}
		
		return $value;
	}
	
	function get_ongkir($distance) {
		$CI =& get_instance();
		$total = 0;
		
		if (strpos($distance, 'km') !== false) {
			$distance = str_replace("km", "", $distance);
			$distance = str_replace(" ", "", $distance); 
			
			if (strpos($distance, '.') !== false) {
				$find = '.';
				$depan    = depan_koma($distance, $find);
				$belakang = belakang_koma($distance, $find);
				
				if($depan == 0) {
					$dis = 1;
				}
				else {
					if($belakang >= 6) {
						$dis = $depan + 1;
					}
					else {
						$dis = intval($distance);
					}
				}		
			}
		}
		else {
		$distance = str_replace("m", "", $distance);
			$dis = 1;
		}
		
		$price  = $CI->load->model('setting/m_preference')->get_cost_by_id(1);
		$total  = doubleval($price) * doubleval($dis);

		return $total;
	}
	
	function get_jarak($distance) {
		if (strpos($distance, 'km') !== false) {
			$distance = str_replace("km", "", $distance);
			$distance = str_replace(" ", "", $distance); 
			
			if (strpos($distance, '.') !== false) {
				$find = '.';
				$depan    = depan_koma($distance, $find);
				$belakang = belakang_koma($distance, $find);
				
				if($depan == 0) {
					$dis = 1;
				}
				else {
					if($belakang >= 6) {
						$dis = $depan + 1;
					}
					else {
						$dis = intval($distance);
					}
				}		
			}
		}
		else {
		$distance = str_replace("m", "", $distance);
			$dis = 1;
		}
		
		return $dis;
	}
	
	function check_location($lt, $lg, $distance, $default_latitude, $default_longitude) {
		// point location
		$latitude  = $default_latitude;
		$longitude = $default_longitude;
		
		if($latitude != 0 && $longitude != 0) {
			$latlong_course = $latitude .','.$longitude;
			$latlong_course = simple_latlng($latlong_course);
			
			$d = 0.019;	
			$distance  = intval($distance) * $d;
			
			$latlng = $lt .','.$lg;
			
			if($latlng != "") {
				// current location
				$latlong = $latlng;
				$latlong = simple_latlng($latlong);
				
				if(check_in_geofence($latlong_course, $latlong, $distance) == 1) {
					$ketemu = 1;
				}
				else {
					$ketemu = 0;
				}	
			}
			else {
				$ketemu = 0;
			}
		}
		else {
			$ketemu = 0;
		}
		
		return $ketemu;
	}
?>