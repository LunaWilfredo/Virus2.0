<?php     
    $lista = PersonalController::lista();
    $area = PersonalController::area();
    $cargo = PersonalController::cargos();
    $pension = PersonalController::pension();
    $afp=PersonalController::afp();
    $empresa = PersonalController::empresa();
    $formap=PersonalController::formap();
    $banco=PersonalController::banco();

    // Planes
    if(isset($_GET['idp']) && !empty($_POST['hI'])){
        $plan=PersonalController::planes();
        if($registro='ok'){
            echo '<div class="alert alert-success" role="alert">
            Registro Exitoso!
            </div>';
         }else{
             echo '<div class="alert alert-danger" role="alert">
             Error de Registro!
             </div>';
         }
    }
?>
<!-- Animated -->    
<div class="animated fadeIn">
    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex">
                        <div class="card-body">
                            <h4 class="box-title">Plan Laboral</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form  action="" method="post">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                        <!-- CONTENT-->
                            <div class="row">
                                <div class="col">
                                    <label for="horarioI">Hora Ing</label>
                                    <input type="time" class="form-control" name="hI" id="hI">
                                </div>
                                <div class="col">
                                    <label for="horarios">Hora Salida</label>
                                    <input type="time" class="form-control" name="hS" id="hS">
                                </div>
                                <div class="col">
                                    <label for="area">Area</label>
                                    <select name="area" id="area" class="form-control">
                                        <?php foreach($area as $a):?>
                                            <option value="<?=$a['id']?>"><?=$a['aname']?></option>
                                        <?php endforeach;?>
                                    </select>   
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="cargo">Cargo</label>
                                    <select name="cargo" id="cargo" class="form-control">
                                        <?php foreach($cargo as $c):?>
                                            <option value="<?=$c['id']?>"><?=$c['cname']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="pension">Sist.Pension</label>
                                        <select name="pension" id="pension" class="form-control">
                                            <?php foreach($pension as $ps):?>
                                                <option value="<?=$ps['id']?>"><?=$ps['psname']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="nafp">Entidad(AFP)</label>
                                        <select name="nafp" id="nafp" class="form-control">
                                            <?php foreach($afp as $np):?>
                                                <option value="<?=$np['id']?>"><?=$np['afname']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="empresa">Empresa</label>
                                        <select name="empresa" id="empresa" class="form-control">
                                            <?php foreach($empresa as $ep):?>
                                                <option value="<?=$ep['id']?>"><?=$ep['ename']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="sueldo">Sueldo</label>
                                        <input type="text" name="sueldo" id="sueldo" class="form-control" maxlength="4">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="periodoP">Periodo de Pago(Dias)</label>
                                        <select name="periodoP" id="periodoP" class="form-control">
                                            <option value="15">Semanal</option>
                                            <option value="30">Mensual</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="formaP">Forma de Pago</label>
                                        <select name="formaP" id="formaP" class="form-control">
                                            <?php foreach($formap as $fp):?>
                                                <option value="<?=$fp['id']?>"><?=$fp['fpname']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="cuenta">N° Cuenta</label>
                                        <input type="text" name="cuenta" id="cuenta" class="form-control" placeholder="00-000-0000">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="entidad">Entidad</label>
                                        <select type="text" name="entidad" id="entidad" class="form-control">
                                            <?php foreach($banco as $b):?>
                                                <option value="<?=$b['id']?>"><?=$b['bname']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="titular">Titular Cuenta</label>
                                        <input type="text" name="titular" id="titular" class="form-control">
                                    </div>
                                </div>
                            </div>
                        <!-- END CONTENT -->
                        </div>
                        <div class="card-footer  text-center">
                            <!-- <button type="button" class="btn btn-danger">Cancelar</button> -->
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div> <!-- /.card -->
                </div>  <!-- /.col-lg-8 -->
            </div>
        </form>
    </div>
    <!-- /.orders -->
</div>
<!-- .animated -->
