<?php
    $con = new mysqli("localhost", "root", "", "verynice", 33065);
    
        $product=$_POST["product"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $talla=$_POST["talla"];
        $foto='';
        if (isset($_FILES['foto'])) {
            $file=$_FILES["foto"];
            $nombre=$file["name"];
            $tipo=$file["type"];
            $ruta_provisional=$file["tmp_name"];
            $size=$file["size"];
            $dimensiones=getimagesize($ruta_provisional);
            $width= $dimensiones[0];
            $height= $dimensiones[1];
            $carpeta="fotos/";
            if ($tipo !== "image/jpg" && $tipo !== "image/JPG" && $tipo !== "image/jpeg" && $tipo !== "image/png" && $tipo !== "image/gif") 
            {
                echo "error, esto no es un archivo valido";
            }
            else if ($size >3*1024*1024) {
                echo "El tamaño máximo permitido es de 3MB";
            }
            else {
                $src =$carpeta.$nombre;
                move_uploaded_file($ruta_provisional,$src);
                $foto="fotos/".$nombre;
            }
        }
        $query=mysqli_query($con,"INSERT INTO catalogo (id, product, precio, descripcion, talla, foto) VALUES('','$product','$precio','$descripcion', '$talla','$foto')");
        header("Location:index.html");
    
?>