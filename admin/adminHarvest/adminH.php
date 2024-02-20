<?php include 'viewsH/header-footerH/headerH.php'; ?>   
                     
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Correos registrados de eventos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo / Telefono</th>
                            <th>Asunto</th>
                            <th>Fecha de registro</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php foreach($registrosHarvest as $res): ?>
                        <tr>
                            <td><?php echo $res['dt_nombre']; ?></td>
                            <td><a href="<?php echo $res['dt_email']; ?>"><?php echo $res['dt_email']; ?></a> <br> <b>Contacto:</b> <?php echo $res['dt_numero']; ?> </td>
                            <td><?php echo $res['dt_asunto']; ?></td>
                            <td>
                                <?php echo $res['dt_fecha']; ?>
                            </td>
                            <td>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalId<?php echo $res['id']; ?>">
                                    Ver información
                                </button>

                                <!-- Modal Body-->
                                <div class="modal fade" id="modalId<?php echo $res['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalTitleId<?php echo $res['id']; ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title " id="modalTitleId<?php echo $res['id']; ?>"> Datos generales de <?php echo $res['dt_nombre']; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <?php if($res['dt_nombre_t'] != 'sin registro' && $res['dt_relacion'] != 'sin registro' && $res['dt_nivel'] != 'sin registro' && $res['dt_genero'] != 'sin registro' && $res['dt_edad'] != 'sin registro' ){ ?>

                                                <div class="container-fluid">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Nombre Tutor</label>
                                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="<?php echo$res['dt_nombre_t']; ?>" disabled/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Relación</label>
                                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="<?php echo$res['dt_relacion']; ?>" disabled/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Nivel Academico</label>
                                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="<?php echo$res['dt_nivel']; ?>" disabled/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Genero</label>
                                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="<?php echo$res['dt_genero']; ?>" disabled/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Edad</label>
                                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="<?php echo$res['dt_edad']; ?>" disabled/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Mensaje</label>
                                                        <textarea class="form-control" name="" id="" rows="4" cols="4"><?php echo$res['dt_mensaje']; ?></textarea>
                                                    </div>
                                                    
                                                </div>
                                                <?php }?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'viewsH/header-footerH/footerH.php'; ?>
