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

    public function criar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $database = new Database();
            $db = $database->getConnection();
            $suplemento = new Suplemento($db);
            
            $suplemento->criar($_POST['nome'], $_POST['marca'], $_POST['peso_total_gramas'], $_POST['dose_diaria_gramas']);
            header("Location: index.php");
        }
    }

    public function excluir($id) {
        $database = new Database();
        $db = $database->getConnection();
        $suplemento = new Suplemento($db);
        
        $suplemento->deletar($id);
        header("Location: index.php");
    }
}
?>
