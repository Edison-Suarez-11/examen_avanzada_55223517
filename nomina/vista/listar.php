<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="/examen_avanzada_55223517/nomina/estilos/estilo.css">
</head>
<body>

    <header>
        Lista de Empleados
    </header>

    <div class="container">
        <a href="index.php?accion=crear">
            <button>Registrar nuevo</button>
        </a>

        <table>
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
    </div>

</body>
</html>