<?php

if(isset($_POST['doc']) && !empty($_POST['doc'])||isset($_POST['fechaI']) && !empty($_POST['fechaI']) && isset($_POST['fechaF']) && !empty($_POST['fechaF'])){
    $asistencias=PersonalController::asistenciasBuscar();
}else{
    $asistencias=PersonalController::asistencias();
}

?>
            <div class="animated fadeIn">
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Registro de Asistencias</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Doc.Id</th>
                                            <th>Nombre</th>
                                            <th>Area</th>
                                            <th>Empresa</th>
                                            <th>H.Marcacion</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($asistencias as $ast): ?>
                                        <tr>
                                            <td><?=$ast['documento']?></td>
                                            <td><?=STRTOUPPER($ast['nombre']).' '.STRTOUPPER($ast['apellido'])?></td>
                                            <td><?=STRTOUPPER($ast['area'])?></td>
                                            <td><?=STRTOUPPER($ast['empresa'])?></td>
                                            <td><?=$ast['hora']?></td>
                                            <td><?=$ast['fecha']?></td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated --> 