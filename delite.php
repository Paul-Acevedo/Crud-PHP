<?php
 include ('config/db.php');

$id = $_GET['id'];
$query = "DELETE FROM animales where (cod_animal = '$id')";
$result = mysqli_query($conn,$query);
if($query){
    header('location:index.php');
}

?>