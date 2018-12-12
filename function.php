<?php
//function.php

function fill_service($connect)
{
	 $query = "SELECT DISTINCT(Service) FROM medical WHERE service_status = '1' ORDER BY Service ASC";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '<option value="'.$row["Service"].'">'.$row["Service"].'</option>';
	}
	return $output;
}


function fill_zone($connect)
{
	$query = "SELECT DISTINCT(Service_zone) FROM medical WHERE service_status = '1' ORDER BY Service_zone ASC";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '<option value="'.$row["Service_zone"].'">'.$row["Service_zone"].'</option>';
	}
	return $output;
}

function fill_grade($connect)
{
	$query = "SELECT DISTINCT(doctor_grade) FROM medical WHERE service_status = '1' ORDER BY doctor_grade DESC";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '<option value="'.$row["doctor_grade"].'">'.$row["doctor_grade"].'</option>';
	}
	return $output;
}

function get_user_name($connect, $user_id)
{
	$query = "
	SELECT user_name FROM user_details WHERE user_id = '".$user_id."'
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row['user_name'];
	}
}
?>
