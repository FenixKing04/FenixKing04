<?php
    $identificacion=$_POST['identificacion'];

    $fileinfo=PATHINFO ($_FILES["image"]["name"]);
    $newfilename=$fileinfo['filename']."_".time().".".$fileinfo['extension'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"./upload/".$newfilename);
    $location="UPLOAD/".$newfilename;


    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $descuento=$_POST['descuento'];
    $descripcion=$_POST['descripcion'];


    $host="localhost";
    $db="cinecolombia";
    $user="root";
    $pass="";

    $conn=mysqli_connect($host,$user,$pass,$db);

    $sql = "UPDATE descuentos SET img='img', nombre='$nombre', precio='$precio', descuento='$descuento', descripcion='$descripcion' WHERE `id` = '$identificacion'";

        if(mysqli_query($conn,$sql)){
            echo "Producto actualizado";
        }else{
            echo "error".$sql.mysqli_error($conn);
        }
?>
