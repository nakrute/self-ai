<?php
//error_reporting(E_ALL);
//$servername = "ec2-54-91-178-234.compute-1.amazonaws.com";
//$username = "ljhinkoxaubwmq";
//$password = "b74f2b65cdd29955d711d7e813b4bae5f28db37c953ffa13bb363ad2fe6e360a";
//$dbname = "d5oiuu5n5pjd3a";
//$port = "5432";

// Create connection
$conn_string = "host=ec2-54-91-178-234.compute-1.amazonaws.com port=5432 dbname=d5oiuu5n5pjd3a user=ljhinkoxaubwmq password=b74f2b65cdd29955d711d7e813b4bae5f28db37c953ffa13bb363ad2fe6e360a";
$conn = pg_connect($conn_string);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//set blank values
$routine_name = NULL;
$routine_summary = NULL;
$creator = NULL; 

//assign variables so it can check if fields are there or not
//retrive the values from the form
$routine_name = $_POST['routine_name'];
$AI = $_POST['AI'];
$wth = $_POST['wth'];
$phrase = $_POST['enter_voice_phrase'];
$schedule = $_POST['schedule'];
$extra_devices_1 = $_POST['extra_devices'][0];
$extra_devices_2 = $_POST['extra_devices'][1];
$extra_devices_3 = $_POST['extra_devices'][2];
$extra_devices_4 = $_POST['extra_devices'][3];
$extra_devices_5 = $_POST['extra_devices'][4];
$extra_devices_6 = $_POST['extra_devices'][5];
$extra_devices_7 = $_POST['extra_devices'][6];
$extra_devices_8 = $_POST['extra_devices'][7];
$extra_devices_9 = $_POST['extra_devices'][8];
$extra_devices_10 = $_POST['extra_devices'][9];
$location = $_POST['location'];
$action_1 = $_POST['actions'][0];
$action_2 = $_POST['actions'][1];
$action_3 = $_POST['actions'][2];
$action_4 = $_POST['actions'][3];
$action_5 = $_POST['actions'][4];
$action_6 = $_POST['actions'][5];
$action_7 = $_POST['actions'][6];
$action_8 = $_POST['actions'][7];
$action_9 = $_POST['actions'][8];
$action_10 = $_POST['actions'][9];
$action_desc_1 = $_POST['action_description'][0];
$action_desc_2 = $_POST['action_description'][1];
$action_desc_3 = $_POST['action_description'][2];
$action_desc_4 = $_POST['action_description'][3];
$action_desc_5 = $_POST['action_description'][4];
$action_desc_6 = $_POST['action_description'][5];
$action_desc_7 = $_POST['action_description'][6];
$action_desc_8 = $_POST['action_description'][7];
$action_desc_9 = $_POST['action_description'][8];
$action_desc_10 = $_POST['action_description'][9];
$routine_summary = $_POST['describe'];
$creator = $_POST['creator'];

if ($routine_name == NULL) {
	echo "Routine Name is required, routine not submitted!";
} elseif ($routine_summary == NULL) {
	echo "Routine Summary is required, routine not submitted!";
} elseif ($creator == NULL) {
	echo "Creator is required, routine not submitted!";
} else {
	
	//Get the timestamp (date)
	$t=time();
	$curr_date = date("Y-m-d",$t);
	$sql = 'INSERT INTO public.routines("Name", "AI", "WTH", "Phrase", "Schedule", "SmartHome_1", "	 SmartHome_2", "	 SmartHome_3", "	 SmartHome_4", "	 SmartHome_5", "	 SmartHome_6", "	 SmartHome_7", "	 SmartHome_8", "	 SmartHome_9", "	 SmartHome_10", "Location", "Action_1", "ActionDesc_1", "Action_2", "ActionDesc_2", "Action_3", "ActionDesc_3", "Action_4", "ActionDesc_4", "Action_5", "ActionDesc_5", "Action_6", "ActionDesc_6", "Action_7", "ActionDesc_7", "Action_8", "ActionDesc_8", "Action_9", "ActionDesc_9", "Action_10", "ActionDesc_10", "Routine_Summary", "Author", "Creation_Date") VALUES (' ."'" .$routine_name ."'" .', ' ."'" .$AI ."'" .', ' ."'" .$wth ."'" .', ' ."'" .$phrase ."'" .', ' ."'" .$schedule ."'" .', ' ."'" .$extra_devices_1 ."'" .', ' ."'" .$extra_devices_2 ."'" .', ' ."'" .$extra_devices_3 ."'" .', ' ."'" .$extra_devices_4 ."'" .', ' ."'" .$extra_devices_5 ."'" .', ' ."'" .$extra_devices_6 ."'" .', ' ."'" .$extra_devices_7 ."'" .', ' ."'" .$extra_devices_8 ."'" .', ' ."'" .$extra_devices_9 ."'" .', ' ."'" .$extra_devices_10 ."'" .', ' ."'" .$location ."'" .', ' ."'" .$action_1 ."'" .', ' ."'" .$action_desc_1 ."'" .', ' ."'" .$action_2 ."'" .', ' ."'" .$action_desc_2 ."'" .', ' ."'" .$action_3 ."'" .', ' ."'" .$action_desc_3 ."'" .', ' ."'" .$action_4 ."'" .', ' ."'" .$action_desc_4 ."'" .', ' ."'" .$action_5 ."'" .', ' ."'" .$action_desc_5 ."'" .', ' ."'" .$action_6 ."'" .', ' ."'" .$action_desc_6 ."'" .', ' ."'" .$action_7 ."'" .', ' ."'" .$action_desc_7 ."'" .', ' ."'" .$action_8 ."'" .', ' ."'" .$action_desc_8 ."'" .', ' ."'" .$action_9 ."'" .', ' ."'" .$action_desc_9 ."'" .', ' ."'" .$action_10 ."'" .', ' ."'" .$action_desc_10 ."'" .', ' ."'" .$routine_summary ."'" .', ' ."'" .$creator ."'" .', ' ."'" .$curr_date ."'" .')';
	//$sql = "SELECT * from routines";
	$result = pg_query($conn, $sql);
	if ($result == TRUE) {
		echo "Succesfully submitted routine!";
	} else {
		echo "Failed please contact...";
		//echo "Error" . mysqli_error($conn);
	}
}
pg_close($conn);
?>
