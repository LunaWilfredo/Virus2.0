 <?php 
    if(isset($_POST['doc']) && !empty($_POST['doc'])){
        $administrativo = PersonalController::horarioAdminBuscar();
    }else{
        $administrativo = PersonalController::horarioAdmin();
    }
    
 ?>
 <!-- Animated -->
            <div class="animated fadeIn">
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <form action="" method="Post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="p-2 d-flex">
                                <input type="text" name="doc" class="form-control mr-2" placeholder="Buscar">
                                <button type="submit" name="" class="btn btn-secondary justify-content-end"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Horarios Administrativos </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th>Doc.Identidad</th>
                                                    <th>Nombres y Apellidos</th>
                                                    <th>Area</th>
                                                    <th>Empresa</th>
                                                    <th>Hora de Ingreso</th>
                                                    <th>Hora de Salida</th>
                                                    <th>Horas Laborales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; foreach($administrativo as $ad): $i++;?>
                                                <tr>
                                                    <td class="serial"><?=$i?></td>
                                                    <td><?=$ad['documento']?></td>
                                                    <td>  <span class="name"><?=STRTOUPPER($ad['nombre']).' '.STRTOUPPER($ad['apellido'])?></span> </td>
                                                    <td> <span class="product"><?=STRTOUPPER($ad['area'])?></span> </td>
                                                    <td><span class="badge badge-complete"><?=STRTOUPPER($ad['empresa'])?></span></td>
                                                    <td><span class="product"><?=$ad['ingreso']?></span></td>
                                                    <td><span class="product"><?=$ad['salida']?></span></td>
                                                    <td>
                                                        <?php 
                                                        $hi = strtotime($ad['ingreso']);
                                                        $hs = strtotime($ad['salida']);
                                                        $h=$hs-$hi;
                                                        echo date("h",$h);
                                                        // var_dump($hi);
                                                        // var_dump($hs);
                                                        // var_dump($h);
                                                        ?>
                                                    </td>
                                                    <!-- <td>
                                                        <a href="" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div>
                </div>
                <!-- /.orders -->
            </div>
            <!-- .animated -->