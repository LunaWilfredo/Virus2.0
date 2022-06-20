<?php 

if(isset($_GET['idb']) && !empty($_GET['idb'])){
    $idb = $_GET['idb'];
    $borrar=UsuariosController::borrar($idb);
}

if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
   $registrar = UsuariosController::registro();
   if($registrar='ok'){
       echo '<div class="alert alert-success" role="alert">
       Registro Exitoso!
       </div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">
        Error de Registro!
        </div>';
    }
}

$roles = UsuariosController::roles();
$users = UsuariosController::lista();
?>
<form action="" method="Post">
           <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?=COUNT($users)?></span></div>
                                            <div class="stat-heading">Usuarios</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="d-flex">
                                    <div class="card-body">
                                        <h4 class="box-title">Lista de Usuarios </h4>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#registroUmodal">
                                        Añadir
                                    </button>
                                </div>
                                                                
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th>Nombre</th>
                                                    <th>Apellidos</th>
                                                    <th>Rol</th>
                                                    <th>Usuario</th>
                                                    <th>Contraseña</th>
                                                    <th>Estado</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0;foreach($users as $user): $i++;?>
                                                <tr>
                                                    <td class="serial"><?=$i?></td>
                                                    <td> <span class="name"><?=STRTOUPPER($user['nombre'])?></span> </td>
                                                    <td> <span class="product"><?=STRTOUPPER($user['apellido'])?></span> </td>
                                                    <td> <span class="product"><?=STRTOUPPER($user['rol'])?></span> </td>
                                                    <td> <span class="product"><?=$user['nick']?></span> </td>
                                                    <td> <span class="product"><?=$user['password']?></span></td>
                                                        <?php if($user['estado'] =='Habilitado'):?>
                                                    <td>
                                                        <span class="badge badge-complete">H</span>
                                                    </td>
                                                        <?php elseif($user['estado'] =='Deshabilitado'):?>
                                                    <td>
                                                        <span class="badge badge-danger">D</span>
                                                    </td>      
                                                        <?php endif;?>
                                                    <td>
                                                        <!-- <a href="" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->
                                                        <a href="body.php?page=registroUs&idb=<?=$user['id_usuario']?>" class="btn btn-danger"><i class="fa fa-minus-square" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach;?>
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
</form>
            <!-- Modal Registro de usuarios -->
    <form action="" method="post">
        <div class="modal fade" id="registroUmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registromodal">Registro de Usuario</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nombre">Nombres</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="apellido">Apellidos</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="rol">Rol</label>
                                    <select class="form-control" name="rol" id="rol">
                                        <?php foreach($roles as $rol ):?>
                                        <option value="<?=$rol['id']?>"><?=$rol['rname']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nick">Nombre de Usuario</label>
                                    <input type="text" class="form-control" name="nick" id="nick" maxlength="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="pass">Contraseña</label>
                                    <input type="text" class="form-control" name="pass" id="passu" maxlength="12">
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