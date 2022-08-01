<?PHP
// Primero incluimos la base de datos
include("db.php");

if (isset($_POST['save'])) {
   $title = $_POST['title'];
   $description = $_POST['description'];
//    echo 'Titulo:  '.$title. 'descripcion ' .$description;
    $query = "INSERT INTO tasktable(titulo, descripcion) VALUES ('$title','$description')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('query fail');
    }
    //echo "Saved";
    $_SESSION['message'] = 'Registro agregado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
  
}
?>