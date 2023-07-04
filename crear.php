<?php
    $identificacion=$_POST['identificacion'];

    $fileinfo=PATHINFO($_FILES["image"]["name"]);
    $newfilename=$fileinfo['filename']."_".time().".".$fileinfo['extension'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"./upload/".$newfilename);
    $location="upload/".$newfilename;

    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $genero=$_POST['genero'];
    $duracion=$_POST['duracion'];
    $idioma=$_POST['idioma'];
    $descripcion=$_POST['descripcion'];

    

    $host="localhost";
    $user="root";
    $pass="";
    $db="cinecolombia";

    $conn=mysqli_connect($host,$user,$pass,$db);

        $sql="INSERT INTO peliculas(id,img,nombre,precio,genero,duracion,idioma,descripcion) values ($identificacion,'$location','$nombre',$precio,'$genero','$duracion','$idioma','$descripcion')";

        if(mysqli_query($conn,$sql)){
            echo "Producto guardado";
        }else{
            echo "error".$sql.mysqli_error($conn);
        }
?>