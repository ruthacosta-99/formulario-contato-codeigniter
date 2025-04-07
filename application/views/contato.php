<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contato</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Entre em contato</h2>
    <form id="form-contato" action="<?= base_url('contato/enviar') ?>" method="post">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Mensagem:</label>
            <textarea name="mensagem" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<script>
    $(document).ready(function () {
        $('#form-contato').submit(function (e) {
            let nome = $('input[name="nome"]').val().trim();
            let email = $('input[name="email"]').val().trim();
            let mensagem = $('textarea[name="mensagem"]').val().trim();

            if (nome === '' || email === '' || mensagem === '') {
                alert('Por favor, preencha todos os campos.');
                e.preventDefault(); // Impede o envio do formulário
            }
        });
    });
</script>

</body>
</html>