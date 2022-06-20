<?php
      $area = PersonalController::area();
      $cargo = PersonalController::cargos();
      $pension = PersonalController::pension();
      $afp=PersonalController::afp();
      $empresa = PersonalController::empresa();
      $formap=PersonalController::formap();
      $banco=PersonalController::banco();
  

/////
      if(isset($_POST['nombres']) && !empty($_POST['nombres'])&&isset($_POST['idu'])&&!empty($_POST['idu']))
    {
        //$update=PersonalController::ActualizarDatos();
        if($registro='ok')
        {
            echo '<script>
                    if(window.history.replaceState){
                        window.history.repaceState(null,null,window.location.href);
                    }
                </script>';
            echo " <div class='alert alert-success'>Actualizacion Exitosa</div>
                <script>
                    setTimeout(function(){
                        window.location = 'body.php?page=detallesPersonal';
                    },3000);
                </script>
            ";
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">
                Error de Actualizacion!
            </div>';
        }
    }
    //Buscar
    if(isset($_GET['idu']) && !empty($_GET['idu'])){
        $lista = PersonalController::BuscarPlan();
    }

  
?>
     <!-- Animated -->
<div class="animated fadeIn">
    <div class="clearfix"></div>
    <!-- Orders -->
        <div class="orders">
            <?php foreach($lista as $lt):?>
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            <!-- CONTENT-->
                                <div class="row">
                                    <div class="col">
                                        <label for="horarioI">IDPL</label>
                                        <input type="text" class="form-control" name="idu" id="idu" value="<?=$lt['idpl']?>">
                                    </div>
                                    <div class="col">
                                        <label for="horarioI">Hora Ing</label>
                                        <input type="time" class="form-control" name="hI" id="hI" value="<?=$lt['hora_ingreso']?>">
                                    </div>
                                    <div class="col">
                                        <label for="horarios">Hora Salida</label>
                                        <input type="time" class="form-control" name="hS" id="hS" value="<?=$lt['hora_salida']?>">
                                    </div>
                                    <div class="col">
                                        <label for="area">Area</label>
                                        <select name="area" id="area" class="form-control" value="<?=$lt['area']?>" selected="selected">
                                            <?php foreach($area as $a):?>
                                                <option value="<?=$a['id']?>"><?=$a['aname']?></option>
                                            <?php endforeach;?>
                                        </select>   
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="cargo">Cargo</label>
                                        <select name="cargo" id="cargo" class="form-control" value="<?=$lt['cargo']?>" selected="selected">
                                            <?php foreach($cargo as $c):?>
                                                <option value="<?=$c['id']?>"><?=$c['cname']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="pension">Sist.Pension</label>
                                            <select name="pension" id="pension" class="form-control" value="<?=$lt['pension']?>" selected="selected">
                                                <?php foreach($pension as $ps):?>
                                                    <option value="<?=$ps['id']?>"><?=$ps['psname']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nafp">Entidad(AFP)</label>
                                            <select name="nafp" id="nafp" class="form-control" value="<?=$lt['afp_name']?>" selected="selected">
                                                <?php foreach($afp as $np):?>
                                                    <option value="<?=$np['id']?>"><?=$np['afname']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="empresa">Empresa</label>
                                            <select name="empresa" id="empresa" class="form-control" value="<?=$lt['empresa']?>" selected="selected">
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
                                            <input type="text" name="sueldo" id="sueldo" class="form-control" maxlength="4" value="<?=$lt['sueldo']?>">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="periodoP">Periodo de Pago(Dias)</label>
                                            <select name="periodoP" id="periodoP" class="form-control" value="<?=$lt['periodo_pag']?>">
                                                <option value="15">Semanal</option>
                                                <option value="30">Mensual</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="formaP">Forma de Pago</label>
                                            <select name="formaP" id="formaP" class="form-control" value="<?=$lt['forma_pago']?>">
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
                                            <input type="text" name="cuenta" id="cuenta" class="form-control" value="<?=$lt['cuenta']?>">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="entidad">Entidad</label>
                                            <select type="text" name="entidad" id="entidad" class="form-control" value="<?=$lt['banco']?>">
                                                <?php foreach($banco as $b):?>
                                                    <option value="<?=$b['id']?>"><?=$b['bname']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="titular">Titular Cuenta</label>
                                            <input type="text" name="titular" id="titular" class="form-control" value="<?=$lt['titular_cuenta']?>">
                                        </div>
                                    </div>
                                </div>
                            <!-- END CONTENT -->
                            </div>
                            <div class="card-footer  text-center">
                                <!-- <button type="button" class="btn btn-danger">Cancelar</button> -->
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </div> <!-- /.card -->
                    </div>  <!-- /.col-lg-8 -->
                </div>
            </form>
            <?php endforeach;?>
        </div>
    </div>
    <!-- /.orders -->
</div>
<!-- .animated --> 