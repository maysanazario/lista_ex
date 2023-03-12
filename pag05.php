<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M para CM</title>
    <link rel="stylesheet" href="pag01.css">
</head>

<body>
    <div class="container">
        <div class="main">
        <div class="toggle-switch">
                <label class="switch-label">
                    <input type="checkbox" class="checkbox" id="chk">
                    <span class="slider"></span>
                </label>
            </div>
            <h1>Conversor de Metros para Centimetros</h1>
            <form action="" method="post">
                <input type="text" name="vm" class="caixa">
                <input type="submit" value="Converter">
            </form>
        </div>
    </div>

    <?php

    if ($_POST) {
        $m = $_POST['vm'];

        if (isset($_POST['vm'])) {
            $cm = $m * 100;

            echo ("<h1>Seu valor em metro é igual a $cm centimetros</h1>");
        }

    }

    ?>
    <script src="pag01.js"></script>
</body>

</html>