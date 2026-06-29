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