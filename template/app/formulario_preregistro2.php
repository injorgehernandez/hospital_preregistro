<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Hospitales Puerta de Hierro</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary">

      <div class="login-wrapper wd-900 pd-25 pd-xs-40 bg-white rounded shadow-base">

        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><!--img src="https://tulumcircula.com/assets/img/Logo_TulumCircula.jpg" class="logo-login" style="width: 70%"--></div>

        <div class="content">    
      
            <h6 class="text-center"></h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Nombre Completo</label>
                        <input class="form-control valid" type="text" name="nombre" value="<?=$nombre?>" placeholder="" readonly="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Fecha de nacimiento</label>
                        <input class="form-control valid" type="date"  name="fecha_nacimiento" required="true" placeholder="" aria-required="true"  value="<?=$fecha_nacimiento?>" readonly="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Edad</label>
                        <input class="form-control valid" type="number" name="edad" required="true" placeholder="" aria-required="true"  value="<?=$edad?>" readonly="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Sexo</label>
                        <input class="form-control valid" type="text" name="sexo" required="true" placeholder="H" aria-required="true"  value="<?=$sexo?>" readonly="">
                    </div>
                </div>

                

                 <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Calle</label>
                        <input class="form-control valid" type="text" id="calle" name="calle" required="true" placeholder="" aria-required="true"   >
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Numero interior</label>
                        <input class="form-control valid" type="text" id="numero_interior" name="numero_interior" required="true" placeholder="" aria-required="true"  >
                    </div>
                </div>

                 <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Numero exterior</label>
                        <input class="form-control valid" type="text" id="numero_exterior" name="numero_exterior" required="true" placeholder="" aria-required="true"  >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Colonia</label>
                        <input class="form-control valid" type="text" id="colonia" name="colonia" required="true" placeholder="" aria-required="true"   >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Código postal</label>
                        <input class="form-control valid" type="number" id="cp" name="cp" required="true" placeholder="" aria-required="true"   >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Ciudad</label>
                        <input class="form-control valid" type="text" id="ciudad" name="ciudad" required="true" placeholder="" aria-required="true"   >
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Pais</label>
                        <input class="form-control valid" type="text" id="pais" name="pais" required="true" placeholder="" aria-required="true"   >
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Teléfono</label>
                        <input class="form-control valid" type="text" id="telefono" name="telefono" required="true" placeholder="" aria-required="true"  value="<?=$telefono?>" readonly="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Correo electrónico</label>
                        <input class="form-control valid" type="text" name="correo" required="true" placeholder="" aria-required="true"  value="<?=$correo?>" readonly="">
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Religión</label>
                        <input class="form-control valid" type="text" id="religion" name="religion"  placeholder=""  value="<?=$religion?>" >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Nombre completo de familiar responsable</label>
                        <input class="form-control valid" type="text" id="familiar_responsable" name="familiar_responsable" required="true" placeholder="" aria-required="true"  >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Relación o parentesco</label>
                        <input class="form-control valid" type="text" id="familiar_responsable_relacion" name="familiar_responsable_relacion" required="true" placeholder="" aria-required="true" >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Teléfono</label>
                        <input class="form-control valid" type="text" id="familiar_responsable_telefono" name="familiar_responsable_telefono" required="true" placeholder="" aria-required="true" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Médico tratante- Especialidad</label>
                        <input class="form-control valid" type="text" name="medico_tratante" required="true" placeholder="" aria-required="true"  value="<?=$medico_tratante?>" readonly="">
                    </div>
                </div>

                 <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Procedimiento o cirugía a realizar</label>
                        <input class="form-control valid" type="text" id="procedimiento" name="procedimiento" required="true" placeholder="" aria-required="true"  value="<?=$procedimiento?>" readonly="">
                    </div>
                </div>


                <div id="seguro" class="content row col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Nombre de Aseguradora </label>
                            <input class="form-control valid" type="text" id="aseguradora" name="aseguradora" required="true" placeholder="" aria-required="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">No. de Póliza</label>
                            <input class="form-control valid" type="text" name="no_poliza" required="true" placeholder="" aria-required="true">
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">No. de Certificación (afiliación)</label>
                            <input class="form-control valid" type="text" id="no_certifiacion" name="no_certifiacion" placeholder=""   >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">No. de Siniestro</label>
                            <input class="form-control valid" type="text" id="no_siniestro" name="no_siniestro" placeholder="" >
                        </div>
                    </div>
                </div>

              
                
                
            </div>
            
          

           

              
          </div>

          <div class="modal-footer">
        
           
            <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Siguiente"> 
          </div>


       
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
