<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <script defer src="JS/script.js"></script>
    <script defer src="JS/bootstrap.bundle.js"></script>
</head>

<body>
    <h1>Chattoria</h1>
    <div class="ventanaChat">
        <div class="chat">
            <div class="mensajes">
                <?php
                include("php/queryChat.php");
                ?>
            </div>

            <form action="php/enviarMensaje.php" id="gug" method="post" class="d-flex position-relative align-items-end justify-content-end">
                <input type="text" class="form-control teclado" name="mensaje" id="mensaje" required>
                <input type="submit" value="enviar" class="g">
            </form>
        </div>
    </div>


</body>

</html>