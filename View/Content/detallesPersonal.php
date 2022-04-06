            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col">
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
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table">
                                            <thead class="text-center">
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th>Doc.Id</th>
                                                    <th>Nombres y Apellidos</th>
                                                    <th>F.Nac</th>
                                                    <th>Movil</th>
                                                    <th>Sexo</th>
                                                    <th>Direccion</th>
                                                    <th>C.Emerg</th>
                                                    <th>Fam</th>
                                                    <th>T.Pens</th>
                                                    <th>Area</th>
                                                    <th>Emp</th>
                                                    <th>Estado</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="serial">1</td>
                                                    <td> #5469 </td>
                                                    <td> <span class="name">Louis Stanley</span> </td>
                                                    <td> <span class="product">01/01/2022</span> </td>
                                                    <td> <span class="count">123456789</span> </td>
                                                    <td> <span class="product">M</span> </td>
                                                    <td> <span class="product">Av.Tupa...</span> </td>
                                                    <td> <span class="product">123456789</span> </td>
                                                    <td> <span class="product">si/no</span> </td>
                                                    <td> <span class="product">AFP/ONP</span> </td>
                                                    <td> <span class="product">CONT</span> </td>
                                                    <td> <span class="product">Y<span></td>
                                                    <td>
                                                        <span class="badge badge-complete">A</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#laboralModal"><i class="fa fa-inbox"></i></button>
                                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#laboralModal"><i class="fa fa-trash"></i></button>
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
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fechaNac">Fecha Nacimiento</label>
                                    <input type="date" name="fechaNac" id="fechaNac" class="form-control">
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
                        <div class="form-group">
                            <label for="emergencia">Contacto en caso de Emergencia</label>
                            <textarea name="emergencia" id="emergencia" rows="1" class="form-control" placeholder="Nombre/Numero"></textarea>
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

    <!-- Modal Plan Laboral -->
    <form action="" method="post">
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
                                    <input type="text" class="form-control" name="idU" id="idU" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="horarioI">Hora Ing</label>
                                    <input type="time" class="form-control" name="horarioI" id="horarioI">
                                </div>
                            </div>
                            <div class="col-4">
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
                                    <label for="pension">T.Pen</label>
                                    <select name="pension" id="pension" class="form-control">
                                        <option value="">AFP</option>
                                        <option value="">ONP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="sueldo">Sueldo</label>
                                    <input type="text" name="sueldo" id="sueldo" class="form-control" maxlength="4">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="periodoP">Per.Pago(D)</label>
                                    <input type="number" name="periodoP" id="periodoP" class="form-control">
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