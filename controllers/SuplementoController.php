<?php
require_once 'config/Database.php';
require_once 'models/Suplemento.php';

class SuplementoController {
    public function index() {
        $database = new Database();
        $db = $database->getConnection();

        $suplemento = new Suplemento($db);

        $stmt = $suplemento->lerTodos();
        $suplementos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        require_once 'views/dashboard.php';
    }
}
?>
