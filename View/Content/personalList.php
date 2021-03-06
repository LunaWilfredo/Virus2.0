<?php
    //Buscar-listar
    if(isset($_POST['doc']) && !empty($_POST['doc'])){
        $personalgeneral = PersonalController::listaG();
    }else{
        $personalgeneral = PersonalController::lista();
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
                                    <h4 class="box-title">Resumen de Personal </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th>Doc.Id</th>
                                                    <th>Nombre</th>
                                                    <th>Cumpleaños</th>
                                                    <th>Edad</th>
                                                    <th>Area</th>
                                                    <th>Empresa</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0;foreach($personalgeneral as $pg):$i++;?>
                                                <tr>
                                                    <td class="serial"><?=$i?></td>
                                                    <td><?=$pg['documento']?></td>
                                                    <td><span class="name"><?=STRTOUPPER($pg['nombre'])." ".STRTOUPPER($pg['apellido'])?></span></td>
                                                    <td><span class="name"><?=STRTOUPPER(DATE("d/m/Y",STRTOTIME($pg['nacimiento'])))?></span></td>
                                                    <td><span class="name"><?=STRTOUPPER($pg['edad'])?></span></td>
                                                    <td><span class="product"><?=STRTOUPPER($pg['area'])?></span></td>
                                                    <td>
                                                        <?php if($pg['empresa'] == 'Yermedic' || $pg['empresa'] == 'Y' || $pg['fk_emp']==1):?>
                                                            <span class="badge badge-info "><?=STRTOUPPER($pg['empresa'])?></span>
                                                        <?php elseif($pg['empresa'] == 'JJBoggio' || $pg['empresa'] == 'J' || $pg['fk_emp']==2):?>
                                                            <span class="badge badge-dark"><?=STRTOUPPER($pg['empresa'])?></span>
                                                        <?php elseif($pg['empresa'] == 'Sideruk' || $pg['empresa'] == 'S'|| $pg['fk_emp']==3):?>
                                                            <span class="badge badge-secondary "><?=STRTOUPPER($pg['empresa'])?></span>
                                                        <?php endif?>
                                                    </td>
                                                    <td>
                                                        <?php if($pg['fk_estado'] == 1):?>
                                                            <span class="badge badge-complete"><?=$pg['estado']?></span>
                                                        <?php elseif($pg['fk_estado'] == 2):?>
                                                            <span class="badge badge-danger"><?=$pg['estado']?></span>
                                                        <?php endif;?>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
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