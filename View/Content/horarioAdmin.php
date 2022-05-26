 <?php 
    $administrativo = PersonalController::horarioAdmin();
 ?>
 <!-- Animated -->
            <div class="animated fadeIn">
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Lista de horarios Administrativos </h4>
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
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; foreach($administrativo as $ad): $i++;?>
                                                <tr>
                                                    <td class="serial"><?=$i?></td>
                                                    <td><?=$ad['documento']?></td>
                                                    <td>  <span class="name"><?=$ad['nombre'].' '.$ad['apellido']?></span> </td>
                                                    <td> <span class="product"><?=$ad['area']?></span> </td>
                                                    <td><span class="badge badge-complete"><?=$ad['empresa']?></span></td>
                                                    <td><span class="product"><?=$ad['ingreso']?></span></td>
                                                    <td><span class="product"><?=$ad['salida']?></span></td>
                                                    <td>
                                                        <a href="" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
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