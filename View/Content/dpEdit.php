<?php 

    $tipo=PersonalController::tipodoc(); 
    $estado=PersonalController::estadoc();
    $sexo=PersonalController::sexo();
    $parentesco=PersonalController::parent();

    // Personal
    if(isset($_POST['nombres']) && !empty($_POST['nombres'])&&isset($_POST['idu'])&&!empty($_POST['idu']))
    {
        $update=PersonalController::ActualizarDatos();
        if($update='ok')
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
        $lista = PersonalController::BuscarId();
    }

?>
    <!-- Animated -->
<div class="animated fadeIn">
    <div class="clearfix"></div>
    <!-- Orders -->
        <div class="orders">
        <?php foreach($lista as $lt):?>
        <form action="" method="post">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registromodal">Datos de Personal</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <!-- <div class="col"> -->
                                    <!-- <div class="form-group"> -->
                                        <!-- <label for="nombres">id</label> -->
                                        <input type="hidden" class="form-control" id="idu" name="idu" value="<?=$lt['idp']?>">
                                    <!-- </div> -->
                                <!-- </div> -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nombres">Nombres</label>
                                        <input type="text" class="form-control" id="nombres" name="nombres" value="<?=$lt['nombre']?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="apellidos">Apellidos</label>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?=$lt['apellido']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Tdoc">Tipo Documento</label>
                                        <select class="form-control" name="Tdoc" id="Tdoc" value="<?=$lt['tipodoc']?>" selected="selected">
                                            <?php foreach($tipo as $td):?>
                                                <option value="<?=$td['id'];?>"><?=$td['tdname'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="doc">Doc.Id</label>
                                        <input type="text" class="form-control" name="doc" id="doc" maxlength="20" value="<?=$lt['documento']?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="fecha">Fecha Nacimiento</label>
                                        <input type="date" name="fecha" id="fecha" class="form-control" value="<?=$lt['nacimiento']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nacion">Nacionalidad</label>
                                        <input type="text" class="form-control" name="nacion" id="nacion" value="<?=$lt['nacionalidad']?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="movil">Movil</label>
                                        <input type="text" class="form-control" name="movil" id="movil" maxlength="9" value="<?=$lt['movil']?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ecivil">Estado Civil</label>
                                        <select name="ecivil" id="ecivil" class="form-control" value="<?=$lt['estadocivil']?>" selected="selected">
                                            <?php foreach($estado as $sc):?>
                                                <option value="<?=$sc['id'];?>"><?=$sc['ecname'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="sexo">Sexo</label>
                                        <select name="sexo" id="sexo" class="form-control" value="<?=$lt['sexo']?>">
                                            <?php foreach($sexo as $sx):?>
                                                <option value="<?=$sx['id'];?>" selected="selected"><?=$sx['nombre'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="hijos">Hijos?</label>
                                        <input type="text" class="form-control" name="hijos" id="hijos" value="<?=$lt['hijos']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Direccion</label>
                                <textarea class="form-control" name="direccion" id="direccion" rows="1"><?=$lt['direccion']?></textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="contacto">Contacto de Emergencia</label>
                                        <input type="text" name="contacto" id="contacto" class="form-control" placeholder="Numero" value="<?=$lt['contaco']?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="relacion">Parentesco</label>
                                        <select name="relacion" id="relacion" class="form-control" value="<?=$lt['parentesco']?>" selected="selected">
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
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                    </div>
                </div>
        </form>
        <?php endforeach;?>
    </div>
    <!-- /.orders -->
</div>
<!-- .animated --> 