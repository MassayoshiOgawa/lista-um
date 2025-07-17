<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma do intervalo</title>
</head>
<body>
     <form method="POST" action="">
        <label for="">Insira os campos com números:</label>
        <br>
        <input type="number" name="nm1">
        <br>
        <input type="number" name="nm2">
        <br>
        <button type="submit" name="verificar">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['verificar'])) {
                $nm1 = $_POST['nm1'];
                $nm2 = $_POST['nm2'];
                $soma = 0;
                for ($i = $nm1+1; $i < $nm2; $i++){
                        $soma += $i;
                }
                echo "Soma do intervalo: $soma";
            }
        }
    ?>
</body>
</html>