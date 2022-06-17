<?php
if(isset($_POST['doc']) ||isset($_POST['fechaI']) && isset($_POST['fechaF'])){
    $pagoM=PersonalController::ViewPagos();
}else{
    $pagoM=PersonalController::ViewPagos();
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
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="p-2 flex">
                                    <input type="date" name="fechaI" class="form-control mr-2" value="yyyy-mm-dd">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="p-2 d-flex">
                                    <input type="date" name="fechaF" class="form-control mr-2" value="yyyy-mm-dd">
                                    <button type="submit" name="" class="btn btn-secondary justify-content-end"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Detalle de Pagos Mensuales </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th>Nombre</th>
                                                    <th>Area</th>
                                                    <th>Empresa</th>
                                                    <th>Dias</th>
                                                    <th>Sueldo</th>
                                                    <th>Faltas</th>
                                                    <th>AFP</th>
                                                    <th>Seguro</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0;foreach($pagoM as $pm):$i++;?>
                                                <tr>
                                                    <td class="serial"><?=$i?></td>
                                                    <td> <span class="name"><?=$pm['Nombres']." ".$pm['Apellidos']?></span> </td>
                                                    <td> <span class="product"><?=$pm['area']?></span> </td>
                                                    <td><span class="badge badge-complete"><?=$pm['empresa']?></span></td>
                                                    <td><span class="count"><?=$pm['asistencias']?></span></td>
                                                    <td><span class="count"><?=$pm['sueldo']?></span></td>
                                                    <td><span class="count"><?=$pm['Faltas']?></span></td>
                                                    <td><span class="count"><?=$pm['AFPDesc']?></span></td>
                                                    <td><span class="count"><?=$pm['DescSeguro']?></span></td>
                                                    <td><span class="count"><?=$pm['Total']?></span></td>
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