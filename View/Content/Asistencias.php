<?php
    $asistencias=PersonalController::asistencias();
?>
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-2 d-flex">
                            <input type="text" name="" class="form-control mr-2" placeholder="Buscar">
                            <button type="" name="" class="btn btn-secondary justify-content-end"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tabla de Asistencias</strong>
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
                                            <td><?=$ast['nombre'].' '.$ast['apellido']?></td>
                                            <td><?=$ast['area']?></td>
                                            <td><?=$ast['empresa']?></td>
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