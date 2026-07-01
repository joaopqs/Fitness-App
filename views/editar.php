<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Editar Suplemento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Editar Suplemento</h4>
            </div>
            <div class="card-body">
                <form action="index.php?action=atualizar" method="POST">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                    
                    <div class="mb-3">
                        <label class="form-label">Suplemento</label>
                        <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($dados['nome']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Marca</label>
                        <input type="text" name="marca" class="form-control" value="<?= htmlspecialchars($dados['marca']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Peso Total (g)</label>
                        <input type="number" name="peso_total_gramas" class="form-control" value="<?= $dados['peso_total_gramas'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dose Diária (g)</label>
                        <input type="number" name="dose_diaria_gramas" class="form-control" value="<?= $dados['dose_diaria_gramas'] ?>" required>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Gravar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>