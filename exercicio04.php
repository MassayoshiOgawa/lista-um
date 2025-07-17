<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <form method="POST" action="">
        <label for="">Insira um número:</label>
        <input type="number" name="nm" min="0" required>
        <button type="submit" name="fazerFatorial">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fazerFatorial'])) {
            $num = (int)$_POST['nm'];
            $result = 1;

            if ($num === 0) {
                $result = 1;
            } else {
                for ($i = $num; $i > 1; $i--) {
                    $result *= $i;
                }
            }

            echo "<p>Fatorial de $num é $result</p>";
        }
    ?>
</body>
</html>
