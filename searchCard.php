<?php

	$cardName = filter_input(INPUT_POST, 'cardName');
	//$pointValue = filter_input(INPUT_POST, 'pointValue');
	if(!empty($cardName)){
		// echo "Card name is: " . $cardName . "<br />";
	} else{
		echo "card name is empty";
		die();
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
	$sql = "INSERT INTO Cards (Card_Name, Point_Value) VALUES ('$cardName', $pointValue)";
    $search = "SELECT Card_Name FROM Cards WHERE Card_Name LIKE '%$cardName%'";
	mysql_select_db('ckari');
	$retval = mysql_query($search, $connect);

	if(! $retval ){ die('COULD NOT GET DATA: ' . mysql_error()); }
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		echo "Found card - " . $row["Card_Name"]. " - in the database" . "<br> ";

	}

	mysql_close($connect);
?>
