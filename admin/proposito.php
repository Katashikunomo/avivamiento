<?php include 'views/header-footer/header.php'; ?>   
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1>Quienes Somos, Proposito y Visión</h1>  
                    <br>
                    <!-- Imagen y mensaje de Quienes Somos -->
                    <h3 class="bg-primary text-white text-center">Quienes Somos</h3>
                    <div class="row justify-content-around m-auto ">
                        <div class="card shadow mb-4 col-md-5 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Imagenm de Quienes Somos</h6>
                                    </div>
                                    <div class="card-body">
                                    <div class="container-fluid m-auto">
                                        <div class="mb-3 w-100 m-auto" style="border-radius: 2px;">
                                            <!-- Vista de Imagen -->
                                            <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                <!-- <img class="img-fluid img-thumbnail" src="img/avivamiento/portada_login.jpg" alt="" style="width:auto; border-radius: 300px;"> -->
                                                <?php
                                                $imagen_banner_array = get_image_page_proposito(2);
                                                $imagen_banner = $imagen_banner_array['nombre_imagen'];
                                                $imagen_banner_usr = $imagen_banner_array['nombre_encargado'];
                                                $imagen_usr = $imagen_banner_array['imagen'];
                                                $texto = $imagen_banner_array['dt_texto'];
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
                                            <form action="model/registro_proposito.php" method="POST" enctype="multipart/form-data">
                                            <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                            <input type="number" class="form-control" name="tpimage" id="tpimage" aria-describedby="emailHelpId" value="2" hidden>
                                            <input type="number" class="form-control" name="idimage_glob" id="idimage_glob" aria-describedby="emailHelpId" value="2" hidden>
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
                        <div class="card shadow mb-4 col-md-5 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Agrega un mensaje que indique quienes somos</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="model/registro_proposito_text.php" method="post" >
                                            <?php
                                            $array_text = get_image_page_proposito_text(2);
                                            $texto = $array_text['dt_texto']; 
                                            $imagen_banner_usr = $array_text['dt_nombre']; 
                                            $imagen_usr = $array_text['imagen']; 
                                            ?>
                                            <div class="mb-3">
                                              <!-- <label for="" class="form-label">id</label> -->
                                              <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                              <input type="number" class="form-control" name="tp_image" id="tp_image" aria-describedby="emailHelpId" value="2" hidden>
                                            </div>
                                            <div class="container-fluid border-bottom">
                                                <h2 class="m-0 font-weight-bold text-primary" >Mensaje Actual</h2>
                                                <p class="border p-2">
                                                <?=
                                                 $texto;
                                                ?>
                                                </p>
                                                <p class="form-text text-muted">
                                                    Agregado por: <?php echo $imagen_banner_usr;?> <img class="img-profile rounded-circle  border" src="img/avivamiento/<?= $imagen_usr;?>" style=" width:50px; height:50px; border-radius:330px !important;">
                                                    
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                              <label for="" class="form-label"></label>
                                              <textarea class="form-control" name="dtexto" id="dtexto" rows="3"></textarea>
                                            </div>
                                                <?php
                                                // Si los datos no existen mostrara el siguiente mensaje
                                                if (isset($_GET['error'])) 
                                                {
                                                ?>
                                                <?php } ?>
                                            <button type="submit" class="btn btn-primary">Guardar Mensaje</button>
                                            
                                        </form>
                                    </div>
                        </div>
                    </div>
                    <!-- Imagen y mensaje de Proposito -->
                    <h3 class="bg-primary text-white text-center">Proposito</h3>
                    <div class="row justify-content-around m-auto ">
                        <div class="card shadow mb-4 col-md-5 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Imagenm de Proposito</h6>
                                    </div>
                                    <div class="card-body">
                                    <div class="container-fluid m-auto">
                                        <div class="mb-3 w-100 m-auto" style="border-radius: 2px;">
                                            <!-- Vista de Imagen -->
                                            <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                <!-- <img class="img-fluid img-thumbnail" src="img/avivamiento/portada_login.jpg" alt="" style="width:auto; border-radius: 300px;"> -->
                                                <?php
                                                $imagen_banner_array = get_image_page_proposito(3);
                                                $imagen_banner = $imagen_banner_array['nombre_imagen'];
                                                $imagen_banner_usr = $imagen_banner_array['nombre_encargado'];
                                                $imagen_usr = $imagen_banner_array['imagen'];
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
                                            <form action="model/registro_proposito.php" method="POST" enctype="multipart/form-data">
                                            <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                            <input type="number" class="form-control" name="tpimage" id="tpimage" aria-describedby="emailHelpId" value="3" hidden>
                                            <input type="number" class="form-control" name="idimage_glob" id="idimage_glob" aria-describedby="emailHelpId" value="3" hidden>
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
                        <div class="card shadow mb-4 col-md-5 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Agrega un mensaje que indique quienes somos</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="model/registro_proposito_text.php" method="post" >
                                            <?php
                                            $array_text = get_image_page_proposito_text(3);
                                            $texto = $array_text['dt_texto']; 
                                            $imagen_banner_usr = $array_text['dt_nombre']; 
                                            $imagen_usr = $array_text['imagen']; 
                                            ?>
                                            <div class="mb-3">
                                              <!-- <label for="" class="form-label">id</label> -->
                                              <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                              <input type="number" class="form-control" name="tp_image" id="tp_image" aria-describedby="emailHelpId" value="3" hidden>
                                            </div>
                                            <div class="container-fluid border-bottom">
                                                <h2 class="m-0 font-weight-bold text-primary" >Mensaje Actual</h2>
                                                <p class="border p-2">
                                                <?=
                                                 $texto;
                                                ?>
                                                </p>
                                                <p class="form-text text-muted">
                                                    Agregado por: <?php echo $imagen_banner_usr;?> <img class="img-profile rounded-circle  border" src="img/avivamiento/<?= $imagen_usr;?>" style=" width:50px; height:50px; border-radius:330px !important;">
                                                    
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                              <label for="" class="form-label"></label>
                                              <textarea class="form-control" name="dtexto" id="dtexto" rows="3"></textarea>
                                            </div>
                                                <?php
                                                // Si los datos no existen mostrara el siguiente mensaje
                                                if (isset($_GET['error'])) 
                                                {
                                                ?>
                                                <?php } ?>
                                            <button type="submit" class="btn btn-primary">Guardar Mensaje</button>
                                            
                                        </form>
                                    </div>
                        </div>
                    </div>
                    <!-- Imagen y mensaje de Proposito -->
                    <h3 class="bg-primary text-white text-center">Visión</h3>
                    <div class="row justify-content-around m-auto ">
                        <div class="card shadow mb-4 col-md-5 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Imagen de Visión</h6>
                                    </div>
                                    <div class="card-body">
                                    <div class="container-fluid m-auto">
                                        <div class="mb-3 w-100 m-auto" style="border-radius: 2px;">
                                            <!-- Vista de Imagen -->
                                            <div  class="container-fluid m-auto" style="border-radius: 30px;  max-width: 900px; margin:auto;  heigth: 700px; ">
                                                <!-- <img class="img-fluid img-thumbnail" src="img/avivamiento/portada_login.jpg" alt="" style="width:auto; border-radius: 300px;"> -->
                                                <?php
                                                $imagen_banner_array = get_image_page_proposito(4);
                                                $imagen_banner = $imagen_banner_array['nombre_imagen'];
                                                $imagen_banner_usr = $imagen_banner_array['nombre_encargado'];
                                                $imagen_usr = $imagen_banner_array['imagen'];
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
                                            <form action="model/registro_proposito.php" method="POST" enctype="multipart/form-data">
                                            <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                            <input type="number" class="form-control" name="tpimage" id="tpimage" aria-describedby="emailHelpId" value="4" hidden>
                                            <input type="number" class="form-control" name="idimage_glob" id="idimage_glob" aria-describedby="emailHelpId" value="4" hidden>
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
                        <div class="card shadow mb-4 col-md-5 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Agrega un mensaje de la Visión</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="model/registro_proposito_text.php" method="post" >
                                            <?php
                                            $array_text = get_image_page_proposito_text(4);
                                            $texto = $array_text['dt_texto']; 
                                            $imagen_banner_usr = $array_text['dt_nombre']; 
                                            $imagen_usr = $array_text['imagen']; 
                                            ?>
                                            <div class="mb-3">
                                              <!-- <label for="" class="form-label">id</label> -->
                                              <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                              <input type="number" class="form-control" name="tp_image" id="tp_image" aria-describedby="emailHelpId" value="4" hidden>
                                            </div>
                                            <div class="container-fluid border-bottom">
                                                <h2 class="m-0 font-weight-bold text-primary" >Mensaje Actual</h2>
                                                <p class="border p-2">
                                                <?=
                                                 $texto;
                                                ?>
                                                </p>
                                                <p class="form-text text-muted">
                                                    Agregado por: <?php echo $imagen_banner_usr;?> <img class="img-profile rounded-circle  border" src="img/avivamiento/<?= $imagen_usr;?>" style=" width:50px; height:50px; border-radius:330px !important;">
                                                    
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                              <label for="" class="form-label"></label>
                                              <textarea class="form-control" name="dtexto" id="dtexto" rows="3"></textarea>
                                            </div>
                                                <?php
                                                // Si los datos no existen mostrara el siguiente mensaje
                                                if (isset($_GET['error'])) 
                                                {
                                                ?>
                                                <?php } ?>
                                            <button type="submit" class="btn btn-primary">Guardar Mensaje</button>
                                            
                                        </form>
                                    </div>
                        </div>
                    </div>
                    
                  
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php include 'views/header-footer/footer.php';