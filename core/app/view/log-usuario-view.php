
      <!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">

        <div class="box-header with-border">

            <h3 class="text-center"> Bitacora por Usuario </h3>
            
            <!-- <a href="index.php?view=addusuario" class="btn btn-primary btn-md" type="button" >Agregar Usuario</a> -->

        </div>

        

        <div class="box-body">
                   
            <table id="" class="table table-bordered table-striped tablas" width="100%">
                        
                <thead>

                    <tr>

                        <th style="width: 10px;">#</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>User name</th>                        
                        <th>Operaciones</th>

                    </tr>

                </thead>

                <tbody>
                  <?php
                     $arrayUsuario = Usuario::mostrarUsuario();
                     // echo '<pre>'; print_r($arrayUsuario); echo '</pre>';
                    foreach ($arrayUsuario as $key => $value) {
                        echo"<tr>
                            <td>".($key+1)."</td>";
                         $nombreCompleto = $value["nombre_per"] ." ". $value["paterno"] ." ". $value["materno"];

                        echo"
                            <td>".$nombreCompleto."</td>";
                        echo"
                            <td>".$value["nombre_rol"]."</td>
                            <td>".$value["nombre_usuario"]."</td>";

                            $idUsuario = $value["id_usu"];
                            echo "
                            <td>
                            <a href='index.php?view=verdetallelog&id=$idUsuario' class='btn btn-warning btn-sm'><i class='fa fa-eye'></i></a>
                        </td>
                    </tr>";
                        
                    }
                    

                  ?>
                   
                
                </tbody>

                <tfoot>

                    <tr>
                        
                        <th style="width: 10px;">#</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>User name</th>
                        <th>Operaciones</th>
                    </tr>

                </tfoot>

            </table>
                                    

        </div>

    </div>
          
</section>