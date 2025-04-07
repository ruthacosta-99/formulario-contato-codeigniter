<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmação</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container text-center" style="margin-top: 50px;">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Confirmação</h3>
        </div>
        <div class="panel-body">
            <p><?= $mensagem ?></p>
            <a href="<?= base_url('contato') ?>" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>
</body>
</html>