<!DOCTYPE html>
<html>
<head>
    <title>Registrar Empleado</title>
    <link rel="stylesheet" href="/examen_avanzada_55223517/nomina/estilos/estilo.css">
</head>
<body>

    <header>
        Registrar Empleado
    </header>

    <div class="container">
        <form method="POST" action="index.php?accion=crear">
            <input type="text" name="nombre" placeholder="Nombre" required style="display:block; margin-bottom: 1rem; padding: 0.5rem; width: 100%; max-width: 400px;"><br>
            <input type="number" name="salario_base" placeholder="Salario Base" step="0.01" required style="display:block; margin-bottom: 1rem; padding: 0.5rem; width: 100%; max-width: 400px;"><br>
            <input type="number" name="comision_pct" placeholder="Comisión (%)" step="0.01" required style="display:block; margin-bottom: 1rem; padding: 0.5rem; width: 100%; max-width: 400px;"><br>
            
            <button type="submit">Guardar</button>
        </form>

        <br>
        <a href="index.php?accion=listar">
            <button>Volver al listado</button>
        </a>
    </div>

</body>
</html>
