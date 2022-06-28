<?php
//cantidad de usuarios registrados
$usuarios=UsuariosController::cantidadU();
$personal=PersonalController::cantidadP();
$habilitado=PersonalController::cantidadPH();
$Deshabilitado=PersonalController::cantidadPDH();
$Administrativo=PersonalController::cantidadAdmin();
$Operacion=PersonalController::cantidadOP();
$Yermedic=PersonalController::cantidadY();
$JJBoggio=PersonalController::cantidadJ();
$Sideruk=PersonalController::cantidadS();

?>
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-content">
                                        <H1>Bienvenido <span class="text-primary"><?=$_SESSION['nombre_usuario']?></span></H1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if($_SESSION['rol']==1):?>
                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php foreach($usuarios as $uc):?><span class="count"><?=$uc['cantidad']?></span><?php endforeach?></div>
                                            <div class="stat-heading">Usuarios Registrados</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                </div>

                <div class="row">
                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php foreach($personal as $pc):?><span class="count"><?=$pc['cantidad']?></span><?php endforeach?></div>
                                            <div class="stat-heading">Personal Registrado</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php foreach($habilitado as $h):?><span class="count"><?=$h['cantidad']?></span><?php endforeach?></div>
                                            <div class="stat-heading">Personal Habilitado</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php foreach($Deshabilitado as $dh):?><span class="count"><?=$dh['cantidad']?></span><?php endforeach?></div>
                                            <div class="stat-heading">Personal Deshabilitado</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php foreach($Administrativo as $ad):?><span class="count"><?=$ad['cantidad']?></span><?php endforeach?></div>
                                            <div class="stat-heading">Personal Administrativo</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php foreach($Operacion as $op):?><span class="count"><?=$op['cantidad']?></span><?php endforeach?></div>
                                            <div class="stat-heading">Personal Operaciones</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php foreach($JJBoggio as $j):?><span class="count"><?=$j['cantidad']?></span><?php endforeach?></div>
                                            <div class="stat-heading">Personal JJBOGGIO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php foreach($Sideruk as $s):?><span class="count"><?=$s['cantidad']?></span><?php endforeach?></div>
                                            <div class="stat-heading">Personal SIDERUK</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><?php foreach($Yermedic as $y):?><span class="count"><?=$y['cantidad']?></span><?php endforeach?></div>
                                            <div class="stat-heading">Personal YERMEDIC</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Widgets -->            

            </div>
            <!-- .animated -->