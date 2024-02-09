<?php
    include("../../../controller/conexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_date"]) && !empty($_POST["selected_date"])) {
        $selectedDate = $_POST["selected_date"];
        
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "avivamiento";

        // $conn = new mysqli($servername, $username, $password, $dbname);

        // if ($conn->connect_error) {
        //     die("Error de conexión: " . $conn->connect_error);
        // }

        // $sql = "INSERT INTO tb_fechas (fecha) VALUES ('$selectedDate')";
        // $sql = "SELECT * FROM tb_fechas";
                $bandera = true;
        // if ($conn->query($sql) === TRUE) {
        if ($bandera === TRUE) {
            $encargado = $_POST['id_encargado'];
            $estatus = $_POST['activar'];
            // $fecha = $_POST["selected_date"];
            $horario = $_POST['hora'];
            $titulo = $_POST['dttitulo'];
            $mesg = $_POST['dtmensaje'];
            $imagen = (isset($_FILES["new_img"]['name'])?$_FILES["new_img"]['name']:"");
            // Se declara el directorio en donde se almacenara la imagen
            $dir_subida = '../../img/harvest/calendario/';
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
                    // global $mysqli;
                    // $bandera = true;
                        $query = "INSERT INTO tb_eventos_h(fecha,id_encargado,dt_titulo,dt_mensaje,tp_status,nom_imagen,dt_hora) VALUES('$selectedDate','$encargado','$titulo','$mesg','$estatus','$imagen','$horario')";
                        $res = $mysqli->query($query);
                        header("Location:../agendaH.php");
                } 
                // Si la extención del archivo no es la deseada se realiza un envio de mensaje de error
            }else {
            echo "¡Posible ataque de subida de ficheros!\n";
            header("Location:../agenda.php?error='dont image'");
            }      
        } else {
            echo "Error al almacenar la fecha: " . $mysqli->error;
        }

        // $conn->close();
    } else {
        echo "No se ha proporcionado una fecha seleccionada.";
    }
}
?>




<?php
// if ($_POST) {
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         if (isset($_POST["selected_date"]) && !empty($_POST["selected_date"])) {
//             $selectedDate = $_POST["selected_date"];
            
//             $servername = "localhost";
//             $username = "root";
//             $password = "";
//             $dbname = "avivamiento";
    
//             $conn = new mysqli($servername, $username, $password, $dbname);
    
//             if ($conn->connect_error) {
//                 die("Error de conexión: " . $conn->connect_error);
//             }
    
//             $sql = "INSERT INTO tb_fechas (fecha) VALUES ('$selectedDate')";
//         }    
//     }    
//     $encargado = $_POST['id_encargado'];
//     $estatus = $_POST['activar'];
    // $fecha = $_POST["selected_date"];
//     $mesg = $_POST['dtexto'];
//     $imagen = (isset($_FILES["new_img"]['name'])?$_FILES["new_img"]['name']:"");
//     // Se declara el directorio en donde se almacenara la imagen
//     $dir_subida = '../img/avivamiento/calendario/';
//     // Se declara el nombre del fichero con el nombre de la imagen 
//     $fichero_subido = $dir_subida . basename($_FILES['new_img']['name']);
    
//     // Se declara un array con los formatos que se permiten para subir
//     $formatos_permitidos =  array('png','jpg' ,'jpeg','svg','webp');
//     // Se declara variable que almacena el nombre temporal
//     $tmp_img=(isset($_FILES["new_img"]['tmp_name'])?$_FILES["new_img"]['tmp_name']:"");
//     // Se obtiene la extención del archivo
//     $extension = pathinfo($imagen, PATHINFO_EXTENSION);
//     // Sea cual sea la extención se parsea a lowercase o minuscula
//     $extension = strtolower($extension);
//     // Se valida si el archivo tiene la extención valida
//     if (in_array($extension, $formatos_permitidos)) {
//         // De ser correcta la extencion se realiza el almacenamiento en el fichero donde se almacenara la imagen, si se almaceno en el directorio correctamente redirecciona al perfil
//         if (move_uploaded_file($tmp_img, $fichero_subido)) {
//             echo "El fichero es válido y se subió con éxito.\n";
//             // Si el fichero es valido se realiza el insert en la base de datos con el nombre de la imagen
//             global $mysqli;
//             // $bandera = true;
//                 $query = "INSERT INTO tb_fechas(id_encargado,mensaje,tp_status,nom_imagen) VALUES('$encargado','$mesg','$estatus','$imagen')";
//                 $res = $mysqli->query($query);
//                 header("Location:../agenda.php");
//         } 
//         // Si la extención del archivo no es la deseada se realiza un envio de mensaje de error
//     }else {
//       echo "¡Posible ataque de subida de ficheros!\n";
//       header("Location:../agenda.php?error='dont image'");
//     }      
      
// }

?>