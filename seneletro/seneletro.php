<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
<h1>Seneletro</h1>
        <form method="GET" action="calculo-salario.php">

        <div class="input-group">
        <label for="nome"> Nome: </label>
        <input type="text" name="nome" id="nome" required/>
        </div>


        <div class="input-group">
        <label for="rua"> Rua: </lebel>
        <input type="text" name="rua" id="rua" required/>
        </div>

        <div class="input-group">
        <label for="numero"> Numero: </lebel>
        <input type="number" name="numero" id="numero" required/>
        </div>

        <div class="input-group">
        <label for="kwh"> kWh:  </lebel>
        <input type="number" name="kwh" id="kwh" required/>
        </div>

        <button>Calcular</button>

        </form>
</body>
</html>