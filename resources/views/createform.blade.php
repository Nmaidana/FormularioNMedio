
              
           @extends('adminlte::page')

           @section('title', 'Dashboard')
           
           @section('content_header')
               <h1>Formulario de Registro</h1>
           @stop
           
           @section('content')
           
           <div class="box box-default">
                   <div class="box-header with-border">
                     <h3 class="box-title">Llenar Formulario</h3>
                   </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                     <div class="row">
                        <form action="/formulario" method="post" id="my-form" enctype="multipart/form-data" xl-form>
                          @csrf
                       <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Nombre</label>
                              <input type="text" name="nombre" class="form-control" value="{{ isset($nombre)? $nombre :null}}" readonly>
                          </div>
                          <div class="form-group">
                              <label for="">Nacionalidad</label>
                              <input type="text" name="nacionalidad" class="form-control" value="{{isset($nacionalidad)? $nacionalidad :null}}" readonly>
                        </div>
                        <div class="form-group">
                          <label for="">Ingresar N° Celular</label>
                          <input type="tel" name="telefono"id= "telefono" class="form-control"  placeholder="Agregar N° Celular"value="" required>
                     </div>
                        <div class="form-group">
                               <label for="">Dirección Donde Vive</label>
                               <input type="text"name="vivienda" class="form-control"  placeholder="Ingrese Dirección Actual"value="" required>
                          </div>
                          <div class="form-group">
                               <label for="">Lugar de Vivienda Deseada</label>
                               <input type="text"name="lugar_vivienda" class="form-control" placeholder="Ingrese Dirección de Vivienda Deseada"value="" required>
                          </div>
                       </div>
                       
                       <!-- /.col -->
                       <div class="col-md-4">
                          <div class="form-group">
                               <label for="">Apellido</label>
                               <input type="text" name="apellido" class="form-control" value="{{ isset($apellido)? $apellido :null}}" readonly>
                         </div>
                         <div class="form-group">
                            <label for="">Sexo</label>
                            <input type="text" name="sexo" class="form-control" value="{{isset($sexo)? $sexo :null}}" readonly>
                          </div>
                         <div class="form-group">
                               <label for="">Profesión</label>
                               <input type="text" name="profesion"class="form-control" placeholder="Ingrese profesión"value="" required>
                         </div>
                        <div class="form-group">
                            <label for="">Cantidad Familiar</label>
                            <input type="number"name="nflia" class="form-control" placeholder="Agregar N° Familiar"value="" required>
                        </div>
                        <div class="form-group">
                          <label for="">Ingreso Familiar</label>
                          <input type="text" name="ingresof" id="ingresof" class="form-control" placeholder="Ingreso Mensual" value="" required>
                  </div>
                     </div>
                       <!-- /.col -->
                     <!--<button type="submit" class="btn btn-info pull-right">Confirmar</button>-->
                     
                      <div class="col-md-4">
                     <div class="form-group">
                          <label for="">Cédula de Identidad</label>
                          <input type="text" name="ci" class="form-control" value="{{isset($cedula)? $cedula :null}}" readonly>
                    </div>
                     <div class="form-group">
                         <label for="">Fecha Nacimiento</label>
                         <input type="tex" name='fecha_nac'class="form-control" placeholder="Mostrar Fecha Nacimiento"value="{{ isset($fecha_nac)? $fecha_nac :null}}" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Lugar del Trabajo</label>
                        <input type="text"name="lugar_trabajo" class="form-control" placeholder="Ingrese Lugar de Trabajo"value="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Cantidad Aptes</label>
                        <input type="number"name="napte" class="form-control" placeholder="Agregar N° Aptes"value="" required>
                    </div>
                    <div class="form-group">
                      <label>Seleccionar Monto a Pagar</label>
                      <select class="form-control"name="monto_apagar"value="" required>
                        <option>Seleccionar Opción de Pago</option>
                        <option>4289993</option>
                        <option>3116662</option>
                        <option>2337496</option>
                        <option>1466664</option>
                      </select>
                    </div>
                </div>
             </div>
             <button class="btn btn-success pull-right" id="sendmemessage" type="submit">Enviar</button>
           </form>
        </div>
      @stop
           