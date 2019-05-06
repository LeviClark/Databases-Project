<?php
		
	// $dbhost = 'mysql.eecs.ku.edu';
	// $dbuser = 'ckari';
	// $dbpass = 'cuoxoh4i';

	// $connect = mysql_connect($dbhost, $dbuser, $dbpass);

	// if(! $connect) {
	// 	die('could not connect: ' . mysql_error());
	// }
	// else {
	// 	echo "connected <br>";
	// }
	
	// $sql = "SELECT Armies.Card_Name1, Cards.Point_Value FROM Armies, Cards WHERE Cards.Card_Name = Armies.Card_Name1 AND Armies.Army_Name = 'Awesome Army'";
	// mysql_select_db('ckari');
	// $retval = mysql_query($sql, $connect);
		
	
	// mysql_close($connect);
	$servername ="mysql.eecs.ku.edu";
	$myname = "ckari";
	$mypassword = "cuoxoh4i";
	$databasename = "ckari";
	$mysqli = new mysqli($servername, $myname, $mypassword, $databasename );

	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	echo "<center><h1>Here is the list</h1></center>";
	$query = "SELECT Armies.Card_Name1, Cards.Point_Value FROM Armies, Cards WHERE Cards.Card_Name = Armies.Card_Name1 AND Armies.Army_Name = 'Awesome Army'";
	$result = $mysqli->query($query);
	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			echo "<center><p>Card Name: " .$row["Card_Name1"]. "</p></center>";
			echo "<center><p>Point Value: " .$row["Point_Value"]. "</p></center>";
		}
	} else {
		echo "<center><h1>The user list is empty.</h1></center><br>";
	}
?>
