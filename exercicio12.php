<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vogais</title>
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
                $palin = 0;
                $voga = "aeiou";
                for ($i = 0;$i < $lgn; $i++) {
                    for ($j = 0; $j <= 5; $j++) {
                        if ($tt[$i] == $voga[$j]) {
                            $palin += 1;
                        }
                    }
                }
                    echo "$tt tem $palin vogais";
            }
        }
    ?>
</body>
</html>