<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A&B</title>
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
            <h1>Troca Troca</h1>
            <form action="" method="post">
                A:<input type="text" name="a" class="caixa"> <br>
                B:<input type="text" name="b" class="caixa"> <br>
                <input type="submit" name="troca" value="Troca">
            </form>
        </div>
    </div>

    <?php

    if ($_POST) {
        $b = $_POST['b'];
        $a = $_POST['a'];
            $a = $b;
            $b = $_POST['a'];
            echo ("<h1>A variavel A: $a <br> A variavel B: $b </h1>");
        


    }

    ?>
<script src="pag01.js"></script>
</body>

</html>