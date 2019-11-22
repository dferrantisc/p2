<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		include("connection.php");

		$tipo = $_POST["tipo"]; //insert, update, delete
		$sql = "";

		switch ($tipo) {
			case 'insert':
				$nomevend = $_POST["nomevend"];
				$salario = $_POST["salario"];
				$codsetor = $_POST["codsetor"];
				$sql = "INSERT INTO `vendedor`(`NOMEVEND`, `SALARIO`, `CODSETOR`) VALUES ('$nomevend','$salario',$codsetor)";
				break;
			case 'update':
				$id = $_POST["id"];
				$nomevend = $_POST["nomevend"];
				$salario = $_POST["salario"];
				$codsetor = $_POST["codsetor"];
				$sql = "UPDATE `vendedor` SET `NOMEVEND`='$nomevend',`SALARIO`='$salario',`CODSETOR`=$codsetor WHERE `CODVEND`=$id";
				break;
			case 'delete':
				$id = $_POST["id"];
				$sql = "DELETE FROM `vendedor` WHERE `CODVEND`=$id";
				break;
		}

		echo $sql;

		if($sql){
			$result = $conn->query($sql);
		}

	}else{
		header("Location: index.php");
	}
?>