<?php 

// Procesar y guardar en la base de datos los proyectos

if(!isset($_POST) || empty($_POST)) {
	die('Wrong method');
}

require('connectdb.php');


$connection = connectDB("localhost", "root", "", "innovaction");

// GET
// POST




// Agarrar lo que te manda el form
// Guardarlo en la base de datos


$query = "INSERT INTO proyectos(Titulo, Descripcion, FInicio, Duracion, IdCampus, Ocupa) VALUES(?, ?, ?, ?, ?, 10)";

$stmt = $connection->prepare($query);
$stmt->bind_param("sssis", $_POST['titulo'], $_POST['descripcion'], $_POST['finicio'], $_POST['duracion'], $_POST['campus']);

$success = false;
if($stmt->execute()){
	$success = true;
}



$stmt->close();
$connection->close();

if($success)
	echo "Successfully stored project";
else
	echo "Failed to store project";