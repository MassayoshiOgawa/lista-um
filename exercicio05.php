<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero amigo</title>
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
                
                for ($i = 1; $i < $nm1; $i++) {
                    if($nm1%$i == 0){
                        $soma += $i;
                    }
                }

                echo "<p>A soma: $soma, e os números são: $nm1, $nm2</p>";
                if ($soma == $nm2) {
                    echo "<p>É número amigo</p>";
                } else {
                    echo "<p>Não é número amigo<p>";
                }
            }
        }
    ?>
</body>
</html>