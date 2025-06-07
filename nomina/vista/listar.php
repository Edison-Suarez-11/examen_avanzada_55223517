<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <h2>Lista de Empleados</h2>
    <a href="index.php?accion=crear">Registrar nuevo</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Salario Base</th>
            <th>Comisión (%)</th>
            <th>Salario Total</th>
        </tr>
        <?php foreach ($empleados as $emp): ?>
        <tr>
            <td><?= $emp['id'] ?></td>
            <td><?= htmlspecialchars($emp['nombre']) ?></td>
            <td>$<?= number_format($emp['salario_base'], 2) ?></td>
            <td><?= $emp['comision_pct'] ?>%</td>
            <td>$<?= number_format($emp['salario_total'], 2) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

