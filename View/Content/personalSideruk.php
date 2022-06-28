<?php 
    if(isset($_POST['doc']) && !empty($_POST['doc'])){
        $sideruk=PersonalController::listaS();
    }else{
        $sideruk=PersonalController::listaS();
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
                                    <h4 class="box-title">Personal Sideruck </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th>Doc.Id</th>
                                                    <th>Nombre</th>
                                                    <th>Area</th>
                                                    <th>Empresa</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0;foreach($sideruk as $s): $i++;?>
                                                <tr>
                                                    <td class="serial"><?=$i?></td>
                                                    <td><?=$s['documento']?></td>
                                                    <td><span class="name"><?=STRTOUPPER($s['nombre'])." ".STRTOUPPER($s['apellido'])?></span> </td>
                                                    <td> <span class="product"><?=STRTOUPPER($s['area'])?></span> </td>
                                                    <td><span class="badge badge-complete"><?=$s['empresa']?></span></td>
                                                    <?php if($s['estado'] =="Habilitado"):?>
                                                    <td>
                                                        <span class="badge badge-complete"><?=$s['estado']?></span>
                                                    </td>
                                                    <?php elseif($s['estado']=="Deshabilitado"):?>
                                                    <td>
                                                        <span class="badge badge-danger"><?=$s['estado']?></span>
                                                    </td>
                                                    <?php endif?>
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