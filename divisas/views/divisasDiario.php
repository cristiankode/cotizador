<?php ?>
<div class="container">
     <div id="mensajeCorreos"></div>
    <div class="col-md-12">
        <div class="col-md-6">
            <!--panel contactos Internos-->
            <div class="panel panel-primary">
                <div class="panel-heading">Contactos Internos</div>
                <div class="panel-body">
                    <table class="display compact cell-border" id="tableContactInternos">
                        <thead>
                            <tr>
                                <th><span class="glyphicon glyphicon-check" aria-hidden="true"></span><input type="checkbox" id="example-select-allInternos" class="styled" />Marcar Todos</th>
                                <th>Contacto</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>    
        <div class="col-md-6">
            <!--panel contactos Externos-->
            <div class="panel panel-primary">
                <div class="panel-heading">Contactos Externos</div>
                <div class="panel-body">
                    <table class="display compact cell-border" id="tableContactExternos">
                        <thead>
                            <tr>
                                <th><span class="glyphicon glyphicon-check" aria-hidden="true"></span><input type="checkbox" class="checkbox-primary" name="select-all" value="1" id="example-select-all"/><br/>Marcar Todos</th>
                                <th>Contacto</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <div class="row">
                    <div class="btn-group" data-toggle="buttons">

                        <label class="btn btn-primary active">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" autocomplete="off" value="option1" checked>Tipo de Cambio USD
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 
                            Todas las Divisas
                        </label>

                    </div>


                    <!--                    <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> <strong>Tipo de Cambio USD</strong>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 
                                            <strong>Todas las Divisas</strong>
                                        </label>-->
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="button" id="btnEnviarMail" class="btn btn-primary btn-block">
                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp;Enviar Mail de Tipo de Cambio</button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-2">
</div>
</div>

</div>
</div>
</div><!--container-->
<script src="./js/funciones.js"></script>