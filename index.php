<?php
include ("db.php");
?>
<?PHP include ("includes/header.php"); ?>

    <div class="row">
        <div class="col-md-4">

        <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-success" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php session_unset(); } ?>


       

            <div class="card card-body">
                <form action="save.php" method="POST">
                    <input type="text" name="title" class="form-control" placeholder="Task Title">
                    <textarea name="description" class="form-control" placeholder="Task description" id="description" cols="50" rows="5"></textarea>
                    <input type="submit" value="save" class="btn btn-success" name="save">
                </form>
            </div>
        </div>
    
    <div class= "col-md-8">
        <table class="table table-bordered">
            <thead>

                <tr>
                    <th>Titulo</th>
                    <th>descripcion</th>
                    <th>Date</th>
                    <th>Acciones</th>
                </tr>
                
            </thead>
            <tbody>
                <?php
                    $query = "select * from tasktable";
                    $resultTask = mysqli_query($conn, $query);
                    // recorremos el arreglo
                    while ($row = mysqli_fetch_array($resultTask)) { ?>
                        <tr>
                            <td> <?PHP echo $row['titulo']; ?></td>  
                            <td> <?PHP echo $row['descripcion']; ?></td>    
                            <td> <?PHP echo $row['time']; ?></td>
                            <td> 
                                <a href="edit.php?id=<?php echo $row['id']?>">Editar</a>
                                <a href="delete.php?id=<?php echo $row['id']?>">delete</a>
                        </tr>    
                    <?PHP } ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>
<?php include("includes/footer.php") ?>
