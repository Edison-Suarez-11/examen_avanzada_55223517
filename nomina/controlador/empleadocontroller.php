<?php
require_once 'modelos/Empleado.php';

class EmpleadoController {

    public function listar() {
        $empleado = new Empleado();
        $empleados = $empleado->obtenerTodos();
        include 'vista/listar.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $salario_base = $_POST['salario_base'];
            $comision_pct = $_POST['comision_pct'];

            $empleado = new Empleado();
            $empleado->registrar($nombre, $salario_base, $comision_pct);
            header("Location: index.php?accion=listar");
        } else {
            include 'vista/crear.php';
        }
    }
}
