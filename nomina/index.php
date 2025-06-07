<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Aplicación - Nómina</title>
    <link rel="stylesheet" href="/examen_avanzada_55223517/nomina/estilos/estilo.css">
</head>
<body>

<?php
require_once 'controlador/empleadocontroller.php';

$accion = $_GET['accion'] ?? 'listar';
$controller = new empleadocontroller();

switch ($accion) {
    case 'crear':
        $controller->crear();
        break;
    case 'listar':
    default:
        $controller->listar();
        break;
}
?>

</body>
</html>
