<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form method="POST" action="">
        <label for="">Insira um número</label>
        <input type="number" name="num">
        <button type="submit" name="mostrarTabuada">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['mostrarTabuada'])) {
                $num = $_POST['num'];
                if ($num){
                    for ($i = 1; $i <= 10; $i++) {
                        $result = $num * $i;
                        echo "<p>Mult $i: $result</p>";
                    }
                }
            }
        }
    ?>
</body>
</html>