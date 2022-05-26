<?php 
    $operaciones=PersonalController::horarioOp();
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
                                    <h4 class="box-title">Lista de horarios Operaciones </h4>
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
                                                <?php $i=0;foreach($operaciones as $op):$i++;?>
                                                <tr>
                                                    <td class="serial"><?=$i?></td>
                                                    <td><?=$op['documento']?></td>
                                                    <td>  <span class="name"><?=$op['nombre'].' '.$op['apellido']?></span> </td>
                                                    <td> <span class="product"><?=$op['area']?></span> </td>
                                                    <td><span class="badge badge-complete"><?=$op['empresa']?></span></td>
                                                    <td><span class="product"><?=$op['ingreso']?></span></td>
                                                    <td><span class="product"><?=$op['salida']?></span></td>
                                                    <td>
                                                        <a href="" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <!-- <a href="" class="btn btn-danger"><i class="fa fa-minus-square" aria-hidden="true"></i></a> -->
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