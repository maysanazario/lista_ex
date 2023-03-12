<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>custo de um carro novo ao consumidor</title>
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
            <form action="" method="post">
                Custo Inicial do carro: <input type="text" name="vi" class="caixa">
                <input type="submit" value="Calcular" name="c">
            </form>
        </div>
    </div>

    <?php
    if ($_POST) {
        $vi = $_POST['vi'];
        $pdistribuidor = $vi * 28 / 100;
        $imposto = $vi * 45 / 100;

        if (isset($_POST['c'])) {
            $f = $vi + $pdistribuidor + $imposto;
            echo ("<h1>O valor final do seu carro é: $f</h1>");
        }
    }

    ?>
    <script src="pag01.js"></script>
</body>

</html>