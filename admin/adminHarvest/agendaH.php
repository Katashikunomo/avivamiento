<?php include 'viewsH/header-footerH/headerH.php'; ?>   
<style>
        .selected-date {
            background-color: #007bff;
            color: #ffffff;
        }

        #calendar-table td {
            cursor: pointer;
        }

        #calendar-table td.disabled {
            pointer-events: none;
            color: #ccc;
        }
</style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1>Agenda y Eventos</h1>
                    
                    <div class="container justify-content-center">
                    <h3 class="bg-primary text-white text-center" style="border-radius: 20px !important;">Calendario de Actividades</h3>
                    <div class="row justify-content-around m-auto ">
                      
                        <div class="card shadow mb-4 col-md-8 " style="border-radius: 20px !important;">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary text-center">Información del calendario</h6>
                                    </div>
                                    <div class="container-fluid m-auto" >
                                        <div class="mb-3 w-100 m-auto" style="border-radius: 20px !important;">
                                            <!-- Vista de Imagen -->
                                            <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                <!-- <img class="img-fluid img-thumbnail" src="img/avivamiento/portada_login.jpg" alt="" style="width:auto; border-radius: 300px;"> -->
                                                
                                            </div>

                                            <!-- Modificacionm de imagen -->
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="modelH/registro_eventoH.php" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                              <!-- <label for="" class="form-label">id</label> -->
                                              <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                              <!-- <input type="number" class="form-control" name="tp_image" id="tp_image" aria-describedby="emailHelpId" value="2" hidden> -->
                                            </div>
                                            <div class="container-fluid border-bottom">
                                                <h2 class="m-0 font-weight-bold text-primary" >Titulo del Evento(Actividad)</h2>
                                                <div class="mb-3">
                                              <input class="form-control" name="dttitulo" id="dttitulo" type="text" placeholder="Ingresa el titulo del evento">
                                              <h2 class="m-0 font-weight-bold text-primary" >Descripcion de la actividad</h2>               
                                                <textarea class="form-control" name="dtmensaje" id="dtmensaje" rows="5"></textarea>
                                            </div>

                                            <div class="container mt-5">
                                                <h2>Calendario con Fechas Seleccionadas</h2>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-flex justify-content-around mb-3">
                                                            <button class="btn btn-primary" id="prev-month">Mes Anterior</button>
                                                            <h3 id="current-month">Mes Actual</h3>
                                                            <button class="btn btn-primary" id="next-month">Mes Siguiente</button>
                                                        </div>
                                                        <table class="table table-bordered " id="calendar-table" >
                                                            <thead>
                                                                <tr>
                                                                    <th>D</th>
                                                                    <th>L</th>
                                                                    <th>M</th>
                                                                    <th>M</th>
                                                                    <th>J</th>
                                                                    <th>V</th>
                                                                    <th>S</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Las celdas del calendario se generan dinámicamente en el script JavaScript -->
                                                            </tbody>
                                                        </table>
                                                        <form method="post" action="procesar_fecha.php">
                                                            <!-- <input type="text" id="selected-date-input" name="selected_date" value="" required h > -->
                                                            <input type="text" id="selected-date-input" name="selected_date" value="" required hidden>
                                                            <!-- <button type="submit" class="btn btn-primary mt-3">Enviar Fecha Seleccionada</button> -->
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="mb-3">
                                                    <label for="" class="form-label">Activar</label>
                                                        <select class="form-select form-select-lg" name="activar" id="activar" style="border-radius:12px; padding:5px; border: 1px solid #ccc; cursor:pointer;">
                                                            <option selected disabled>Selecciona</option>
                                                            <option value="1">Activo</option>
                                                            <option value="0">Inactivo</option>
                                                        </select>
                                                                                    <!-- <button type="submit" class="btn btn-primary btn-sm">activar</button> -->
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Selecciona un horario</label>
                                                    <select class="form-select mb-3" name="hora" name="id" style="border-radius:12px; padding:5px; border: 1px solid #ccc; cursor:pointer;">
                                                        <?php for ($i = 1; $i <= 12; $i++): ?>
                                                            <option value="<?php echo $i; ?>:00 AM"><?php echo $i; ?>:00 AM</option>
                                                            <option value="<?php echo $i; ?>:30 AM"><?php echo $i; ?>:30 AM</option>
                                                            <option value="<?php echo $i; ?>:00 PM"><?php echo $i; ?>:00 PM</option>
                                                            <option value="<?php echo $i; ?>:30 PM"><?php echo $i; ?>:30 PM</option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </div>
                                                <input type="number" class="form-control" name="id_encargado" id="id_encargado" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                                <input type="file" id="new_img" name="new_img" class="img-fluid img-thumbnail rounded  m-auto" required>
                                                <?php
                                                // Si el archivo no es imagen mostrara el siguiente mensaje
                                                if (isset($_GET['error'])) 
                                                {
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                Ingresa una imagen
                                                </div>
                                                <?php } ?>
                                                <div style="text:center; margin:auto;">
                                                    <button type="sumit" class="btn btn-primary" style="color:#fff; width:100%;" >Agregar evento</button>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-primary">Guardar Mensaje</button> -->
                                            
                                        </form>
                                    </div>
                        </div>
                    </div>
                        <div class="row text-center" >
                            <!-- Card que sirve para los eventos en un ciclo dependiendo de los eventos registrados -->
                            <?php 
                            // require("../controller/conexion.php");
                            $result = eventos_fecha_harvest();
                            // $result = $result_fech->fetch_assoc();
                            foreach ($result as $value) {
                            ?>
                            <div class="card shadow  col-md-5 m-4 hovercards-agenda--admin" style="border-radius: 20px !important;">
                                            <div class="card-header py-3 " >
                                                <h6 class="m-0 font-weight-bold text-primary"><?php echo $value['dt_titulo'];?></h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="container-fluid m-auto">
                                                    
                                                        <div class="mb-3 w-100 m-auto" style="border-radius: 12px;">
                                                            <!-- Vista de Imagen -->
                                                                <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                                <img class="img-fluid img-thumbnail" src="../img/harvest/calendario/<?=$value['nom_imagen'];?>" alt="" style="width:auto;">
                                                                </div>
                                                                <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                                <label class="font-weight-bold text-primary">Descripcion</label>
                                                                <br>
                                                                    <textarea class="text-center"  cols="auto" rows="4" disabled>
                                                                    <?php echo $value['dt_mensaje'];?>
                                                                    </textarea>
                                                                </div>
                                                                
                                                                <div  class="container-fluid m-auto bg-primary text-light" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                                    Fehca <?php echo $value['fecha'];?>
                                                                    <br>
                                                                    Horario <?php echo $value['dt_hora'];?>
                                                                </div>
                                                                <div class="form-check">
                                                                  
                                                                  <?php if ($value['tp_status'] == 1) {?>  
                                                                    <input class="form-check-input" type="radio" name="" id="" checked >
                                                                    <label class="form-check-label" for="">
                                                                        Activo
                                                                     </label>
                                                                     <?php }else{?>
                                                                        <input class="form-check-input" type="radio" name="" id="" disabled>
                                                                        <label class="form-check-label" for="">
                                                                        Inactivo
                                                                        </label>
                                                                        <form action="modelH/activar_eventoH.php" method="POST">
                                                                        <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$value['id_ev'];?>" hidden>
                                                                            <div class="mb-3">
                                                                                <label for="" class="form-label">Activar</label>
                                                                                <select class="form-select form-select-lg" name="activar" id="activar">
                                                                                    <option selected disabled>Selecciona</option>
                                                                                    <option value="1">Activar</option>
                                                                                </select>
                                                                                <button type="submit" class="btn btn-primary btn-sm">activar</button>
                                                                            </div>
                                                                        </form>
                                                                     <?php }?>
                                                                            
                                                                </div>
                                                            <!-- Eliminar evento -->
                                                            <div class="container mt-4">
                                                                <form action="modelH/eliminar_eventoH.php" method="POST" enctype="multipart/form-data">
                                                                    <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$value['id_ev'];?>" hidden>
                                                                    <?php if ($value['tp_status'] == 1) {
                                                                        ?>
                                                                        <div style="text:center; margin:auto;">
                                                                            <button type="sumit" class="btn btn-danger" style="color:#fff; width:100%;" >Oculyar evento</button>
                                                                        </div>    
                                                                        <?php
                                                                    }elseif ($value['tp_status'] == -1) {
                                                                        ?>
                                                                        <div style="text:center; margin:auto;">
                                                                            <button type="sumit" class="btn btn-warning" style="color:#fff; width:100%;" disabled >Evento inactivo</button>
                                                                        </div>
                                                                        <?php
                                                                    } ?>
                                                                    
                                                                </form>
                                                            </div>
                                                        </div>
                                                        Evento agregado por : <?php echo $value['dt_nombre']; ?> <img class="img-profile rounded-circle" src="../img/avivamiento/<?= $value['imagen'];?>" style=" width:50px; height:50px; border-radius:330px !important;">
                                                        
                                                </div>
                                            </div>
                            </div>
                            <?php
                            }                            
                            ?>
                        </div>
                    
                    </div>

                    <br>


                    
                  
                </div>
                <!-- /.container-fluid -->

                <?php include 'viewsH/header-footerH/footerH.php';