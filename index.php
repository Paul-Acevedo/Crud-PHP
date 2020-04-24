<?php
 include ('config/db.php');
 $result = mysqli_query($conn,'SELECT * FROM animales');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    .n{
        margin-top: 100px;
    }
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container justify-items-center n">
      <div class="row">
      <div class="col-xs-12 col-lg-3">
      <form action="add.php" method="POST">
      <h1 class="text-center"><strong>Productos</strong></h1>
      <br>
      <input type="text" required placeholder="Nombre" name="animal" class="form-control">
      <br>
     <input type="submit" value="Agregar" class="btn btn-primary btn-block">
      </form>
      </div>
      <div class="col-xs-12 col-lg-8 p-3">
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row){ ?>
    <tr>
      <td><?php echo $row['cod_animal']; ?></td>
      <td><?php echo $row['nombre'] ?></td>
      <td><a href="edit.php?id=<?php echo $row['cod_animal']?>" class="btn btn-primary">Editar</a></td>
      <td><a href="delite.php?id=<?php echo $row['cod_animal']?>" class="btn btn-danger" >Delite</a></td>
    </tr>
        <?php }?>
  </tbody>
</table>



      </div>
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>