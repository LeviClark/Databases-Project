<?php

	$cardName = filter_input(INPUT_POST, 'cardName');
	$pointValue = filter_input(INPUT_POST, 'pointValue');
	if(!empty($cardName)){
		echo "Card name is: ";
	} else{
		echo "card name is empty";
		//die();
	}

	$dbhost = 'mysql.eecs.ku.edu';
	$dbuser = 'ckari';
	$dbpass = 'cuoxoh4i';
	$connect = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $connect) {
		die('could not connect: ' . mysql_error());
	}
	else {
		echo "connected <br>";
	}
	$randomArmy = "SELECT Card_Name, Point_Value FROM Cards ORDER BY RAND() LIMIT 5";
	$sql = "INSERT INTO Cards (Card_Name, Point_Value) VALUES ('$cardName', $pointValue)";
	mysql_select_db('ckari');
	$retval = mysql_query($randomArmy, $connect);

	if(! $retval ){ die('COULD NOT GET DATA: ' . mysql_error()); }
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		echo "Card Name: " . $row["Card_Name"]. " - Points: " . $row["Point_Value"]. "<br> ";

	}
	echo "FETCHED SUCCESSFULLY";
	mysql_close($connect);
?>
