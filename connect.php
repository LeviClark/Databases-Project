<?php
		
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

	
	$sql = 'SELECT * FROM Cards';
	mysql_select_db('ckari');
	$retval = mysql_query($sql, $connect);
		
	if(! $retval ){ die('COULD NOT GET DATA: ' . mysql_error()); }

	while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		echo "TEST: {$row['Card_Name']} <br> ";
			
	}

	echo "FETCHED SUCCESSFULLY";
	mysql_close($connect);
?>
