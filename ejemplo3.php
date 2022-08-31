<?php 
	
	$numeroUno = $_GET['numeroUno'];
	$numeroDos = $_GET['numeroDos'];
	$numeroTres =$_GET['numeroTres'];

	if ($numeroUno >= $numeroDos && $numeroUno >= $numeroTres) {

		echo "<h1> El numero mayor es el numero uno: ".$numeroUno."</h1>";

		} elseif ($numeroDos > $numeroTres) {
		  
			echo "<h1> El numero mayor es el numero dos: ".$numeroDos."</h1>";

		  }  else {

		  echo "<h1> El numero mayor es el numero Tres: ".$numeroTres."</h1>";

		  }



 ?>