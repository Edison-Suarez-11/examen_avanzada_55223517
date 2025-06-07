<?php
require_once 'config/database.php';

class Empleado {
    private $conn;
    private $table = "empleados";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    public function obtenerTodos() {
        $query = "SELECT *, (salario_base + (salario_base * comision_pct / 100)) AS salario_total FROM " . $this->table;
        return $this->conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registrar($nombre, $salario_base, $comision_pct) {
        $query = "INSERT INTO " . $this->table . " (nombre, salario_base, comision_pct) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nombre, $salario_base, $comision_pct]);
    }
}