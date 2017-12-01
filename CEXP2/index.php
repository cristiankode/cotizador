<?php
include 'views/header.php';
include ("./clases/Fecha.php");
include ("./models/EmpleadoDAO.php");
$fecha = new Fecha();
?>
<div class="container">
    <div id="titulo">
        <h3>Administraci&oacute;n de Expedientes</h3>
    </div>
    <!--Panel Busqueda Expediente-->
    <div class="panel panel-primary" style="margin-bottom: 10px;">
        <!--<div class="panel panel-primary">-->
        <div class="panel-heading">B&uacute;squeda</div>
        <div class="panel-body">
            <div class="col-md-2 form-group" data-column="1" style="width: 160px;">
            <label for="idExpediente">Expediente</label>
            <input type="text" id="col1_filter" name="idExpediente" class="form-control input-sm column_filter" style="width: 123px;" maxlength="10" minlength="10" />
        </div>
        <div class="col-md-6 form-group" style="width: 394px;" data-column="8">
            <label for="idEmpleados">Empleados</label><br/>
            <select id="col8_filter" name="col8_filter"  class="form-control input-sm column_filter">
                <option value="0">Todos</option>
                <?php
                $statusEmpleado = new EmpleadoDAO();
                $result = $statusEmpleado->get($idDepto);

                for ($n = 0; $n < count($result); $n++) {
                    echo "<option value='" . $result[$n]['cid_empleado'] . "' >" . $result[$n]['nombre'] . " | " . $result[$n]['cid_empleado'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="filtroFechas">Filtro Por Fechas</label>
            <select class="form-control input-sm" id="filtroFechas" name="filtroFechas" style="width: 498px;">
                <option value="0">Fecha de Ingreso</option>
                <option value="1">Fecha de Salida</option>
            </select>
            <br/>
            <div class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><strong>del</strong></div> 
                        <input type="date" id="rangoInicioFecha" name="rangoInicioFecha" class="form-control input-sm" style="width: 160px;" value="<?php echo $fecha->getFechaEnCurso(); ?>"/>
                        <div class="input-group">
                            <div class="input-group-addon"><strong>al</strong></div>
                            <input type="date" id="rangoFinalFecha" name="rangoFinalFecha" class="form-control input-sm" style="width: 160px;" value="<?php echo $fecha->getFechaEnCurso(); ?>" />
                        </div>
                    </div>
                </div>    
                <div class="form-group">
                    <button class="btn btn-primary btn-sm" id="buscarRangeDates" type="button">
                        <img src="./public/img/browser2.png"/>&nbsp;B&uacute;scar
                    </button>   
                </div>
            </div>
        </div>
    </div><!--FinPanelBody-->

    <!--footerPanel-->
    <!--<div class="panel-footer">Panel footer</div>-->

</div>
<!--print tableExpedientes-->
<div class="col-md-12">
    <table class="table compact cell-border" id="tableExpedientes">
        <thead>
            <tr>
                <th>Cotizaci&oacute;n</th>
                <th>Expediente</th>
                <th>Ingreso</th>
                <th>Hora</th>
                <th>Paquete</th>
                <th>ID Cliente</th>
                <th>Nombre/Razon Social</th>
                <th>I.Ejec.</th>
                <th>#Emp.</th>
                <th>Pax</th>
                <th>F.de Salida</th>
                <th>F.Regreso</th>
                <th>T.Ope.A</th>
                <th>T.Ope.T</th>
                <th>Expedientes</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Cotizaci&oacute;n</th>
                <th>Expediente</th>
                <th>Ingreso</th>
                <th>Hora</th>
                <th>Paquete</th>
                <th>ID Cliente</th>
                <th>Nombre/Razon Social</th>
                <th>I.Ejec.</th>
                <th>#Emp.</th>
                <th>Pax</th>
                <th>F.de Salida</th>
                <th>F.Regreso</th>
                <th>T.Ope.A</th>
                <th>T.Ope.T</th>
                <th>Expedientes</th>
            </tr>
        </tfoot>
        <div id="ajaxFiltroFechas"></div>
    </table>
</div>

</div><!--fin container-->
<br/>
<?php include 'views/footer.php' ?>