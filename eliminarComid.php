<?php
    
    $identificacion=$_POST['identificacion'];

    $host="localhost";
    $db="cinecolombia";
    $user="root";
    $pass="";

    $conn=mysqli_connect($host,$user,$pass,$db);

    $sql = "DELETE FROM comidas WHERE id = '$identificacion'";
    

        if(mysqli_query($conn,$sql)){
            echo "Producto eliminado";
        }else{
            echo "error".$sql.mysqli_error($conn);
        }
?>