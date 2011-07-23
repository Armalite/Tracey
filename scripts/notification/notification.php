<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/scripts/includes/sanitize.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/scripts/includes/sql_notificationfn.php');

$callbackMsg = '';

if (isset($_POST['AcceptId'])){
	// accept the notification

	$StatusId = $_POST['AcceptId'];
	$NotifId = $_POST['NotificationId'];
	
	if(setNotifStatus($StatusId, $NotifId)){
		// changing status was succesful
		$callbackMsg = 1;
		
	}else{
		// changing status failed
		$callbackMsg = -1;
	}
	
	
	
} else if (isset($_POST['RejectId'])){
	// reject notification
	
	$StatusId = $_POST['RejectId'];
	$NotifId = $_POST['NotificationId'];
	
	if(setNotifStatus($StatusId, $NotifId)){
		// changing status was succesful
		$callbackMsg = 1;
	}else{
		// chaning status failed
		$callbackMsg = -1;
	}
}

echo $callbackMsg;
?>