<?php
	function get_notification($operation, $status) {
		$notification = "";
		
		switch($status) {
			case 0 : 
				$status = "failed";
			break;
			case 1 : 
				$status = "success";
			break;
			case 2 : 
				$status = "data not complete";
			break;
			case 9 : 
				$status = "already exist";
			break;
			default : 
				$status = "";
			break;	
		}
		
		switch($operation) {
			case "insert" : 
				$operation = "save";
			break;
			case "update" : 
				$operation = "update";
			break;		
			case "delete" : 
				$operation = "delete";
			break;
			case "finish" : 
				$operation = "finish";
			break;
			default : 
				$operation = "";
			break;	
		}
		
		$notification = "Data " .$status. ' '.$operation;
		return $notification;
	}
	
	function get_notify_status($status) {
		switch($status) {
			case 0 : 
				$status = "DANGER";
			break;
			case 1 : 
				$status = "SUCCESS";
			break;
			case 2 : 
				$status = "WARNING";
			break;
			case 9 : 
				$status = "INFO";
			break;
			default : 
				$status = "";
			break;
		}	
		
		return $status;
	}	
?>