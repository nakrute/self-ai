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
echo "CONNECTED SUCCESFULLY";
$searcgcategory = NULL;
//retrive the values from the form
$searchcategory = pg_escape_string($conn, $_REQUEST['searchcategory']);
//echo $searchcategory;
$sql = "SELECT * FROM routines WHERE Name LIKE '%test%'";
echo "";
echo $searchcategory;
echo "";
echo $sql;

$result = $conn->query($sql);

if($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		if ($row['WTH'] == "Voice") 
		{
			if ($row[Action_2] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_3] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_4] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)"."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_5] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_6] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_7] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_8] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_9] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_10] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} else {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Phrase</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Phrase']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			}
		}
		elseif ($row['WTH'] == "Schedule")
		{
			if ($row[Action_2] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_3] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";				
			} elseif ($row[Action_4] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_5] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_6] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_7] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_8] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_9] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_10] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} else {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Schedule</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Schedule']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			}
		}
		elseif ($row['WTH'] == "Smart Home")
		{
			if ($row[Action_2] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_3] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_4] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_5] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";				
			} elseif ($row[Action_6] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_7] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_8] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_9] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_10] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} else {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Smart Home Devices</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['SmartHome_1']."<br>".$row['SmartHome_2']."<br>".$row['SmartHome_3']."<br>".$row['SmartHome_4']."<br>".$row['SmartHome_5']."<br>".$row['SmartHome_6']."<br>".$row['SmartHome_7']."<br>".$row['SmartHome_8']."<br>".$row['SmartHome_9']."<br>".$row['SmartHome_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			}
		}
		elseif ($row['WTH'] == "Location")
		{
			if ($row[Action_2] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_3] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_4] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_5] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";				
			} elseif ($row[Action_6] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_7] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_8] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_9] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_10] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} else {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Location</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>".$row['Location']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			}
		}
		elseif ($row['WTH'] == "Alarms")
		{
			if ($row[Action_2] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_3] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_4] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_5] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";				
			} elseif ($row[Action_6] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_7] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_8] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_9] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_10] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} else {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			}
		}
		elseif ($row['WTH'] == "Echo Button")
		{
			if ($row[Action_2] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_3] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_4] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_5] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";				
			} elseif ($row[Action_6] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_7] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_8] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_9] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} elseif ($row[Action_10] == "") {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			} else {
				echo "<table>
				  	  <tr>
				  	  <th>Name</th>
				  	  <th>AI</th>
			 	  	  <th>When This Happens</th>
				  	  <th>Action</th>
				  	  <th>Action Description</th>
				  	  <th>Routine Summary</th>
				  	  <th>Creator</th>
				  	  <th>Date Created</th>
				  	  </tr>";
			  	echo "<tr>";
			  	echo "<td>".$row['Name']."</td>";
		    	echo "<td>".$row['AI']."</td>";
		    	echo "<td>".$row['WTH']."</td>";
		    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
		    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
		    	echo "<td>".$row['Routine_Summary']."</td>";
		    	echo "<td>".$row['Author']."</td>";
		    	echo "<td>".$row['Creation_Date']."</td>";
			  	echo "</tr>";
			}
		}
		elseif ($row['WTH'] == "Guard")
		{
			echo "<table>
			  	  <tr>
			  	  <th>Name</th>
			  	  <th>AI</th>
		 	  	  <th>When This Happens</th>
			  	  <th>Action</th>
			  	  <th>Action Description</th>
			  	  <th>Routine Summary</th>
			  	  <th>Creator</th>
			  	  <th>Date Created</th>
			  	  </tr>";
		  	echo "<tr>";
		  	echo "<td>".$row['Name']."</td>";
	    	echo "<td>".$row['AI']."</td>";
	    	echo "<td>".$row['WTH']."</td>";
	    	echo "<td>"."1)".$row['Action_1']."<br>"."2)".$row['Action_2']."<br>"."3)".$row['Action_3']."<br>"."4)".$row['Action_4']."<br>"."5)".$row['Action_5']."<br>"."6)".$row['Action_6']."<br>"."7)".$row['Action_7']."<br>"."8)".$row['Action_8']."<br>"."9)".$row['Action_9']."<br>"."10)".$row['Action_10']."<br>"."</td>";
	    	echo "<td>"."1)".$row['ActionDesc_1']."<br>"."2)".$row['ActionDesc_2']."<br>"."3)".$row['ActionDesc_3']."<br>"."4)".$row['ActionDesc_4']."<br>"."5)".$row['ActionDesc_5']."<br>"."6)".$row['ActionDesc_6']."<br>"."7)".$row['ActionDesc_7']."<br>"."8)".$row['ActionDesc_8']."<br>"."9)".$row['ActionDesc_9']."<br>"."10)".$row['ActionDesc_10']."<br>"."</td>";
	    	echo "<td>".$row['Routine_Summary']."</td>";
	    	echo "<td>".$row['Author']."</td>";
	    	echo "<td>".$row['Creation_Date']."</td>";
		  	echo "</tr>";
		}
	}
	echo "</table>";
} else {
	echo "No results found :(";
}

pg_close($conn);
?>
