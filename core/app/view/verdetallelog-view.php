
      <!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">

        <div class="box-header with-border">

            <h3 class="text-center"> Detalle de Log </h3>
            
            

        </div>

        

        <div class="box-body">
            <?php 


                // echo '<pre>'; print_r($_GET); echo '</pre>';
                $idUsuario = $_GET["id"];
                $acciones = Log::mostrarRegistroDeAccionesByIdUsuario($idUsuario);

             ?>
                   
            <table class="table table-bordered table-striped display tablas1" style="width:100%">
                        
                <thead>

                    <tr>
                        <th style="width: 10px;">#</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Accion</th>
                        <th>Descripciom</th>
                        <th>fecha</th>

                    </tr>

                </thead>

                <tbody>
                  <?php

                    
                    // echo '<pre>'; print_r($acciones); echo '</pre>';

                    if( is_array($acciones)){

                        foreach ($acciones as $key => $value) {
                            echo 
                            "<tr>
                                <td>" .($key + 1). "</td>
    
                                <td>" .$value["nombre_per"]. " " .$value["paterno"]."</td>
                                <td>" .$value["nombre_usuario"]. "</td>
                                <td>" .$value["nombre_rol"]."</td>
                                <td>" .$value["accion"]."</td>
                                <td>" .$value["descripcion"]."</td>";
                                $fecha1 = new dateTime($value['fecha']);
                                $fechamostrar1=$fecha1->format("d-m-Y H:i:s");
                            echo"<td>" .$fechamostrar1."</td>";

                             
                        }
                    }else{

                        echo '<pre>'; print_r("Tabla Vacia"); echo '</pre>';
                    }       // $fecha1 = new dateTime($value['ultimaCompra']);
                            // $fecha2 = new dateTime($value['fechaInsertado']);

                            // $fechamostrar1=$fecha1->format("d-m-Y H:i:s");
                            // $fechamostrar2=$fecha2->format("d-m-Y");

                  ?>
                
                </tbody>

                <tfoot>

                    <tr>
                        <th style="width: 10px;">#</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Accion</th>
                        <th>Descripciom</th>
                        <th>fecha</th>
                    </tr>

                </tfoot>

            </table>
                                    

        </div>

    </div>
          
</section>