<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "components/navBar.php";?>

    <form action="" method="post">
        <label for="">Responsável</label>
        <input type="text" name="responsavel">

        <label for="">Telefone</label>
        <input type="text" name="telefone">
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>