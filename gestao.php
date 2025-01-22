<?php include "php/selectTarefas.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "components/navBar.php"; ?>

    <section>

        <div id="coluna1">
            <h4>Ínicio</h4>
        </div>

        <div id="coluna2">
            <h4>Meio</h4>
        </div>

        <div id="coluna3">
            <h4>Fim</h4>
        </div>

    </section>

</body>

</html>
<!-- Dados das tarefas em JSON -->
<script id="tarefas" type="application/json">
    <?= json_encode($registros) ?>
</script>

<!-- Referência ao arquivo JavaScript externo -->
<script src="js/script.js"></script>