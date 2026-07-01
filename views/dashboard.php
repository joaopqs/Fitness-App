<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle de Suplementação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Meu Estoque de Suplementos</h2>
        <form action="index.php?action=criar" method="POST" class="mb-4 row g-3 bg-white p-3 shadow-sm rounded">
            <div class="col-md-3">
                <input type="text" name="nome" class="form-control" placeholder="Suplemento" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="marca" class="form-control" placeholder="Marca" required>
            </div>
            <div class="col-md-2">
                <input type="number" name="peso_total_gramas" class="form-control" placeholder="Peso Total (g)" required>
            </div>
            <div class="col-md-2">
                <input type="number" name="dose_diaria_gramas" class="form-control" placeholder="Dose (g)" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success w-100">Adicionar</button>
            </div>
        </form>
        <table class="table table-bordered bg-white shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>Suplemento</th>
                    <th>Marca</th>
                    <th>Peso Total (g)</th>
                    <th>Dose Diária (g)</th>
                    <th>Previsão de Duração</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suplementos as $sup): ?>
                <tr>
                    <td><?= $sup['nome'] ?></td>
                    <td><?= $sup['marca'] ?></td>
                    <td><?= $sup['peso_total_gramas'] ?>g</td>
                    <td><?= $sup['dose_diaria_gramas'] ?>g</td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary" 
                                onclick="calcularDias(<?= $sup['peso_total_gramas'] ?>, <?= $sup['dose_diaria_gramas'] ?>)">
                            Calcular Dias Restantes
                        </button>
                        <a href="index.php?action=editar&id=<?= $sup['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="index.php?action=excluir&id=<?= $sup['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        function calcularDias(pesoTotal, doseDiaria) {
            if(doseDiaria > 0) {
                let dias = Math.floor(pesoTotal / doseDiaria);
                alert("Este suplemento vai durar aproximadamente " + dias + " dias mantendo essa dose.");
            } else {
                alert("Dose diária inválida.");
            }
        }
    </script>
</body>
</html>