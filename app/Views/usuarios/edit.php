<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($usuario) ? 'Editar Usuário' : 'Novo Usuário' ?></title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4"><?= isset($usuario) ? 'Editar Usuário' : 'Novo Usuário' ?></h1>
        
       
        <form action="<?= isset($usuario) ? base_url('usuario/update/' . $usuario['id']) : base_url('usuario/store') ?>" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($usuario) ? esc($usuario['nome']) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= isset($usuario) ? esc($usuario['email']) : '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" value="" placeholder="<?= isset($usuario) ? 'Deixe em branco para manter a senha atual' : '' ?>" <?= isset($usuario) ? '' : 'required' ?>>
            </div>
            <button type="submit" class="btn btn-primary"><?= isset($usuario) ? 'Atualizar' : 'Salvar' ?></button>
        </form>
    </div>

    <!-- Bootstrap JS (Opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
