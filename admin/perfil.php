<?php include 'views/header-footer/header.php'; ?>   

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1>PROFILE</h1>  
                    <div class="row justify-content-around m-auto ">
                        <div class="card shadow mb-4 col-md-5 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Imagenm de Perfil</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 w-50 m-auto" style="border-radius: 22px;">
                                            <!-- Vista de Imagen -->
                                            <div  class="rounded-circle" style="border-radius: 30px; max-width: 300px; heigth: 700px; ">
                                                <!-- <img class="img-fluid img-thumbnail" src="img/avivamiento/portada_login.jpg" alt="" style="width:auto; border-radius: 300px;"> -->
                                                <img class="img-fluid img-thumbnail" src="img/avivamiento/<?=$imagen?>" alt="" style="width:auto; border-radius: 300px;">
                                            </div>

                                            <!-- Modificacionm de imagen -->
                                            <form action="model/registros.php" method="POST" enctype="multipart/form-data">
                                            <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
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
                                                    <button type="submit" class="btn btn-primary" style="color:#fff; width:100%;" >Cambiar Imagen</button>
                                                </div>
                                            </form>
                                          
                                        </div>
                                    </div>
                        </div>
                        <div class="card shadow mb-4 col-md-5 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Inmformación de la cuenta</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="model/actualiza_perfil.php" method="POST" >
                                            <div class="mb-3">
                                              <!-- <label for="" class="form-label">id</label> -->
                                              <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelpId" value="<?=$id_user;?>" hidden>
                                            </div>
                                            <div class="mb-3">
                                              <label for="" class="form-label">Nombre</label>
                                              <input type="text" class="form-control" name="dtnombre" id="dtnombre" aria-describedby="emailHelpId" value="<?=$nombre;?>" required>
                                            </div>
                                            <div class="mb-3">
                                              <label for="" class="form-label">Email</label>
                                              <input type="email" class="form-control" name="dtemail" id="dtemail" aria-describedby="emailHelpId" value="<?=$correo;?>" required>
                                            </div>
                                            <?php
                                                // Si los datos no existen mostrara el siguiente mensaje
                                                if (isset($_GET['exitoso'])) 
                                                {
                                                ?>
                                                <div class="alert alert-primary" role="alert" id="alertmessage">
                                                    <strong>Datos Actualizados Correctamente</strong> ♥
                                                </div>
                                                
                                                <script>
                                                    $('#alertmessage').fadeIn();     
                                                    setTimeout(function() {
                                                        $("#alertmessage").fadeOut();           
                                                    },2000);
                                                </script>
                                                
                                                <?php } ?>
                                            <button type="submit" class="btn btn-primary" style="color:#fff; width:100%;" >Actualizar Iformación</button>
                                        </form>
                                        <form action="" method="post">
                                        <div class="mb-3">
                                              <label for="passw" class="form-label">password</label>
                                              <input type="password" class="form-control" name="dtpassw" id="dtpassw" aria-describedby="emailHelpId" placeholder="password actual">
                                            </div>
                                                <?php
                                                // Si los datos no existen mostrara el siguiente mensaje
                                                if (isset($_GET['errorpassw'])) 
                                                {
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                el password es incorrecto
                                                </div>
                                                <?php } ?>
                                            <div class="mb-3">
                                              <label for="" class="form-label">Nuevo password</label>
                                              <input type="password" class="form-control" name="newpass" id="newpass" aria-describedby="emailHelpId" placeholder="password actual">
                                            </div>
                                            <button type="submit" class="btn btn-primary" style="color:#fff; width:100%;" >Cambiar contraseña</button>
                                        </form>
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php include 'views/header-footer/footer.php';