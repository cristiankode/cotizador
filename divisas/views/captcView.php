<?php
include ('../clases/Fecha.class.php');
?>
<div class="container">
    <div id="responseConverter"></div>
    <div class="row">
        <form>
            <div class="col-md-3" id="colmd2">
                <div class="row">
                    <div class="row text-justify">
                        <label for="fecha" id="fecha">Fecha:</label>
                    </div>
                </div>
                <div class="row">
                    <input type="date" name="fecha" id="datepicker" class="form-control btn-block" value="<?php Fecha::getFechaEnCurso();?>" required />
                </div>
                <br/>
                <div class="row text-left">
                    <button type="button" class="ui-button ui-widget ui-corner-all btn-block" id="btn-guardar">
                        <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;&nbsp;&nbsp;Guardar</button>
                </div>
                <br/>
                <div class="row" id="divInputs">
                    <div class="text-left">
                        <input type="text" value="0.00000" name="usd_mxn" id="usd_mxn" required>
                        <label for="usd_mxn">USD / MXN</label>
                        <input type="text" value="0.00000" name="usd_euros" id="usd_euros" required>
                        <label for="usd_euros">USD / EUROS</label>
                        <input type="text" value="0.00000" name="euro_usd" id="euro_usd" required>
                        <label for="euro_usd">EUROS / USD</label>
                        <input type="text" value="0.00000" name="yuan_usd" id="yuan_usd" required>
                        <label for="yuan_usd">YUAN / USD</label>
                        <input type="text" value="0.00000" name="aud_usd" id="aud_usd" required>
                        <label for="aud_usd">AUD / USD</label>
                        <input type="text" value="0.00000" name="cad_usd" id="cad_usd" required>
                        <label for="cad_usd">CAD / USD</label>
                        <input type="text" value="0.00000" name="gbp_usd" id="gbp_usd" required>
                        <label for="gbp_usd">GBP / USD</label>
                        <input type="text" value="0.00000" name="usd_mxn2" id="usd_mxn2"required>
                        <label for="usd_mxn2">USD / MXN****</label>
                    </div>
                </div>
                <br/>
            </div>
            <div class="col-md-9">
                <div class="row" id="btnExportReport">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-block" id="btn-report" data-toggle="modal" data-target="#exportarExcel">
                            <span class="glyphicon glyphicon-list-alt"></span>&nbsp;Exportar Reporte(Excel)
                        </button>    
                    </div>
                </div>
                <br/>
                <div class="row panel-body table-responsive">
                    <table class="compact cell-border" id="tableDivisas">
                        <thead>
                            <tr>
                                <th>FECHA</th>
                                <th>USD/MXN</th>
                                <th>USD/EUROS</th>
                                <th>EURO/USD</th>
                                <th>YUAN/UDS</th>
                                <th>AUD/USD</th>
                                <th>CAD/USD</th>
                                <th>GBP/USD</th>
                                <th>USD/MXN****</th>
                            </tr>
                        </thead>
                    </table> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-6 text-left">
                    <p><strong>Para Modificar Divisas dar DobleClick en Fecha.</strong></p></div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </div>
</div>


<!-- Modal Export Report-->
<form action="./service/ReporteExcel.php" method="post">
    <div class="modal fade" id="exportarExcel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" id="contentReport">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                    <h4 class="modal-title" id="modalExportarExcel">Exportar Reporte (Excel)</h4>
                </div>
                <div id="mensajeErrorExcel"></div>
                <div class="modal-body">
                    <p class="text-left" id="p-Fecha"><strong>Seleccionar Fecha o Rango de Fechas.</strong></p>
                    <div class="row">
                        <label for="deFecha" id="rangosFechas">DE:</label>
                        <input type="date" name="deFechaReporte" id="deFechaReporte">
                    </div>
                    <br/>
                    <div class="row">
                        <label for="alFecha" id="rangosFechas">AL:</label>
                        <input type="date" name="alFechaReporte" id="alFechaReporte">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="submit" class="ui-button ui-widget ui-corner-all btn-block" value="Descargar Reporte"/>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default btn-sm btn-block" data-dismiss="modal">
                                Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="./js/funciones.js"></script>