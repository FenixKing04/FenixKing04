<?php
    $identificacion=$_POST['identificacion'];

    $fileinfo=PATHINFO($_FILES["image"]["name"]);
    $newfilename=$fileinfo['filename']."_".time().".".$fileinfo['extension'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"./upload/".$newfilename);
    $location="upload/".$newfilename;

    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];

    

    $host="localhost";
    $user="root";
    $pass="";
    $db="cinecolombia";

    $conn=mysqli_connect($host,$user,$pass,$db);

        $sql="INSERT INTO comidas(id,img,nombre,precio,descripcion) values ($identificacion,'$location','$nombre',$precio,'$descripcion')";

        if(mysqli_query($conn,$sql)){
            echo "Producto guardado";
        }else{
            echo "error".$sql.mysqli_error($conn);
        }
?>