
              
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
                         <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Nombre y Apellido</label>
                          <input type="text"readonly="readonly" value="{{ $nombre.' '.$apellido }}" name="nombre" class="form-control" id="exampleInputNombre1" placeholder="Mostrar Nombre">
                          <input type="text" hidden id="custId" name="nombre" value="{{ $nombre }}">
                          <input type="text" hidden id="custId" name="apellido" value="{{ $apellido }}">
                          </div>-->
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
                            <label>Lugar de Vivienda Deseada</label>
                            <select class="form-control"name="lugar_vivienda"placeholder="Ingrese Dirección de Vivienda Deseada"value="" required>
                              <option>Seleccionar Lugar de Vivienda</option>
                              <option>GRAN COMPLEJO HABITACIONAL </option>
                              <option>MARIANO ROQUE ALONSO</option>
                              <option>GRAN COMPLEJO HABITACIONAL VILLA ELISA</option>
                              <option>GRAN COMPLEJO HABITACIONAL LUQUE</option>
                              <option>GRAN COMPLEJO HABITACIONAL ARTIGAS</option>
                              <option>LA FUENTE MARISCAL LOPEZ </option>
                              <option>GRAN COMPLEJO HABITACIONAL NARANJAL </option>
                              <option>GRAN COMPLEJO HABITACIONAL LAMBARÉ</option>
                              <option>GRAN COMPLEJO HABITACIONAL FERNANDO DE LA MORA</option>
                              <option>GRAN COMPLEJO HABITACIONAL RECOLETA</option>
                              <option>GRAN COMPLEJO HABITACIONAL PLAZA MAYOR</option>
                            </select>
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
                         <input type="text" name='fecha_nac'class="form-control" placeholder="Mostrar Fecha Nacimiento"value="{{ isset($fecha_nac)? $fecha_nac :null}}" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Lugar del Trabajo</label>
                        <input type="text"name="lugar_trabajo" class="form-control" placeholder="Ingrese Lugar de Trabajo"value="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Cantidad de Personas Aportantes</label>
                        <input type="number"name="napte" class="form-control" placeholder="Agregar cantidad de Aportantes"value="" required>
                    </div>
                    <div class="form-group">
                      <label>Seleccionar Monto que Pueda Pagar en Gs.</label>
                      <select class="form-control"name="monto_apagar"value="" required>
                        <option>Seleccionar Opción de Pago</option>
                        <option>4300000</option>
                        <option>3100000</option>
                        <option>2300000</option>
                        <option>1500000</option>
                      </select>
                    </div>
                </div>
             </div>
             <button class="btn btn-success pull-right" id="sendmemessage" type="submit">Enviar</button>
           </form>
        </div>
      @stop
           