<?php 
    $tipo=PersonalController::tipodoc(); 
    $estado=PersonalController::estadoc();
    $sexo=PersonalController::sexo();
    $parentesco=PersonalController::parent();

    // Personal
    if(isset($_POST['nombres']) && !empty($_POST['nombres'])){
        $registro=PersonalController::registra();
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
    
    $lista = PersonalController::lista();
    $area = PersonalController::area();
    $cargo = PersonalController::cargos();
    $pension = PersonalController::pension();
    $afp=PersonalController::afp();
    $empresa = PersonalController::empresa();
    $formap=PersonalController::formap();
    $banco=PersonalController::banco();

    // Planes
    if(isset($_POST['hI']) && !empty($_POST['hI'])){
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
                                        <h4 class="box-title">Listado de Personal Registrado</h4>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registromodal">
                                        Añadir
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i=0;foreach($lista as $lt):$i++;?>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-head p-2">
                                    <span class="label-form bg-danger rounded text-center px-2 text-light"> <?=$i;?> </span>
                                    <span class="label-form mx-2"><?=$lt['tipodoc'];?> :</span> <!--tipo de documento -->
                                    <span class="product"><?=$lt['documento'];?></span> <!--numero de documento -->
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- <form action="" method="POST"> -->
                                            <div class="col">
                                                <span class="label-form">Id:</span>
                                                <input type="text" name="idp" id="idp" class="form-control" value="<?=$lt['idp'];?>">
                                            </div>
                                        <!-- </form> -->
                                        <div class="col">
                                            <span class="label-form">Nombres: <span class="form-control"><?=$lt['nombre'];?></span></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Apellidos: <span class="form-control"><?=$lt['apellido'];?></span></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Fecha de Nacimiento: <span class="form-control"><?=$lt['nacimiento'];?></span></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <span class="label-form">Nacionalidad:</span>
                                            <span class="form-control"><?=$lt['nacionalidad'];?></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Estado Civil:</span>
                                            <span class="form-control"><?=$lt['estadocivil'];?></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Sexo:</span>
                                            <span class="form-control"><?=$lt['sexo'];?></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Movil:</span>
                                            <span class="form-control"><?=$lt['movil'];?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <span class="label-form">Direccion</span>
                                            <span class="form-control"><?=$lt['direccion'];?></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Contacto Emergencia</span>
                                            <span class="form-control"><?=$lt['contacto'];?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <span class="label-form">Familia</span>
                                            <span class="form-control"><?=$lt['hijos'];?></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">T. Pension</span>
                                            <span class="form-control"><?=$lt['pension']?></span>
                                        </div>
                                        <?php if($lt['pension'] = 'afp'):?>
                                        <div class="col">
                                            <span class="label-form">Nombre AFP</span>
                                            <span class="form-control"><?=$lt['afp_name']?></span>
                                        </div>
                                        <?php endif;?>
                                        <div class="col">
                                            <span class="label-form">Area</span>
                                            <span class="form-control"><?=$lt['area']?></span>
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Empresa</span>
                                            <span class="form-control"><?=$lt['empresa']?><span>  
                                        </div>
                                        <div class="col">
                                            <span class="label-form">Estado</span>
                                            <span class="form-control bg-success  badge-complete text-light" ><?=$lt['estado']?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer  text-center">
                                    <a href="index.php?page=planRegistro&idp=<?=$lt['idp'];?>" class="btn btn-primary"><i class="fa fa-inbox"></i></a>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    <a href="#!" class="btn btn-success btn-sm text-light"><i class="fa fa-pencil-square-o"></i></a>
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div>
                <?php endforeach;?>
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