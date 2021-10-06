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
      
            <h6 class="text-center">Documentos</h6>

             
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">* Identificación oficial vigente (INE, pasaporte, cedula profesional, documento migratorio, etc) tanto del paciente como del familiar responsable. </label>
                        <input class="form-control valid" type="file" name="identifiacion_oficial" id="identifiacion_oficial" required="true">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">* Orden Medica</label>
                        <input class="form-control valid" type="file"  name="orden_medica" id="orden_medica" required="true" placeholder="" aria-required="true">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">* Prueba Covid (no mayor a 3 días de expedida a la fecha de la cirugía)</label>
                        <input class="form-control valid" type="file" name="prueba_covid" id="prueba_covid" required="true" placeholder="25" aria-required="true" >
                    </div>
                </div>


                <div class="col-md-12">


                    <label class="ckbox">
                        <input type="checkbox" required=""><span>* Aceptar <a href="">Terminos y condiciones</a></span>
                    </label>
                    
                </div>

                

                <div id="seguro" class="content row col-md-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">* Identificación oficial vigente (INE, pasaporte, cedula profesional, documento migratorio, etc) tanto del paciente como del familiar responsable. </label>
                            <input class="form-control valid" type="file" id="identifiacion_oficial" name="identifiacion_oficial" required="true" placeholder="" aria-required="true"  >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">* Credencial del seguro</label>
                            <input class="form-control valid" type="file" name="credencial_seguro"  id="credencial_seguro" placeholder="" >
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">* Póliza</label>
                            <input class="form-control valid" type="file" id="poliza" name="poliza" required="true" placeholder="" aria-required="true"  >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">* Carta de autorización</label>
                            <input class="form-control valid" type="file" id="carta_autorizacion" name="carta_autorizacion" required="true" placeholder="" aria-required="true"  >
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">* Orden Medica</label>
                            <input class="form-control valid" type="file" id="orden_medica" name="orden_medica" required="true" placeholder="" aria-required="true"  >
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">* Prueba Covid (no mayor a 3 días de expedida a la fecha de la cirugía)</label>
                            <input class="form-control valid" type="file" id="prueba_covid" name="prueba_covid" id="prueba_covid" required="true" placeholder="" aria-required="true"  >
                        </div>
                    </div>


                    <div class="col-md-12">
                        <label class="ckbox">
                            <input type="checkbox" required=""><span>* Aceptar <a href="">Terminos y condiciones</a></span>
                        </label>   
                    </div>
                </div>

              
                
                
            </div>
            
          

           

              
          </div>

          <div class="modal-footer">
        
           
            <input id="guardar" type="submit" name="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Guardar"> 
          </div>


       
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
