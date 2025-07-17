<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Num Par</title>
</head>
<body>
    <form method="POST" action="">
        <label for="">Digite um Número:</label>
        <input type="number" name="numero">
        <button type="submit" name="verificar_num">Enviar</button>
    </form>
    <?php
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            if (isset($_POST['verificar_num'])) {
                $num = $_POST['numero'];
                if ($num) {
                    if ($num%2 == 0) {
                        echo "<p>O número $num é par</p>";
                    } else {
                        echo "<p>O número $num é impar</p>";
                    }
                }
            }
        }
    ?>
</body>
</html>