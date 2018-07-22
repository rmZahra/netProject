<?PHP
	$hostname='localhost';
	$dbname='project';
	$dbpass='';
	$dbuser='root';
	$con=mysql_connect($hostname,$dbuser,$dbpass);

		if(!$con)
			{
				die ('could not connect!' . mysql_error()); 
			}
			mysql_set_charset('UTF-8',$con);
			mysql_select_db($dbname, $con); 
			

		
	
	$adminuser="admin";
	$adminpass="123";
		
?>