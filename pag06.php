<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo aproximado de download </title>
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
                Tamanho em arquivo Download(MB): <input type="text" name="D" id="">
                Velocidade da internet(Mbps): <input type="text" name="I" id="">
                <input type="submit" value="Calcular" name="calcular">
            </form>
        </div>
    </div>

    <?php

    if ($_POST) {
        $ta = $_POST['D'];
        $vi = $_POST['I'];

        if (isset($_POST['calcular'])) {
            $tas = $vi / 8;
            $ts = $ta / $tas;
            $ts = $ts * 60;
            echo ("<h1>O tempo aproximado de download do arquivo será de $ts minutos</h1>");
        }

    }
    ?>
    <script src="pag01.js"></script>
</body>

</html>