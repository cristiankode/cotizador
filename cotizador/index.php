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
<br/>
<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <form class="form-horizontal">
<!--                <div class="panel panel-default">
                    <div class="panel-body">
                        <label>
                            <input type="radio" name="cotizacion" id="btnRadioCotizacio"  checked/>
                            Cotizaci&oacute;n
                        </label>
                    </div>
                </div>-->

                <!--Panel Datos Cliente-->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center" id="colorEtiquetaDatosCliente">
                            <label for="lblDatosCliente">Datos Cliente.</label>
                        </div>
                        <div class="form-group">
                            <label for="inputRazonSocial" class="col-sm-4 control-label">Nombre o Raz&oacute;n Social</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="txtAreaRazonSocial" name="txtAreaRazonSocial" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTelefono" class="col-sm-2 control-label">Telefono</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control input-sm" id="inputTelefono" name="inputTelefono" min="0" max="10" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMail" class="col-sm-2 control-label">Mail</label>
                            <div class="col-sm-10">
                                <input type="mail" class="form-control input-sm" id="inputMail" name="inputMail" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCombinacionAdultos" class="col-sm-2 control-label">Adultos</label>
                            <div class="col-sm-2">
                                <input type="spinner" class="form-control input-sm" id="inputCombinacion1Adultos" name="inputCombinacion1Adultos" value="0" min="0" max="99" />
                            </div>
                        <label for="inputCombinacionJunior" class="col-sm-2 control-label">Junior</label>
                            <div class="col-sm-2">
                                <input type="spinner" class="form-control input-sm" id="inputCombinacion1Junior" name="inputCombinacion1Junior" value="0" min="0" max="99" />
                            </div>
                            <label for="inputCombinacionMenor" class="col-sm-2 control-label">Menor</label>
                            <div class="col-sm-2">
                                <input type="spinner" class="form-control input-sm" id="inputCombinacion1Menor" name="inputCombinacion1Menor" value="0" min="0" max="99" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <button type="button" class="btn btn-primary btn-block" id="btnSiguienteCaptura">
                                        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                                        Siguiente Captura</button>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div><!--Fin panel-->        


                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="selectNHabitaci&oacute;n" class="col-sm-4 control-label">No. de Habitaciones</label>
                            <div class="col-sm-12">
                                <select class="form-control input-sm col-sm-12" id="selectNHabitaciones" name="selectNHabitaciones" disabled>
                                    <option value="0">Habitaciones...</option>
                                    <option value="1">1 Habitaci&oacute;n</option>
                                    <option value="2">2 Habitaciones</option>
                                    <option value="3">3 Habitaciones</option>
                                    <option value="4">4 Habitaciones</option>
                                    <option value="5">5 Habitaciones</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selectTHabitacion" class="col-sm-4 control-label">Tipo de Habitaci&oacute;n</label>
                            <div class="col-sm-12">
                                <select class="form-control input-sm" id="selectTipoHabitacion" name="selectTipoHabitacion" disabled>
                                    <option value="0">Tipo Habitaci&oacute;n...</option>
                                    <option value="1">Sencilla</option>
                                    <option value="Sencilla C/1 Menor">Sencilla C/1 Menor</option>
                                    <option value="Sencilla C/2 Menores">Sencilla C/2 Menores</option>
                                    <option value="Sencilla C/3 Menores">Sencilla C/3 Menores</option>
                                    <option value="Doble">Doble</option>
                                    <option value="Doble C/1 Menor">Doble C/1 Menor</option>
                                    <option value="Doble C/2 Menores">Doble C/2 Menores</option>
                                    <option value="Doble +++">Doble +++</option>
                                    <option value="Doble x">Doble x</option>
                                    <option value="Triple">Triple</option>
                                    <option value="Triple C/1 Menor">Triple C/1 Menor</option>
                                    <option value="Triple +++">Triple +++</option>
                                    <option value="Triple x">Triple x</option>
                                    <option value="Cuadruple">Cuadruple</option>
                                    <option value="Cuadruple +++">Cuadruple +++</option>
                                    <option value="Cuadruple x">Cuadruple x</option>
                                    <option value="Suite">Suite</option>
                                </select>
                            </div>
                        </div>
<!--                        <div class="form-group">
                            <label for="inputComb2Adultos" class="col-sm-2 control-label">Adultos</label>
                            <div class="col-sm-2">
                                <input type="spinner" class="form-control input-sm" id="inputCombinacion2Adultos" name="inputCombinacion2Adultos" value="0" min="0" max="99" />
                            </div>
                            <label for="inputCom2Junior" class="col-sm-2 control-label">Junior</label>
                            <div class="col-sm-2">
                                <input type="spinner" class="form-control input-sm" id="inputCombinacion2Junior" name="inputCombinacion2Junior" value="0" min="0" max="99" />
                            </div>
                            <label for="inputComb2Menor" class="col-sm-2 control-label">Menor</label>
                            <div class="col-sm-2">
                                <input type="spinner" class="form-control input-sm" id="inputCombinacion2Menor" name="inputCombinacion2Menor" value="0" min="" max="99" />
                            </div>
                        </div>-->
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <button type="button" class="btn btn-primary btn-block" id="btnGrabar" disabled>
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        Grabar</button>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                        <!--Tabla distribucion de habitaciones-->
                        <div class="text-center" id="colorEtiquetaDatosCliente">
                            <label for="lblDatosCliente">6 Tipos de Habitaciones.</label><br/>
                            <label for="lblDatosCliente">
                                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                                Distribuci&oacute;n en Habitaciones Correcta.
                            </label><br/>
                        </div>
                        <div class="col-md-12">
                            <table class="table compact cell-border" id="tableDistribucionHabitaciones">
                                <thead>
                                    <tr>
                                        <th>Tipo de Habitaci&oacute;n</th>
                                        <th>Adulto</th>
                                        <th>Junior</th>
                                        <th>Menor</th>
                                    </tr>
                                </thead>
                                <tbody id="addFila"></tbody>
                            </table>
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