<?php
//error_reporting(0);
$hostname = "ec2-54-91-178-234.compute-1.amazonaws.com";
$database = "d5oiuu5n5pjd3a";
$username = "ljhinkoxaubwmq";
$password = "b74f2b65cdd29955d711d7e813b4bae5f28db37c953ffa13bb363ad2fe6e360a";
$port = "5432"

// Create connection
$conn = new pg_connect("host=$hostname, dbname=$database, user=$username, password=$password");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//set blank values
$routine_name = NULL;
$AI = NULL;
$wth = NULL;
$phrase = NULL;
$schedule = NULL;
$extra_devices_1 = NULL; 
$extra_devices_2 = NULL; 
$extra_devices_3 = NULL; 
$extra_devices_4 = NULL; 
$extra_devices_5 = NULL; 
$extra_devices_6 = NULL; 
$extra_devices_7 = NULL; 
$extra_devices_8 = NULL; 
$extra_devices_9 = NULL; 
$extra_devices_10 = NULL;
$location = NULL;
$location = NULL; 
$action_1 = NULL; 
$action_2 = NULL; 
$action_3 = NULL; 
$action_4 = NULL; 
$action_5 = NULL; 
$action_6 = NULL; 
$action_7 = NULL; 
$action_8 = NULL; 
$action_9 = NULL; 
$action_10 = NULL; 
$action_desc_1 = NULL; 
$action_desc_2 = NULL; 
$action_desc_3 = NULL; 
$action_desc_4 = NULL; 
$action_desc_5 = NULL; 
$action_desc_6 = NULL; 
$action_desc_7 = NULL; 
$action_desc_8 = NULL; 
$action_desc_9 = NULL; 
$action_desc_10 = NULL;
$routine_summary = NULL;
$creator = NULL; 

//assign variables so it can check if fields are there or not
//retrive the values from the form
$routine_name = pg_escape_string($conn, $_REQUEST['routine_name']);
$AI = pg_escape_string($conn, $_REQUEST['AI']);
$wth = pg_escape_string($conn, $_REQUEST['wth']);
$phrase = pg_escape_string($conn, $_REQUEST['enter_voice_phrase']);
$schedule = pg_escape_string($conn, $_REQUEST['schedule']);
$extra_devices_1 = pg_escape_string($conn, $_REQUEST['extra_devices'][0]);
$extra_devices_2 = pg_escape_string($conn, $_REQUEST['extra_devices'][1]);
$extra_devices_3 = pg_escape_string($conn, $_REQUEST['extra_devices'][2]);
$extra_devices_4 = pg_escape_string($conn, $_REQUEST['extra_devices'][3]);
$extra_devices_5 = pg_escape_string($conn, $_REQUEST['extra_devices'][4]);
$extra_devices_6 = pg_escape_string($conn, $_REQUEST['extra_devices'][5]);
$extra_devices_7 = pg_escape_string($conn, $_REQUEST['extra_devices'][6]);
$extra_devices_8 = pg_escape_string($conn, $_REQUEST['extra_devices'][7]);
$extra_devices_9 = pg_escape_string($conn, $_REQUEST['extra_devices'][8]);
$extra_devices_10 = pg_escape_string($conn, $_REQUEST['extra_devices'][9]);
$location = pg_escape_string($conn, $_REQUEST['location']);
$action_1 = pg_escape_string($conn, $_REQUEST['actions'][0]);
$action_2 = pg_escape_string($conn, $_REQUEST['actions'][1]);
$action_3 = pg_escape_string($conn, $_REQUEST['actions'][2]);
$action_4 = pg_escape_string($conn, $_REQUEST['actions'][3]);
$action_5 = pg_escape_string($conn, $_REQUEST['actions'][4]);
$action_6 = pg_escape_string($conn, $_REQUEST['actions'][5]);
$action_7 = pg_escape_string($conn, $_REQUEST['actions'][6]);
$action_8 = pg_escape_string($conn, $_REQUEST['actions'][7]);
$action_9 = pg_escape_string($conn, $_REQUEST['actions'][8]);
$action_10 = pg_escape_string($conn, $_REQUEST['actions'][9]);
$action_desc_1 = pg_escape_string($conn, $_REQUEST['action_description'][0]);
$action_desc_2 = pg_escape_string($conn, $_REQUEST['action_description'][1]);
$action_desc_3 = pg_escape_string($conn, $_REQUEST['action_description'][2]);
$action_desc_4 = pg_escape_string($conn, $_REQUEST['action_description'][3]);
$action_desc_5 = pg_escape_string($conn, $_REQUEST['action_description'][4]);
$action_desc_6 = pg_escape_string($conn, $_REQUEST['action_description'][5]);
$action_desc_7 = pg_escape_string($conn, $_REQUEST['action_description'][6]);
$action_desc_8 = pg_escape_string($conn, $_REQUEST['action_description'][7]);
$action_desc_9 = pg_escape_string($conn, $_REQUEST['action_description'][8]);
$action_desc_10 = pg_escape_string($conn, $_REQUEST['action_description'][9]);
$routine_summary = pg_escape_string($conn, $_REQUEST['describe']);
$creator = pg_escape_string($conn, $_REQUEST['creator']);

if ($routine_name == NULL) {
	echo "Routine Name is required, routine not submitted!";
} elseif ($routine_summary == NULL) {
	echo "Routine Summary is required, routine not submitted!";
} elseif ($creator == NULL) {
	echo "Creator is required, routine not submitted!";
} else {

	$sql = "INSERT INTO routines (Name, AI, WTH, Phrase, Schedule, SmartHome_1, SmartHome_2, SmartHome_3, SmartHome_4, SmartHome_5, SmartHome_6, SmartHome_7, SmartHome_8, SmartHome_9, SmartHome_10, Location, Action_1, ActionDesc_1, Action_2, ActionDesc_2, Action_3, ActionDesc_3, Action_4, ActionDesc_4, Action_5, ActionDesc_5, Action_6, ActionDesc_6, Action_7, ActionDesc_7, Action_8, ActionDesc_8, Action_9, ActionDesc_9, Action_10, ActionDesc_10, Routine_Summary, Author) VALUES ('$routine_name', '$AI', '$wth', '$phrase', '$schedule', '$extra_devices_1', '$extra_devices_2', '$extra_devices_3', '$extra_devices_4', '$extra_devices_5', '$extra_devices_6', '$extra_devices_7', '$extra_devices_8', '$extra_devices_9', '$extra_devices_10', '$location', '$action_1', '$action_desc_1', '$action_2', '$action_desc_2', '$action_3', '$action_desc_3', '$action_4', '$action_desc_4', '$action_5', '$action_desc_5', '$action_6', '$action_desc_6', '$action_7', '$action_desc_7', '$action_8', '$action_desc_8', '$action_9', '$action_desc_9', '$action_10', '$action_desc_10', '$routine_summary', '$creator')";


	//$sql = "SELECT * from users";
	$result = $conn->query($sql);
	if ($result == TRUE) {
		echo "Succesfully submitted routine!";
	} else {
		echo "Failed please contanct...";
		//echo "Error" . mysqli_error($conn);
	}
}
$conn->close();
?>
