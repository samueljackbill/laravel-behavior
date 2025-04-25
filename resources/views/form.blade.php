<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário :: Teste de Rotas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-primary bg-primary justify-content-between">
        <div class="container">
            <a href="#" class="navbar-brand mb-0 h1">B E <b>H A V I O R</b></a>
            <button type="button" class="btn btn-disabled" disabled>Login</button>
        </div>
    </nav>

    <div class="container my-5">

        <form action="#" method="post" autocomplete="off">
            <div class="form-group my-3">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" value="Samuel">
            </div>
            <div class="form-group my-3">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" id="sobrenome" name="sobrenome" class="form-control" value="Pires">
            </div>
            <div class="form-group my-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="samuel.adiplix@gmail.com">
            </div>
            <button class="btn btn-primary my-3" type="submit">Cadastrar</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>