<?php
require_once 'controllers/SuplementoController.php';

$controller = new SuplementoController();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action == 'criar') {
    $controller->criar();
} elseif ($action == 'excluir' && isset($_GET['id'])) {
    $controller->excluir($_GET['id']);
} else {
    $controller->index();
}
?>