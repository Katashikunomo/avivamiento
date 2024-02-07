<?php include 'views/header-footer/header.php'; ?>   
                     
                <!-- Begin Page Content -->
                <div class="container-fluid">

                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Evento</th>
                                            <th>Boletin</th>
                                            <th>Fecha de registro</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                            foreach($registros as $res ){
                                        ?>
                                        <tr>
                                            <td><?php echo $res['dt_nombre']; ?></td>
                                            <td><a href="<?php echo $res['dt_correo_eventos']; ?>"><?php echo $res['dt_correo_eventos']; ?></a></td>
                                            <td><?php echo $res['mensaje']; ?></td>
                                            <td>
                                            <?php 
                                             if ($res['status_boletin'] == 0) {
                                                 echo '-NO'; 
                                             }else{
                                                echo '#SI';
                                             }
                                             ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $res['fecha_registro'];
                                                ?>
                                            </td>
                                        </tr>
                                       
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include 'views/header-footer/footer.php';