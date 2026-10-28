<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A2.8-Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>

    <form method="post" action="">
    <div style="margin-bottom: 12px;">
        <label for="filas" style="display: inline-block; width: 150px;">Número de filas:</label>
        <input type="number" id="filas" min="1" max="20" step="1" required style="padding: 5px;">
    </div>

    <div style="margin-bottom: 12px;">
        <label for="columnas" style="display: inline-block; width: 150px;">Número de columnas:</label>
        <input type="number" id="columnas" min="1" max="20" step="1" required style="padding: 5px;">
    </div>

    <button type="submit" style="padding: 7px 16px; cursor: pointer;">Generar tabla</button>
</form>
</body>
</html>