<?php
	function get_status($status) {
		switch($status) {
			case 1 : 
				$status = "Active";
			break;
			case 0 : 
				$status = "Not Active";
			break;
		}
		
		return $status;
	}
	
	function get_yes_no($status) {
		switch($status) {
			case 1 : 
				$status = "Yes";
			break;
			case 0 : 
				$status = "No";
			break;
		}
		
		return $status;
	}
	
	function get_true_false($status) {
		switch($status) {
			case 1 : 
				$status = "True";
			break;
			case 0 : 
				$status = "False";
			break;
		}
		
		return $status;
	}
	
	function get_authority($status) {
		switch($status) {
			case 1 : 
				$status = "Operator";
			break;
			case 0 : 
				$status = "Administrator";
			break;
		}
		
		return $status;
	}
	
	function get_feedback($status) {
		switch($status) {
			case 1 : 
				$status = "Read";
			break;
			case 0 : 
				$status = "Un read";
			break;
		}
		
		return $status;
	}

	function get_notif($status) {
		switch($status) {
			case 2 : 
				$status = "Delete";
			break;
			case 1 : 
				$status = "Read";
			break;
			case 0 : 
				$status = "Un read";
			break;
		}
		
		return $status;
	}
	
	function get_order($status) {
		switch($status) {
			case 8 : 
				$status = "Follow Up";
			break;
			case 7 : 
				$status = "Rejected";
			break;
			case 6 : 
				$status = "Closed";
			break;
			case 5 : 
				$status = "Canceled";
			break;
			case 4 : 
				$status = "Pending";
			break;
			case 3 : 
				$status = "Finished";
			break;
			case 2 : 
				$status = "Delivered";
			break;
			case 1 : 
				$status = "On Progress";
			break;
			case 0 : 
				$status = "Confirmation";
			break;
		}
		
		return $status;
	}

	function get_payment($status) {
		switch($status) {
			case 5 : 
				$status = "Rejected";
			break;
			case 4 : 
				$status = "Un Follow Up";
			break;
			case 3 : 
				$status = "Finish";
			break;
			case 2 : 
				$status = "On Progress";
			break;
			case 1 : 
				$status = "Follow Up";
			break;
			case 0 : 
				$status = "Confirmation";
			break;
		}
		
		return $status;
	}
	
	function get_comment($status) {
		switch($status) {
			case 2 : 
				$status = "Don't Show";
			break;
			case 1 : 
				$status = "Show";
			break;
			case 0 : 
				$status = "Confirmation";
			break;
		}
		
		return $status;
	}
?>