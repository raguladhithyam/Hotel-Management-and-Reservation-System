<?php
	require_once 'connect.php';
	mysqli_query($conn, "DELETE FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error($conn));
	header("location:room.php");
?>
