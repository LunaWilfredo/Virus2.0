<?php 
    $tipo=PersonalController::tipodoc(); 
    $estado=PersonalController::estadoc();
    $sexo=PersonalController::sexo();
    $parentesco=PersonalController::parent();

    if(isset($_POST['nombres']) && !empty($_POST['nombres'])){
        $registro=PersonalController::registra();
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
                                        <h4 class="box-title">Listado de Personal Detallado</h4>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registromodal">
                                        Añadir
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
 
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-head p-2">
                                    <span class="label-form bg-danger rounded text-center px-2 text-light"> 01 </span>
                                    <span class="label-form mx-2">Documento de Identidad :</span> <!--tipo de documento -->
                                    <span class="count text-light">123456789</span> <!--numero de documento -->
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="label-form">Nombres: <span class="form-control">Louis tony</span></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Apellidos: <span class="form-control">Stanley Galvez</span></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Fecha de Nacimiento: <span class="form-control">01/01/2022</span></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <span class="label-form">Nacionalidad:</span>
                                            <span class="form-control">PE</span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Estado Civil:</span>
                                            <span class="form-control">S </span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Sexo:</span>
                                            <span class="form-control">M</span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Movil:</span>
                                            <span class="form-control">123456789</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <span class="label-form">Direccion</span>
                                            <span class="form-control">Av.Tupa...</span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Contacto Emergencia</span>
                                            <span class="form-control">123456789</span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <span class="label-form">Familia</span>
                                            <span class="form-control">SI</span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Tipo de Pension</span>
                                            <span class="form-control">AFP</span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Area</span>
                                            <span class="form-control">CONT</span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Empresa</span>
                                            <span class="form-control">Y<span>  
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Estado</span>
                                            <span class="form-control bg-success  badge-complete text-light" >H</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer  text-center">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#laboralModal"><i class="fa fa-inbox"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    <a href="#!" class="btn btn-success btn-sm text-light"><i class="fa fa-pencil-square-o"></i></a>
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                    </div>
                </div>
                <!-- /.orders -->
            </div>
            <!-- .animated -->

    <!-- Modal Registro-->
    <form action="" method="post">
        <div class="modal fade" id="registromodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registromodal">Registro de Personal</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nombres">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="Tdoc">Tipo Documento</label>
                                    <select class="form-control" name="Tdoc" id="Tdoc">
                                        <?php foreach($tipo as $td):?>
                                            <option value="<?=$td['id'];?>"><?=$td['tdname'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="doc">Doc.Id</label>
                                    <input type="text" class="form-control" name="doc" id="doc" maxlength="20">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="fecha">Fecha Nacimiento</label>
                                    <input type="date" name="fecha" id="fecha" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nacion">Nacionalidad</label>
                                    <input type="text" class="form-control" name="nacion" id="nacion">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="movil">Movil</label>
                                    <input type="text" class="form-control" name="movil" id="movil" maxlength="9">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="ecivil">Estado Civil</label>
                                    <select name="ecivil" id="ecivil" class="form-control">
                                        <?php foreach($estado as $sc):?>
                                            <option value="<?=$sc['id'];?>"><?=$sc['ecname'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="sexo">Sexo</label>
                                    <select name="sexo" id="sexo" class="form-control">
                                        <?php foreach($sexo as $sx):?>
                                            <option value="<?=$sx['id'];?>"><?=$sx['nombre'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="hijos">Hijos?</label>
                                    <input type="text" class="form-control" name="hijos" id="hijos" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <textarea class="form-control" name="direccion" id="direccion" rows="1" placeholder="Direcion & Referencia"></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="contacto">Contacto de Emergencia</label>
                                    <input type="text" name="contacto" id="contacto" class="form-control" placeholder="Numero">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="relacion">Parentesco</label>
                                    <select name="relacion" id="relacion" class="form-control">
                                        <?php foreach($parentesco as $pt):?>
                                            <option value="<?=$pt['id'];?>"><?=$pt['prname'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- !Modal -->

    <!-- Modal Plan Laboral -->
    <form  action="" method="post">
        <div class="modal fade" id="laboralModal" tabindex="-1" aria-labelledby="laboralModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Plan Laboral</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Id</label>
                                    <input type="text" class="form-control" name="idU" id="idU" value="1" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="horarioI">Hora Ing</label>
                                    <input type="time" class="form-control" name="horarioI" id="horarioI">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="horarios">Hora Salida</label>
                                    <input type="time" class="form-control" name="horarioS" id="horarioS">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="area">Area</label>
                                    <select name="area" id="area" class="form-control">
                                        <option value="">Contabilidad</option>
                                        <option value="">DT</option>
                                        <option value="">Operacion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="cargo">Cargo</label>
                                    <select name="cargo" id="cargo" class="form-control">
                                        <option value="">Contabilidad</option>
                                        <option value="">DT</option>
                                        <option value="">Operacion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="pension">Sist.Pension</label>
                                    <select name="pension" id="pension" class="form-control">
                                        <option value="">AFP</option>
                                        <option value="">ONP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="nafp">Entidad(AFP)</label>
                                    <select name="nafp" id="nafp" class="form-control">
                                        <option value="">HABITAD</option>
                                        <option value="">PROFUTURO</option>
                                    </select>                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="empresa">Empresa</label>
                                    <select name="empresa" id="empresa" class="form-control">
                                        <option value="">Yermedic</option>
                                        <option value="">Sideruck</option>
                                        <option value="">JJBoggio</option>
                                    </select>
                                </div>
                            </div>
                            <!--  -->
                            
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
                                    <!-- <input type="number" name="periodoP" id="periodoP" class="form-control"> -->
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
                                        <option value="">Efectivo</option>
                                        <option value="">Deposito</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="cuenta">N° Cuenta</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="00-000-0000">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="entidad">Entidad</label>
                                    <select type="text" name="entidad" id="entidad" class="form-control">
                                        <option value="">BBVA</option>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div> 
    </form>   
    <!-- !Modal -->