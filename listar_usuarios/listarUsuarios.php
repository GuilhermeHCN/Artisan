<?php
	$servername = "localhost";
	$database = "u553234134_Artisan";
	$username = "u553234134_Gizaac";
	$password = "Gizaac12343124";
// Create connection
	$connection = mysqli_connect($servername, $username, $password, $database);
// Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}


	// $query = " select Id_Cliente, Nome_Cliente from Cliente ";

	echo $query;
	$resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');

	while ($rowp = mysqli_fetch_array($resp)) {		?>					

							

	
												
	
<BR/><a href='update.php?Id_Cliente=<?php echo $rowp["Id_Cliente"];  ?>'>Alterar usuário<img src='img.jpg'></a>  <?php echo $rowp["Id_Cliente"]; ?>-<?php echo $rowp["Nome_Cliente"]  ?><br> <br> 
	
	
	
	<?php 
	};

//mysqli_select_db($connection,$database);
?>