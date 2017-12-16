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
        <div id="mensajeSelect"></div>
        <div class="col-md-4">
            <form class="form-horizontal">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cotizador de Bloqueos</h3>
                    </div>
                    <div class="panel-body">
                        <!--                        <div class="form-group">
                                                    <label for="destinos" class="col-sm-4 control-label">Destino</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" id="selectDestino">
                                                            <option value="1">Canada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="origen" class="col-sm-4 control-label">Origen</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" id="selectOrigen">
                                                            <option value="1">Ciudad de Mexico</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="salida" class="col-sm-4 control-label">Salida</label>
                                                    <div class="col-sm-12">
                                                        <input type="date" id="fSalida" name="fSalida" />
                                                    </div>
                                                    <label for="duracion" class="col-sm-4 control-label">Duraci&oacute;n(d&iacute;as)</label>
                                                    <div class="col-sm-12">
                                                        <input type="date" id="fSalida" name="fSalida" />
                                                    </div>
                                                </div>-->
                        <div class="form-group">
                            <label for="Hab" class="col-sm-4 control-label">Habitaciones</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="hab">
                                    <option value="0"></option>
                                    <option value="1">1 Habitacion</option>
                                    <option value="2">2 Habitacion</option>
                                    <option value="3">3 Habitacion</option>
                                    <option value="4">4 Habitacion</option>
                                    <option value="5">5 Habitacion</option>
                                </select>
                            </div>
                        </div>
                        <!--Habitacion 1-->
                        <div class="form-group">
                            <div class="col-xs-12" id="hab1Personas">
                                <div class="col-md-4">
                                    <label for="HabH1" class="control-label">Adultos</label>
                                    <select class="form-control" id="muestraNAdultosSelectH1"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH1" class="control-label">Niños</label>
                                    <select class="form-control" id="muestraNiñosSelectH1"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH1" class="control-label">Edades</label>
                                    <select class="form-control" id="muestraEdadesSelectH1"></select>
                                </div>
                            </div>
                        </div>
                        <!--Habitacion 2-->
                        <div class="form-group">
                            <div class="col-xs-12" id="hab2Personas">
                                <div class="col-md-4">
                                    <label for="HabH2" class="control-label">Adultos</label>
                                    <select class="form-control" id="muestraNAdultosSelectH2"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH2" class="control-label">Niños</label>
                                    <select class="form-control" id="muestraNiñosSelectH2"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH2" class="control-label">Edades</label>
                                    <select class="form-control" id="muestraEdadesSelectH2"></select>
                                </div>
                            </div>
                        </div>
                        <!--Habitacion 3-->
                        <div class="form-group">
                            <div class="col-xs-12" id="hab3Personas">
                                <div class="col-md-4">
                                    <label for="HabH3" class="control-label">Adultos</label>
                                    <select class="form-control" id="muestraNAdultosSelectH3"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH3" class="control-label">Niños</label>
                                    <select class="form-control" id="muestraNiñosSelectH3"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH3" class="control-label">Edades</label>
                                    <select class="form-control" id="muestraEdadesSelectH3"></select>
                                </div>
                            </div>
                        </div>
                        <!--Habitacion 4-->
                        <div class="form-group">
                            <div class="col-xs-12" id="hab4Personas">
                                <div class="col-md-4">
                                    <label for="HabH4" class="control-label">Adultos</label>
                                    <select class="form-control" id="muestraNAdultosSelectH4"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH4" class="control-label">Niños</label>
                                    <select class="form-control" id="muestraNiñosSelectH4"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH4" class="control-label">Edades</label>
                                    <select class="form-control" id="muestraEdadesSelectH4"></select>
                                </div>
                            </div>
                        </div>
                        <!--Habitacion 5-->
                        <div class="form-group">
                            <div class="col-xs-12" id="hab5Personas">
                                <div class="col-md-4">
                                    <label for="HabH5" class="control-label">Adultos</label>
                                    <select class="form-control" id="muestraNAdultosSelectH5"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH5" class="control-label">Niños</label>
                                    <select class="form-control" id="muestraNiñosSelectH5"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="HabH5" class="control-label">Edades</label>
                                    <select class="form-control" id="muestraEdadesSelectH5"></select>
                                </div>
                            </div>
                        </div>
                        <!--Busqueda bloqueo-->
                        <div class="form-group">
                            <div class="col-xs-12" id="btnBuscar">
                                <div class="col-md-4">
                                    
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary btn-block" id="btnBuquedaBloqueo">
                                        Buscar
                                        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>        
        <!--Panel Datos Cliente-->
        <!--
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

        <div class="col-md-6"></div>
    </div>

        -->
    </div>
    <?php include 'views/footer.php' ?>

