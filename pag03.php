<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
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
            <h1>Notas</h1>
            <form action="" method="post">
                1º Nota:<input type="text" name="nota1" class="caixa"> <br>
                2º Nota:<input type="text" name="nota2" class="caixa"> <br>
                3º Nota:<input type="text" name="nota3" class="caixa"> <br>
                <input type="submit" value="Nota Final" name="final">
            </form>
        </div>
    </div>


    <?php

    if ($_POST) {
        $n1 = $_POST['nota1'] * 2;
        $n2 = $_POST['nota2'] * 3;
        $n3 = $_POST['nota3'] * 5;

        if (isset($_POST['final'])) {
            $f = ($n1 + $n2 + $n3) / 10;
            echo ("<h1>Sua media final é: $f</h1>");
        }

    }

    ?>
<script src="pag01.js"></script>
</body>

</html>