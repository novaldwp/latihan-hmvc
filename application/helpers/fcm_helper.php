<?php
	// send Notification
	function send_firebase_notification($devicetoken, $title, $message, $id=null, $image=NULL, $type=null) {
		// Get a reference to the controller object
		$CI =& get_instance();
		
		$CI->load->library('firebase');
		$CI->load->library('push');
		
		// getting the push from push object
		$push = new PushIosx(); 
		$push->construct($title, $message, $id, $image, $type, 'high', 'myicon');
		$mPushNotification = $push->getPush(); 

		//creating firebase class object 
		$firebase = new Firebase(); 

		//sending push notification and displaying result 
		return $firebase->send_ios($devicetoken, $mPushNotification);
	}
	
	// send Notification
	function send_firebase_datanotification($devicetoken, $title, $message, $id=null, $image="ic_apps", $type=null, $activity=null) {
		// Get a reference to the controller object
		$CI =& get_instance();
		
		$CI->load->library('firebase');
		$CI->load->library('push');
		
		// getting the push from push object
		$push = new PushIosx(); 
		$push->construct($title, $message, $id, $image, $type, 'high', 'cast_ic_notification_small_icon', '22', $type);
		$mPushNotification = $push->getPush(); 

		//creating firebase class object 
		$firebase = new Firebase(); 

		//sending push notification and displaying result 
		return $firebase->send_notification($devicetoken, $mPushNotification);
	}
?>