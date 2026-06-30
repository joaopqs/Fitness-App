<?php
class Suplemento {
    private $conn;
    private $table = "suplementos";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function lerTodos() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY data_cadastro DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function criar($nome, $marca, $peso_total, $dose_diaria) {
        $query = "INSERT INTO " . $this->table . " (nome, marca, peso_total_gramas, dose_diaria_gramas) VALUES (:nome, :marca, :peso, :dose)";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":marca", $marca);
        $stmt->bindParam(":peso", $peso_total);
        $stmt->bindParam(":dose", $dose_diaria);
        
        return $stmt->execute();
    }

    public function deletar($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>