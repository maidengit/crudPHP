<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // echo "<script> alert('$id') </script>";
    $query = "DELETE FROM tasktable WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error inesperado");
    }
    
    $_SESSION['message'] = 'Tarea eliminada satisfactoriamente';
    $_SESSION['message_color'] = 'danger';
    header('Location: index.php');
}

?>