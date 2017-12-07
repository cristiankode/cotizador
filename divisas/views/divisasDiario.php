<?php ?>
<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <!--panel contactos Internos-->
            <div class="panel panel-primary">
                <div class="panel-heading">Contactos Internos</div>
                <div class="panel-body">
                    <!--<div class="row panel-body table-responsive">-->
                        <table class="compact cell-border" id="tableContactInternos">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="checkAllInternos"></th>
                                    <th>Contacto</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                        </table>
                    <!--</div>-->
                </div>
                <div class="panel-footer">
                    <button type="button" id="marcaCheckInternos" class="btn btn-default">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp;Marca Todo
                    </button>
                    <button type="button" id="desmarcaCheckInternos" class="btn btn-default">
                        <span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>&nbsp;Desmarca Todo
                    </button>
                </div>
            </div>
        </div>    
        <div class="col-md-6">
            <!--panel contactos Externos-->
            <div class="panel panel-primary">
                <div class="panel-heading">Contactos Externos</div>
                <div class="panel-body">
                    <!--<div class="row panel-body table-responsive">-->
                        <table class="display select" id="tableContactExternos">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                                    <th>Contacto</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                        </table>
                    <!--</div>-->
                </div>
                <div class="panel-footer">
                    <button type="button" id="marcaCheckExternos" class="btn btn-default">
                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp;Marca Todo
                    </button>
                    <button type="button" id="desmarcaCheckExternos" class="btn btn-default">
                        <span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>&nbsp;Desmarca Todo
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> <strong>Tipo de Cambio USD</strong>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 
                                <strong>Todas las Divisas</strong>
                            </label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <button type="button" id="btnEnviarMail" class="btn btn-primary btn-block">
                                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp;Enviar Mail de Tipo de Cambio</button>
                            </div>
                            <div class="col-md-2"></div>
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