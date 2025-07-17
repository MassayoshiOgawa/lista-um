<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>
<body>
     <form method="POST" action="">
        <label for="">Insira os campos com números:</label>
        <br>
        <input type="number" name="nm1">
        <br>
        <button type="submit" name="verificar">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['verificar'])) {
                $nm1 = $_POST['nm1'];
                $soma = 0;
                for ($i = 1; $i <= $nm1; $i++){
                    if ($i%2 == 0) {
                        $soma += 1;
                        echo "Divisor $i";
                        echo "<br>";
                    }
                }
            echo "Divisores: $soma";
            }
        }
    ?>
</body>
</html>