<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <h1>INGRESAR TEXTO</h1>
        <form action="./controlador/Saludo.php" method="get">
            <ul>
                <li><label for="texto">A CONVERTIR</label>
                    <input type="text" pattern="[a-zA-Z\s]*" id="texto" name="texto" value=""/></li>
            </ul>
                <button type="submit" value="enviar">Enviar</button>
        </form>
    </body>
</html>
