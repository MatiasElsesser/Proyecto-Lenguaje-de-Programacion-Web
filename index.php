<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <h1>Recuperatorio Programacion Web</h1>
        <h3>Elsesser Matías Fabian</h3>
    </header>
    
    <main class="main">
        <section class="inputs">
            <form id="form" action="Process.php" method="POST">

                <div class="inputs-container">
                    <label for="name">Ingresar el nombre</label>
                    <input name="nombre" type="text" placeholder="Nombre">
                </div>

                <div class="inputs-container">
                    <label for="apellido">Ingresar el apellido</label>
                    <input name="apellido" type="text" placeholder="Apellido">
                </div>

                <div class="inputs-container">
                    <label for="name">Ingresar la edad</label>
                    <input name="edad" type="number" placeholder="Edad">
                </div>

                <div class="inputs-container">
                    <button class="btn" type="submit">Enviar</button>
                </div>

            </form>
            <section class="datos">
                <h2>Datos generales de la persona</h2>
                <h3 id="Resultado"></h3>
            </section>

        </section>


        <section class="segunda">
            <article class="date">
                <h2>05</h2>
                <p><Strong>Agosto</Strong></p>
            </article>

            <article class="questions">
                <ul>
                    <p>Arquitectura de 3 capas</p>
                    <li>Capa de datos</li>
                    <li>Capa de negocios</li>
                    <li>Capa de presentacion</li>
                </ul>

                <ul>
                    <p>Ventajas de la arquitectura Cliente/Servidor</p>
                    <li>Centralización del control</li>
                    <li>Escalabilidad</li>
                    <li>Fácil mantenimiento</li>
                </ul>
            </article>
        </section>

    </main>
<script src="jquery-3.6.0.min.js"></script>
<script src="main.js"></script>   
</body>
</html>