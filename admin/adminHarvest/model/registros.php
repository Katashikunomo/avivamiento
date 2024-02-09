<?php

    include("../../controller/conexion.php");
    if ($_POST) {
        $id = $_POST['id'];
        $imagen = (isset($_FILES["new_img"]['name'])?$_FILES["new_img"]['name']:"");
        // Se declara el directorio en donde se almacenara la imagen
        $dir_subida = '../img/avivamiento/';
        // Se declara el nombre del fichero con el nombre de la imagen 
        $fichero_subido = $dir_subida . basename($_FILES['new_img']['name']);
        
        // Se declara un array con los formatos que se permiten para subir
        $formatos_permitidos =  array('png','jpg' ,'jpeg','svg','webp');
        // Se declara variable que almacena el nombre temporal
        $tmp_img=(isset($_FILES["new_img"]['tmp_name'])?$_FILES["new_img"]['tmp_name']:"");
        // Se obtiene la extención del archivo
        $extension = pathinfo($imagen, PATHINFO_EXTENSION);
        // Sea cual sea la extención se parsea a lowercase o minuscula
        $extension = strtolower($extension);
        // Se valida si el archivo tiene la extención valida
        if (in_array($extension, $formatos_permitidos)) {
            // De ser correcta la extencion se realiza el almacenamiento en el fichero donde se almacenara la imagen, si se almaceno en el directorio correctamente redirecciona al perfil
            if (move_uploaded_file($tmp_img, $fichero_subido)) {
                echo "El fichero es válido y se subió con éxito.\n";
                // Si el fichero es valido se realiza el insert en la base de datos con el nombre de la imagen
                global $mysqli;
                $query = "UPDATE encargados SET imagen ='$imagen' WHERE id ='$id' ";
                $mysqli->query($query);
                // Se redirecciona al usuario al perfil
                header("Location:../perfil.php");
            } 
            // Si la extención del archivo no es la deseada se realiza un envio de mensaje de error
        }else {
          echo "¡Posible ataque de subida de ficheros!\n";
          header("Location:../perfil.php?error='dont image'");
        }      
          
}

?>