<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cad. Projeto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "components/navBar.php";?>

    <form action="" method="post">

        <label for="">Descrição</label>
        <input type="text" name="descricao">

        <label for="">Responsável</label>
        <select name="" id="">
            <option value="">Jukinha</option>
            <option value="">Jucaco</option>
        </select>

        <label for="">Prioridade</label>
        <select name="" id="">
            <option value="">Baixa</option>
            <option value="">Média</option>
            <option value="">Alta</option>
        </select>

        <input type="hidden" name="situacao" value="1">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>