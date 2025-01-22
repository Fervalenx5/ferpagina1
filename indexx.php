<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ejemplo";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi pagina</title>

    <style>
        .proyecto{
             color: aliceblue;
             opacity: 0; /* Empieza invisible */
             transform: translateY(30px); /* Empieza desplazada hacia abajo */
             animation: entrada 3s ease-out forwards;
                 }
                 @keyframes entrada {
                                 0% {
                                     opacity: 0; /* Comienza invisible */
                                     transform: translateY(30px); /* Comienza desplazada hacia abajo */
                                    }
                               100% {
                                     opacity: 1; /* Finaliza visible */
                                     transform: translateY(0); /* Vuelve a su posición original */
                                    }
}
        body{
             background-image: url(fondo2.jfif);   
             background-size: cover;
             background-position: center;
             background-repeat: no-repeat;
             background-attachment: fixed;
            }
        .section1{
            font-size: 25px;
            text-align: center;
            color: rgb(0, 0, 0);
            opacity: 0; /* Empieza invisible */
            transform: translateY(30px); /* Empieza desplazada hacia abajo */
            animation: entrada 3s ease-out forwards;
                 }
            @keyframes entrada {
                                 0% {
                                     opacity: 0; /* Comienza invisible */
                                     transform: translateY(30px); /* Comienza desplazada hacia abajo */
                                    }
                               100% {
                                     opacity: 1; /* Finaliza visible */
                                     transform: translateY(0); /* Vuelve a su posición original */
                                    }
                                }
        #Proyectos{
                 display: grid;
                 grid-template-columns: auto auto auto;
                 text-align: center;
               
                  }  
    </style>
</head>
<body>
    <section class="section1">
    <h1>Bienvenidos!</h1>
    <h2>Esta pagina fue creada con estos lenguajes de programacion: </h2>
    </section>
    <section id="Proyectos">
        <div class="proyecto">
            <img src="IMGhtml.png" width="100" height="100">
            <p>HTML</p>   
        </div>
        <div class="proyecto">
            <img src="IMGcss.png"width="100" height="100" >
            <p>CSS</p>   
        </div>
        <div class="proyecto">
            <img src="IMGjs.png" width="100" height="100">
            <p>JAVASCRIP</p>   
        </div>
    </section>
    <div>
    <h1>Formulario para Ingresar Datos</h1>
    <form action="#" name="ejemplo" method="POST">
        <!-- Campo para el nombre -->
        <input type="text" name="nombre" placeholder="Nombre"><br><br>
        <!-- Campo para el apellido -->
        <input type="text" name="apellido" placeholder="Apellido"><br><br>
        <!-- Campo para el color -->
        <input type="text" name="color" placeholder="Color favorito"><br><br>

        <input type="submit" name="registro">
        <input type="reset">
    </form>

    </div>
</body>
</html>
<?php
    if(isset($_POST["registro"]))
        {
          $nombre = $_POST["nombre"];
          $apellido = $_POST["apellido"];
          $color = $_POST["color"];  

          $insertarDatos = "INSERT INTO datos VALUES( '$nombre', '$apellido', '$color', '')";

          $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);  
        }
?>