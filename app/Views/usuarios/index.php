<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Usuários</h1>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>


        <a href="<?= base_url('usuario/create') ?>" class="btn btn-primary mb-3">Novo Usuário</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?= esc($usuario['nome']) ?></td>
                        <td><?= esc($usuario['email']) ?></td>
                        <td><?= esc($usuario['senha']) ?></td>
                        <td>
                            <a href="<?= base_url('usuario/edit/' . $usuario['id']) ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="<?= base_url('usuario/delete/' . $usuario['id']) ?>" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-dkNOtTIFPoUdHLfuQpxNFGDIDmsL2tPQ2R2FHGzH+mTRqTQ1FgXtvd4HJs1EaJ98" crossorigin="anonymous"></script>
</body>

</html>