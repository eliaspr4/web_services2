<?php
		$db_host = "u3y93bv513l7zv6o.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
		$db_name = "g4hh70qbo9s0xg8y";
		$db_user = "ff33i0703xc9naqx";
		$db_password = "xo5fmwejcfqlc21b";
		    
		$connection = mysql_connect(u3y93bv513l7zv6o.chr7pe7iynqr.eu-west-1.rds.amazonaws.com, g4hh70qbo9s0xg8y,xo5fmwejcfqlc21b ) or die("Connection Error: " .mysql_error());
		    
		mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
		@mysql_query("SET NAMES 'utf8'");

		$sql_query = "SELECT * FROM productos";
		$result = mysql_query($sql_query);
		$rows = array();
		while($r = mysql_fetch_assoc($result)) {
		$rows[] = $r;
		}
		print json_encode($rows);
?>



