<!DOCTYPE html>
<html>
<head>
    <title>Registrar Empleado</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <h2>Registrar Empleado</h2>
    <form method="POST" action="index.php?accion=crear">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="number" name="salario_base" placeholder="Salario Base" step="0.01" required><br>
        <input type="number" name="comision_pct" placeholder="Comisión (%)" step="0.01" required><br>
        <button type="submit">Guardar</button>
    </form>
    <a href="index.php?accion=listar">Volver al listado</a>
</body>
</html>
