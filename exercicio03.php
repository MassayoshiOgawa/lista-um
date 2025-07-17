<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negativo Positivo Zero</title>
</head>

<body>
    <form method="POST" action="">
        <label for="">Digite um número: </label>
        <input type="number" name="numero" required>
        <button type="submit" name="verificarNum">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['verificarNum'])) {
            $num = $_POST['numero'];
            if (!$num) {
                echo "<p>O número inserido é zero</p>";
            } elseif ($num > 0) {
                echo "<p>O número inserido é positivo</p>";
            } elseif ($num < 0) {
                echo "<p>O número inserido é negativo</p>";
            }
        }
    }
    ?>

</body>

</html>