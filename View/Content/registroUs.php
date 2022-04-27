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
                                            <div class="stat-text"><span class="count">2986</span></div>
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
                                                    <th>Area</th>
                                                    <th>Usuario</th>
                                                    <th>Contraseña</th>
                                                    <th>Estado</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="serial">1</td>
                                                    <td> <span class="name">Louis Stanley</span> </td>
                                                    <td> <span class="product">iMax</span> </td>
                                                    <td> <span class="product">admin</span> </td>
                                                    <td> <span class="product">user</span> </td>
                                                    <td> <span class="count">123456</span></td>
                                                    <td> <span class="product">12digitos</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Habilitado</span>
                                                    </td>
                                                    <td>
                                                        <button type="" name="" id=""></button>
                                                        <button type="" name="" id=""></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="serial">2.</td>
                                                    <td>  <span class="name">Gregory Dixon</span> </td>
                                                    <td> <span class="product">iPad</span> </td>
                                                    <td> <span class="product">admin</span> </td>
                                                    <td> <span class="product">user</span> </td>
                                                    <td> <span class="count">123456</span></td>
                                                    <td> <span class="product">12digitos</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Habilitado</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="serial">3.</td>
                                                    <td>  <span class="name">Catherine Dixon</span> </td>
                                                    <td> <span class="product">SSD</span> </td>
                                                    <td> <span class="product">admin</span> </td>
                                                    <td> <span class="product">user</span> </td>
                                                    <td> <span class="count">123456</span></td>
                                                    <td> <span class="product">12digitos</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Habilitado</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="serial">4.</td>
                                                    <td>  <span class="name">Mary Silva</span> </td>
                                                    <td> <span class="product">Magic Mouse</span> </td>
                                                    <td> <span class="product">admin</span> </td>
                                                    <td> <span class="product">user</span> </td>
                                                    <td> <span class="count">123456</span></td>
                                                    <td> <span class="product">12digitos</span></td>
                                                    <td>
                                                        <span class="badge badge-pending">Deshabilitado</span>
                                                    </td>
                                                </tr>
                                                <tr class=" pb-0">
                                                    <td class="serial">5.</td>
                                                    <td>  <span class="name">Johnny Stephens</span> </td>
                                                    <td> <span class="product">Monitor</span> </td>
                                                    <td> <span class="product">admin</span> </td>
                                                    <td> <span class="product">user</span> </td>
                                                    <td> <span class="count">123456</span></td>
                                                    <td> <span class="product">12digitos</span></td>
                                                    <td>
                                                        <span class="badge badge-complete">Habilitado</span>
                                                    </td>
                                                </tr>
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

            <!-- Modal Registro de usuarios -->
    <form action="" method="post">
        <div class="modal fade" id="registroUmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registromodal">Registro de Personal</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nombresInput">Nombres</label>
                                    <input type="text" class="form-control" id="nombresInput" name="nombres">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="apellidosInput">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidosInput" name="apellidos">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="Tdoc">Tipo Documento</label>
                                    <select class="form-control" name="Tdoc" id="Tdoc">
                                        <option value="">DNI</option>
                                        <option value="">Carnet de Estranjeria</option>
                                        <option value="">Otros</option>
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
                                    <label for="fechaNac">Fecha Nacimiento</label>
                                    <input type="date" name="fechaNac" id="fechaNac" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nacionalidad">Nacionalidad</label>
                                    <input type="text" class="form-control" name="nacionalidad" id="movil" maxlength="">
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
                                    <label for="estado">Estado Civil</label>
                                    <select name="ecivil" id="" class="form-control">
                                        <option value="">S</option>
                                        <option value="">C</option>
                                        <option value="">V</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="sexo">Sexo</label>
                                    <div class="form-group">
                                        <label for="Sexo" class="form-check-label">M</label>
                                        <input type="radio" class="form-check-inline" name="sexo" id="sexo" value="Masculino">
                                        <label for="Sexo" class="form-check-label">F</label>
                                        <input type="radio" class="form-check-inline" name="sexo" id="sexo" value="Femenino">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="hijos">¿Tiene Hijos?</label>
                                    <div class="form-group">
                                        <label for="hijos" class="form-check-label">Si</label>
                                        <input type="radio" class="form-check-inline" name="sexo" id="hijos" value="si">
                                        <label for="Sexo" class="form-check-label">No</label>
                                        <input type="radio" class="form-check-inline" name="sexo" id="hijos" value="no">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <textarea class="form-control" id="direccion" rows="1" placeholder="Direcion & Referencia"></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="emergencia">Contacto de Emergencia</label>
                                    <textarea name="emergencia" id="emergencia" rows="1" class="form-control" placeholder="Nombre/Numero"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="emergencia">Parentesco</label>
                                    <input type="text" class="form-control" name="parentesco" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- !Modal -->