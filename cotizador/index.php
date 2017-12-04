<?php
include 'views/header.php';
include ("./clases/Fecha.php");
?>
<section class="content-header">
    <h1> Cotizador<small>Cotizador</small> </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>
<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <label>
                            <input type="radio" name="cotizacion" id="btnRadioCotizacio"  checked/>
                            Cotizaci&oacute;n
                        </label>
                    </div>
                </div>

                <!--Panel Datos Cliente-->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <label for="lblDatosCliente ">Datos Cliente</label>

                        <div class="form-group">
                            <label for="inputRazonSocial" class="col-sm-4 control-label">Nombre o Raz&oacute;n Social</label>
                            <div class="col-sm-10">
                                <textarea class="form-contorl" id="txtAreaRazonSocial" name="txtAreaRazonSocial" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTelefono" class="col-sm-2 control-label">Telefono</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputTelefono" name="inputTelefono" min="0" max="10" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMail" class="col-sm-2 control-label">Mail</label>
                            <div class="col-sm-10">
                                <input type="mail" class="form-control" id="inputMail" name="inputMail" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCombinacionAdultos" class="col-sm-2 control-label">Adultos</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="inputCombinacion1Adultos" name="inputCombinacion1Adultos" min="0" max="10" />
                            </div>
                            <label for="inputCombinacionJunior" class="col-sm-2 control-label">Junior</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="inputCombinacion1Junior" name="inputCombinacion1Junior" min="0" max="10" />
                            </div>
                            <label for="inputCombinacionMenor" class="col-sm-2 control-label">Menor</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="inputCombinacion1Menor" name="inputCombinacion1Menor" min="0" max="10" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <button type="button" class="btn btn-default btn-block" id="btnSiguienteCaptura">Siguiente Captura</button>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div><!--Fin panel-->        


                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="selectNHabitaciones" class="col-sm-4 control-label">No. de Habitaciones</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="selectNHabitaciones" name="selectNHabitaciones"></select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selectTHabitacion" class="col-sm-4 control-label">Tipo de Habitaci&oacute;n</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="selectTipoHabitacion" name="selectTipoHabitacion"></select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputComb2Adultos" class="col-sm-2 control-label">Adultos</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="inputCombinacion2Adultos" name="inputCombinacion2Adultos" min="0" max="10" />
                            </div>
                            <label for="inputCom2Junior" class="col-sm-2 control-label">Junior</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="inputCombinacion2Junior" name="inputCombinacion2Junior" min="0" max="10" />
                            </div>
                            <label for="inputComb2Menor" class="col-sm-2 control-label">Menor</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control" id="inputCombinacion2Menor" name="inputCombinacion2Menor" min="0" max="10" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <button type="button" class="btn btn-default btn-block" id="btnGrabar">Grabar</button>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>



</div>
<?php include 'views/footer.php' ?>

<!--export PATH="$(brew --prefix homebrew/php/php70)/bin:$PATH"-->