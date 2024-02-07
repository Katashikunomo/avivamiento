<?php include 'views/header-footer/header.php'; ?>   
                  
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1>Banner</h1>  
                    <div class="row justify-content-around m-auto ">
                        <div class="card shadow mb-4  col-md-8 col-lg-8">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Imagenm de Banner Principal</h6>
                                    </div>
                                    <div class="container-fluid m-auto">
                                        <div class="mb-3 w-100 m-auto" style="border-radius: 2px;">
                                            <!-- Vista de Imagen -->
                                            <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                <!-- <img class="img-fluid img-thumbnail" src="img/avivamiento/portada_login.jpg" alt="" style="width:auto; border-radius: 300px;"> -->
                                                <?php
                                                
                                                    if ($imagen_banner != null) {
                                                        ?>
                                                        <img class="img-fluid img-thumbnail" src="img/avivamiento/banner/<?=$imagen_banner?>" alt="" style="width:auto;">
                                                        <p class="form-text text-muted">
                                                            Imagen agregada por : <?php echo $imagen_banner_usr;?> <img class="img-profile rounded-circle" src="img/avivamiento/<?= $imagen_usr;?>" style=" width:50px; height:50px; border-radius:330px !important;">
                                                        </p>
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <div class="alert alert-primary" role="alert">
                                                                <strong>Agrega una imagen</strong> 
                                                            </div>
                                                            

                                                        <?php
                                                    }
                                                ?>
                                            </div>

                                            <!-- Modificacionm de imagen -->
                                            <form action="model/registro_banner.php" method="POST" enctype="multipart/form-data">
                                            <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                            <input type="number" class="form-control" name="tpimage" id="tpimage" aria-describedby="emailHelpId" value="1" hidden>
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
                                                    <button type="sumit" class="btn btn-primary" style="color:#fff; width:100%;" >Cambiar Imagen</button>
                                                </div>
                                            </form>
                                          
                                        </div>
                                    </div>
                        </div>
                      
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include 'views/header-footer/footer.php';