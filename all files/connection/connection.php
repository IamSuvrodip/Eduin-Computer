<?php 
	$host = 'localhost';
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = 'eduinenglish';

$conn =mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

if ($conn) {
	//connection successfully.......
	?>
	<script>
		alert('connection successful');
	</script>
	<?php
}
else{
	die('connection failed'.mysqli_connection_error());
}


 ?>