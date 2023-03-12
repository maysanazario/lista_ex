<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
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
            Valor 1: <input type="text" name="valorum" placeholder=" Digite 1º Valor" class="caixa">
            Valor 2: <input type="text" name="valordois" placeholder=" Digite 2º Valor" class="caixa">
            <input type="submit" name="btnsomar" value="+">
            <input type="submit" name="btnsub" value="-">
            <input type="submit" name="btnmult" value="x">
            <input type="submit" name="btndiv" value="÷">
            <input type="submit" name="btnpot" value="Xʸ" class="btn">
            <h1 name="retorna"></h1>
        </form>
    </div>
    </div>
    
    <?php
    if ($_POST) {
        $v1 = $_POST['valorum'];
        $v2 = $_POST['valordois']; 

        if (isset($_POST['btnsomar'])) {
            $r = $v1 + $v2;
            echo ("<h1>$r</h1>");
        } else if (isset($_POST['btnsub'])) {
            $r = $v1 - $v2;
            echo ("<h1>$r</h1>");
        } else if (isset($_POST['btnmult'])) {
            $r = $v1 * $v2;
            echo ("<h1>$r</h1>");
        } else if (isset($_POST['btndiv'])) {
            $r = $v1 / $v2;
            echo ("<h1>$r</h1>");
        } else if (isset($_POST['btnpot'])) {
            $r = $v1 ** $v2;
            echo ("<h1>$r</h1>");
        }

    }
    ?>

<script src="pag01.js"></script>
</body>

</html>