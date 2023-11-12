<?php
$pwd = $_ENV['PWD'];
$user = $_ENV['USER'];
$db = mysqli_connect('localhost', $user, $pwd, 'appsalon');

// echo !$db ? "Error al conectar a la base de datos" : "Conexión exitosa";
if (!$db) {
    echo "Error al conectar a la base de datos";
    exit;
};
