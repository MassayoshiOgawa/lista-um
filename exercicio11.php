<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonCii</title>
</head>
<body>
     <form method="POST" action="">
        <label for="">Insira um texto:</label>
        <br>
        <input type="text" name="tt">
        <br>
        <button type="submit" name="verificar">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['verificar'])) {
                $tt = $_POST['tt'];
                $lgn = strlen($tt);
                $palin = true;
                for ($i = 0; $i < $lgn; $i++) {
                    $lgn -= 1;
                    if ($tt[$i] !== $tt[$lgn]) {
                        $palin = false;
                    }
                }
                if ($palin) {
                    echo "É palindromo";
                } else {
                    echo "Não é palindromo";
                }
            }
        }
    ?>
</body>
</html>