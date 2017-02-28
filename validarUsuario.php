<?php
include("conexion.php");
 $user = $_POST["user"];
 $password = $_POST["pass"];
 $query = "Select * from usuario where user = '$user' and pass = '$password' ";
 $resultado = $conexion -> query($query);
if ($resultado){
$row    = mysqli_fetch_assoc($resultado);
}

if ($row['user']){
    //echo "$resultado";
    header("location: Inicio.php");
}else{
    echo '
    <script type= "text/javascript"> 
        alert("usuario o contraseña inválida")
        windows.location= "index.php";    
    </script>
    
    ';
    echo "Nombre de usuario o contraseña inválida...";
}
    
?>