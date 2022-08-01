<?PHP
// Iniciamos una sesion que nos permita guardar un dato
session_start();

$conn = mysqli_connect(
    'LocalHost', //conectame con el servidor
    'root', //usa el usuario
    '', //con el Password
    'dbcrud' //a la base de datos
);

// // Comprobamos si esta conectada
// if (isset($conn)) {
//     echo 'Base de Datos Conectada';
// }

?>
