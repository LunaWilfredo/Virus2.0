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
          if($plan='ok'){
              echo '<div class="alert alert-success" role="alert">
              Registro Exitoso!
              </div>';
           }else{
               echo '<div class="alert alert-danger" role="alert">
               Error de Registro!
               </div>';
           }
      }
  
      //Cambiar estado
      if(isset($_GET['idd'])&&!empty($_GET['idd'])){
          $ce = PersonalController::cambioEst();
          if($ce='ok'){
              echo '<div class="alert alert-success" role="alert">
                       Personal deshabilitado
                  </div>';
          }
      }
  
      //Buscar
      if(isset($_POST['doc']) && !empty($_POST['doc'])){
          $lista = PersonalController::BuscarGeneral();
      }else{
          $lista = PersonalController::lista();
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
                            <h5 class="modal-title" id="registromodal">Registro de Personal</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nombres">Nombres</label>
                                        <input type="text" class="form-control" id="nombres" name="nombres" values="<?=$lt['nombre']?>">
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
        <?php endforeach;?>
    </div>
    <!-- /.orders -->
</div>
<!-- .animated --> 