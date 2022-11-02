<?php
#Global vars
$GLOBALS['debug'] = 1;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheet/style.css">

    <script src="./js/script.js" defer></script>
</head>

<body class="container">
    <form action="#" method="post">

        <div class="row">
            <div class="col">
                <input type="text" name="charlenght" id="charlenght" class="form-control" value="12" disabled>
            </div>
            <div class="col-11">
                <input type="range" class="form-range" id="tamanho" min="0" max="12" value="12">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" name="senha" id="senha" class="form-control" disabled>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Software" class="form-label">Site/Software</label>
                    <input type="text" name="Software" id="Software" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="User" class="form-label">User</label>
                    <input type="text" name="User" id="User" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="btn-group">
                    <input class="btn btn-success" type="submit" value="Salvar" name="Salvar">
                    <button onclick="teste()">a</button>
                </div>
            </div>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>