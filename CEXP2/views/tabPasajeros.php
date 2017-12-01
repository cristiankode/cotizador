<?php ?>
<div class="container">
    <div class="row">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Carga Datos Adiciones Assist Card</button>
            <button type="button" class="btn btn-default">Solicitud de Assist Card</button>
            <button type="button" class="btn btn-default">Pax de Bloq (EU)</button>
            <button type="button" class="btn btn-default">Exportar a Excel</button>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">Los nombres deben coincidir con los del pasaporte.</div>
                <div class="panel-body" style="overflow: auto;height: 450px;">
                    <div class="form-group">
                        <label for="apeP" class="control-label">Apellido Paterno</label>
                        <input type="text" class="form-control input-sm" name="apeP" id="apeP" placeholder="Apellido Paterno..." />
                    </div>
                    <div class="form-group">
                        <label for="apeM" class="control-label">Apellido Materno</label>
                        <input type="text" class="form-control input-sm" name="apeM" id="apeM" placeholder="Apellido Materno..." />
                    </div>
                    <div class="form-group">
                        <label for="nombre1" class="control-label">Nombre</label>
                        <input type="text" class="form-control input-sm" name="nombre1" id="nombre1" placeholder="Nombre..." />
                    </div>
                    <div class="form-group">
                        <label for="nombre2" class="control-label">Nombre 2</label>
                        <input type="text" class="form-control input-sm" name="nombre2" id="nombre2" placeholder="Nombre 2..." />
                    </div>
                    <div class="form-group">
                        <label for="titulo" class="control-label">Titulo</label>
                        <select class="form-control"></select>
                        <label for="paxPrincipal" class="control-label">Pasajero Principal
                            <input type="checkbox" name="checkPax" id="checkPax" />
                        </label>
                    </div>
                    <div class="row">
                        <table class="table compact cell-border" id="tablePasajeros">
                            <thead>
                                <tr>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombre</th>
                                    <th>Nombre2</th>
                                    <th>Titulo</th>
                                    <th>Pax</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Agregar</button>
                        <button type="button" class="btn btn-default">Editar</button>
                        <button type="button" class="btn btn-default">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>

        <form id="uploadRFC" class="form-horizontal"  method="post" enctype="multipart/form-data">

            <div class="col-md-4">
                <div class="panel panel-info" style="width: 390px;height: 532px;padding-left: 0px;padding-right: 0px;">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Panel heading</div>
                    <div class="panel-body">
                        <iframe  embedded="true" style="width: 368px;height: 485px;"></iframe>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" data-placement="left">Carga Datos Adiciones Assist Card</button>
                <button type="button" class="btn btn-default">Solicitud de Assist Card</button>
                <button type="button" class="btn btn-default">Pax de Bloq (EU)</button>
                <button type="button" class="btn btn-default">Exportar a Excel</button>
            </div>
        </div>
        <input id="input-b1" name="input-b1" type="file" class="file">


        <!--                    <div class="row" id="row_fileinput">
                                Panel1 carga pdf
                                <p><input type="file" id="file01" name="file01" class="filestyle" data-buttonBefore="true" data-buttonName="btn-primary"></p>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile" class="filestyle" data-buttonBefore="true" data-buttonName="btn-primary" />
                            </div>-->



    </div>
    <!--</div>fin container
    -->    <script>
        $(function () {
           
        });
    </script>