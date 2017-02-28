<?php
    include("conexion.php");

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    
    $query = "INSERT INTO usuarios (Usuario, Password, Nombre, Apellido, Correo) Values ('$usuario','$password','$nombre','$apellido','$correo') ";
    $resultado = $conexion -> query($query);


    if ($resultado){
           
       echo '
    <script type= "text/javascript"> 
    alert("Inserción Exitosa","success",null);
        
    </script>
    
    ';

    }else{
        echo "No se realizó la inserción";
    }
 ?>