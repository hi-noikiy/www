<?
	// MYSQLi INSTANCE
	function mysqli_instance() {
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
		if ($mysqli->connect_error) {
			die("Connect Error (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
		}
		
		if ($mysqli->character_set_name() != "utf8") {
			die("Error loading character set utf8");
		}
		
		return $mysqli;
	}
	
	// MYSQLi FETCH FIRST ROW
	function fetch_first_row($mysqli, $query) {
		$fetch_first_row = null;
		
		if ($res = $mysqli->query($query)) {
			if ($row = $res->fetch_row())
				$fetch_first_row = $row;
			
			$res->close();
		}
		
		return $fetch_first_row;
	}
?>