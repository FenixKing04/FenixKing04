<?php include("modulos/descuentos.php");?>
<?php include("cabecera.php"); ?>
<?php include("sidebar.php"); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <!-- ./col -->
        </div>
        
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">REGISTRO DE DESCUENTOS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="./crearDesc.php" enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputId" class="col-sm-2 col-form-label">Identificacion</label>
                    <div class="col-sm-10">
                      <input type="number" name="identificacion" class="form-control" id="inputId" placeholder="Identificacion">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPelicula" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" name="nombre" class="form-control" id="inputPelicula" placeholder="Nombre de la pelicula">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                      <input type="number" name="precio" class="form-control" id="inputEmail3" placeholder="Precio">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPrecio" class="col-sm-2 col-form-label">Descuento</label>
                    <div class="col-sm-10">
                      <input type="number" name="descuento" class="form-control" id="inputEmail3" placeholder="Precio">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputDescripcion" class="col-sm-2 col-form-label">Descripcion</label>
                    <div class="col-sm-10">
                      <input type="text" name="descripcion" class="form-control" id="inputDescripcion" placeholder="Descripcion">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="file" class="btn btn-info" name="image">
                  <button type="submit" name="registrar" class="btn btn-info">Registrar descuento</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
        </div>






        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabla de descuentos</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Imagen</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Descuento</th>
                      <th>Descripcion</th>
                    </tr>
                  </thead>


                  <?php
                  $host="localhost";
                  $db="cinecolombia";
                  $user="root";
                  $pass="";
                  
                  $conn=mysqli_connect($host,$user,$pass,$db);
                  $query=mysqli_query($conn,"SELECT * FROM descuentos");
              
                  while($row=mysqli_fetch_array($query)){   
                  ?>
                    <tbody>
                      <tr>
                        <td><?php echo $row['id'];?></td><
                        <td><img class="portimg" src="<?php echo $row['img'];?>"/></td>
                        <td><?php echo $row['nombre'];?></td>
                        <td><?php echo $row['precio'];?></td>
                        <td><?php echo $row['descuento'];?></td>
                        <td><?php echo $row['descripcion'];?></td>
                      </tr>
                      </tbody>
                      <?php
                  }
                  ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

        <form method="POST" action="./eliminarDesc.php">
        <br/><br/>
        <label for="id">ID:</label>
        <input type="number" name="identificacion" />
        <input type="submit" class="btn btn-info" name="eliminar" value="Eliminar producto">
        <br/><br/>
        </form>



        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">MODIFICAR DATOS DE DESCUENTOS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="./actualizarDesc.php" enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputId" class="col-sm-2 col-form-label">Identificacion</label>
                    <div class="col-sm-10">
                      <input type="number" name="identificacion" class="form-control" id="inputId" placeholder="Identificacion">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPelicula" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" name="nombre" class="form-control" id="inputPelicula" placeholder="Nombre de la pelicula">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                      <input type="number" name="precio" class="form-control" id="inputEmail3" placeholder="Precio">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPrecio" class="col-sm-2 col-form-label">Descuento</label>
                    <div class="col-sm-10">
                      <input type="number" name="descuento" class="form-control" id="inputEmail3" placeholder="Descuento">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputDescripcion" class="col-sm-2 col-form-label">Descripcion</label>
                    <div class="col-sm-10">
                      <input type="text" name="descripcion" class="form-control" id="inputDescripcion" placeholder="Descripcion">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="file" class="btn btn-info" name="image">
                  <button type="submit" name="registrar" class="btn btn-info">Actualizar registro</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("piePagina.php"); ?>