
<?php


//include("backend/seguridad.php");
//require("backend/connection.php");


?>
<div class="br-pageheader pd-y-15 pd-l-20">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.php">Inicio</a>
    <span class="breadcrumb-item active">Citas</span>
  </nav>
</div><!-- br-pageheader -->
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
  <h4 class="tx-gray-800 mg-b-5">Resumen de Citas</h4>
  <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">
  <div class="br-section-wrapper">

    <div class="header">
  
        <legend>
        <!--a href="" class="btn btn-info btn-with-icon pull-right" data-toggle="modal" data-target="#modalUbicaciones">
          <div class="ht-40 justify-content-between">
            <span class="pd-x-15">Agregar</span>
            <span class="icon wd-40"><i class="fa fa-plus-circle"></i></span>
          </div>
        </a>
        </legend-->  
   
    </div>
    
   

    <div class="table-wrapper">
      <table id="datatableUbicaciones" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-10p">ID</th>
            <th class="wd-20p">Nombre Completo</th>
            <th class="wd-30p">Fecha de nacimiento</th>
            <th class="wd-20p">Edad</th>
            <th class="wd-10p">Sexo</th>
            <th class="wd-10p">Procedimiento o cirugía a realizar</th>

            <th class="wd-10p">Tipo Paciente</th>
            <th class="wd-30p">Acciones</th>
           
          </tr>
        </thead>

        <tbody>
            <tr>

              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              <td>Particular</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo1" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  
              </td>
            </tr>
            <tr>

              <td>Dato 1</td>
              <td>Dato 2</td>
              <td>Dato 3</td>
              <td>Dato 4</td>
              <td>Dato 5</td>
              <td>Dato 6</td>
              <td>Asegurado</td>
              
             <td>
                  <a href="" data-toggle="modal" data-target="#modaldemo2" class="btn btn-simple btn-icon" onclick="editar_lista('<?=$id?>')"><i class="fa fa-eye"></i></a>
                  
              </td>
            </tr>
        </tbody>
           
     
      </table>
    </div><!-- table-wrapper -->
  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->




<div id="modaldemo1" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Paciente particular</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_usuario">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Nombre Completo</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Fecha de nacimiento</label>
                        <input class="form-control valid" type="date"  name="apellido_paterno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_paterno?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Edad</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Sexo</label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Dirección completa (calle, numero colonia, código postal ciudad, Estado, país)</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Teléfono</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Correo electrónico </label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Religión</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label"> Nombre completo de familiar responsable (relación o parentesco, teléfono)</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Médico tratante- Especialidad</label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Procedimiento o cirugía a realizar</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Estatus</label>
                        <Select class="form-control valid"  id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" ></Select>
                    </div>
                </div>

              
                
                
            </div>
            
          

           

              
          </div>


        
        </div><!-- form-layout -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
        <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Guardar"> 
      </div>

       </form>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->



<div id="modaldemo2" class="modal fade">
  
  <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <form id="guardar_usuario" method="post" enctype="multipart/form-data"> 
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Paciente asegurado</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-25" id="div_modal_usuario">
       
        <div class="form-layout">

          <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Nombre Completo</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Fecha de nacimiento</label>
                        <input class="form-control valid" type="date"  name="apellido_paterno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_paterno?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Edad</label>
                        <input class="form-control valid" type="text" name="apellido_materno" required="true" placeholder="" aria-required="true"  value="<?=$apellido_materno?>">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Sexo</label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Dirección completa (calle, numero colonia, código postal ciudad, Estado, país)</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Teléfono</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Correo electrónico </label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Religión</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label"> Nombre completo de familiar responsable (relación o parentesco, teléfono)</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Médico tratante- Especialidad</label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Procedimiento o cirugía a realizar</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Nombre de Aseguradora </label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">No. de Póliza</label>
                        <input class="form-control valid" type="text" name="puesto" required="true" placeholder="" aria-required="true"  value="<?=$puesto?>">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">No. de Certificación (afiliación)</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">No. de Siniestro</label>
                        <input class="form-control valid" type="text" id="fecha_alta" name="fecha_alta" required="true" placeholder="" aria-required="true"  value="<?=$fecha_alta?>" >
                    </div>
                </div>

              
                
                
            </div>
            
          

           

              
          </div>


        
        </div><!-- form-layout -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
        <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Guardar"> 
      </div>

       </form>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->









<div id="procesa_ubicacion"></div>


<script>

  $(document).ready (function() {


    $('#datatableUbicaciones').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

    

});


$('#guardar_ubicacion').submit(function () {

    $('#modalUbicaciones').modal('hide');

        $('#procesa_ubicacion').delay(800).queue(function(nxt){

            $.post('backend/guardar_ubicacion.php', $('#guardar_ubicacion').serialize(), function (data, textStatus) {
        
                $('#procesa_ubicacion').append(data);
            });
            
        });   
   
    return false;
});



function limpiar_ubicacion(){

   
    document.getElementById("id").value = "" ;
    document.getElementById("ubicacion").value = "" ;


    $("#selectTipo").val(""); 

    $("#selectZona").val(""); 


    /* $("#selectTipo").select2({
      dropdownParent: $("#modalUbicaciones")
    });

    $("#selectZona").select2({
      dropdownParent: $("#modalUbicaciones")
    });*/

    
}


</script>


<script type="text/javascript">

  $(document).ready(function() {

    
        $('#tipo').selectpicker('val', '<?=$tipo?>');
        $('#es_usuario').selectpicker('val', '<?=$es_usuario?>');
        $('#nivel').selectpicker('val', '<?=$nivel?>');
        $('#permisos').selectpicker('val', [<?=$permisos?>]);

        if ('<?=$es_usuario?>' == '' || '<?=$es_usuario?>' == 'NO') {

          $("#div_usuario").css("display", "none");

        }else{
          $("#div_usuario").css("display", "block");
        }


        if ('<?=$nivel?>' == '3') {

          $("#div_permisos").css("display", "block");
        }else{
          $("#div_permisos").css("display", "none");
        }


        
  });
  
</script>

<script type="text/javascript">
  $('#guardar_abogado').submit(function () {

        $.post('../assets/includes/guardar_abogado.php', $('#guardar_abogado').serialize(), function (data, textStatus) {
            $('#procesa').append(data);
        });
        
       
        return false;
    });


    function verificarContrasenia(){
    var p1 = document.getElementById("contrasenia").value;
    var p2 = document.getElementById("contrasenia2").value;
    

    if (p1 != p2) {
      document.getElementById("contrasenia2").setAttribute("class", "form-control error");
        alert("Las contraseñas deben de coincidir");
      
        return false;
    } else {

        document.getElementById("contrasenia2").setAttribute("class", "form-control valid");
        return true; 
    }

  }

  function validarContrasenia(){
    var p1 = document.getElementById("contrasenia").value;
    var p2 = document.getElementById("contrasenia2").value;
    var espacios = false;
    var cont = 0;
    
     
    while (!espacios && (cont < p1.length)) {
      if (p1.charAt(cont) == " ")
        espacios = true;
      cont++;
    }
     
    if (espacios) {
      document.getElementById("contrasenia").setAttribute("class", "form-control error");
        alert ("La contraseña no puede contener espacios en blanco");
        return false;
    }else{
      document.getElementById("contrasenia").setAttribute("class", "form-control valid");

    }
    

  }

  function select_es_usuario() {
      var x = document.getElementById("es_usuario").value;

     switch (x) {
        case "NO": 
            $("#div_usuario").css("display", "none");
            
            break;
        case "SI": //etapa_patentes
             $("#div_usuario").css("display", "block");
            break;
        
        }
    }

    function select_permisos() {
     var x = document.getElementById("nivel").value;

     switch (x) {
        case "3": 
            $("#div_permisos").css("display", "block");
            
            break;
        default: 
             $("#div_permisos").css("display", "none");
            break;
        
        }
    }

</script>
