<div id="mensajeExternos"></div>
<form id="contact-form" name="contact-form">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group text-left">
                <label for="nombre_externo" id="nombre_externo">Nombre:</label>
                <input type="text" class="form-control" id="externoNombre" required>
                <span class="error"></span>
            </div>
            <div class="form-group text-left">
                <label for="email_externo" id="email_externo">e-Mail:</label>
                <input type="text" class="form-control" id="externoEmail" required>
                <span class="error"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <button type="submit" class="btn btn-default btn-block" id="btn-crearExternos">
                <span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;&nbsp;&nbsp;Guardar
            </button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-default btn-block" id="btn-EraseExternal">
                <span class="glyphicon glyphicon glyphicon-trash"></span>&nbsp;&nbsp;&nbsp;Eliminar
            </button>
        </div>
    </div>   
</form>
<br>
<div class="row">
    <!--<div class="col-md-2"></div>-->
    <div class="col-md-12">
        <table class="compact cell-border" id="externosContact">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>E-MAIL</th>
                </tr>
            </thead>
        </table>
    </div>
    <!--<div class="col-md-2"></div>-->
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6 text-left">
        <p><strong>Para Corregir DobleClick en el Nombre.</strong></p>
        <p><strong>Para Borrar DobleClick en Contacto y Dar Click en el Bot&oacute;n Eliminar.</strong></p>
    </div>
    <div class="col-md-4"></div>
</div>
<script src="./js/funciones.js"></script>


