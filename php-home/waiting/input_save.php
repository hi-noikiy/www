<?
	// REQUIRE FILES (필수)
	require "./set_init_data.inc.php";
	require "./config.inc.php";
	require "./function.inc.php";
	
	header("Content-Type:application/json; charset=utf-8");
	
	// MYSQLi INSTANCE
	$mysqli = mysqli_instance();
	
	
	
	// DML
	if ($act == "insert") $mysqli->begin_transaction() or exit($mysqli->error);
	
	if ($act == "insert") {
		list($id) = fetch_first_row($mysqli, "SELECT IFNULL(MAX(id), 0) + 1 FROM waiting");
		$waiting_date = date("Y") . "-" . date("m") . "-" . date("d");
		$waiting_time = $waiting_time_h . ":" . $waiting_time_m . ":00";
		
		$query = "INSERT INTO waiting (id, title, waiting_date, appoint_wait_cnt, test_wait_cnt, waiting_time, regi_date) VALUES ";
		$query .= "(" . $id . ", ";
		$query .= "'" . $title . "', ";
		$query .= "'" . $waiting_date . "', ";
		$query .= "'" . $appoint_wait_cnt . "', ";
		$query .= "'" . $test_wait_cnt . "', ";
		$query .= "'" . $waiting_time . "', ";
		$query .= "SYSDATE())";
		
		$mysqli->query($query) or exit($mysqli->error);
	}
	
	if ($act == "insert") $mysqli->commit() or exit($mysqli->error);
	
	
	
	// JSON
	echo '{"act":"' . $act . '","id":"' . $id . '"}';
	
	
	
	// MYSQLi CLOSE
	$mysqli->close();
?>