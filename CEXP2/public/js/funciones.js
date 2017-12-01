var tableExpedientes;
var tablePasajeros;
var idUploadPDF;
var idPasajero;
$(document).ready(function () {

    $("#tabs").tabs();
    listarExpedientes();
    agregarPasajeros();

    // Setup - add a text input to each footer cell
    $('#tableExpedientes tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="' + title + '" />');


        //Apply the search
        tableExpedientes.columns().every(function () {
            var that = this;
            $('input', this.footer()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that
                            .search(this.value)
                            .draw();
                }
            });
        });

    });

    /*Aplica busqueda por idExpediente*/
    $('input.column_filter').on('keyup click', function () {
        filterColumn($(this).parents('div').attr('data-column'));
    });
    /*Aplica busqueda por empleado*/
    $('select.column_filter').on('change', function () {
        filterColumn($(this).parents('div').attr('data-column'));
    });

    // Add event listeners to the two range filtering inputs
    $('#rangoInicioFecha').click(function () {
        tableExpedientes.draw();
    });

    $('#rangoFinalFecha').click(function () {
        tableExpedientes.draw();
    });

    /*MenuExpedientes*/
    $('.menu li:has(ul)').click(function (e) {
        e.preventDefault();
        if ($(this).hasClass('activado')) {
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        } else {
            $('.menu li ul').slideUp();
            $('.menu li').removeClass('activado');
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
        }
    });
});//Fin documentREadey

var agregarPasajeros = function () {

    tablePasajeros = $("#tablePasajeros").DataTable({
        "destroy": true,
        "deferRender": true,
//        "scrollY":        "200px",
//        "scrollCollapse": false,
        "paging": false,
        "lengthMenu": false,
        "ordering": false,
        "searching": false,
        "info": false,
        "order": [[3, 'desc']],
        "language": {
            "zeroRecords": "Expediente sin Pasajeros Registrados."
        }
    });
};
var listarExpedientes = function () {

    tableExpedientes = $("#tableExpedientes").DataTable({

        "destroy": true,
//        "ajax": {
//            "method": "POST",
//            "url": "./services/getAllExpedientes.php"
//        },
        "ajax": "./services/getAllExpedientes.php",
        "columns": [
            {"data": "cid_cotizacion"},
            {"data": "cid_expediente"},
            {"data": "dfecha"},
            {"data": "chora"},
            {"data": "cdestpack"},
            {"data": "cid_cliente"},
            {"data": "cnombrecliente"},
            {"data": "ciniciales"},
            {"data": "cid_empleado"},
            {"data": "pax"},
            {"data": "fsal"},
            {"data": "dfecharegreso"},
            {"data": "totopeaer"},
            {"data": "totopeter"},
            {"defaultContent": "<button type='button' class='editar btn btn-default'>\n\
                                <img src='./public/img/creative-process.png'/>Expediente</button>"}
        ],
        "deferRender": true,
        "paging": true,
        "lengthMenu": [[8, 8], [8]],
        "ordering": true,
        "info": false,

        "order": [[0, 'desc']],
        "language": {
            "infoEmpty": "No Hay Resultados",
            "search": "Buscar:",
            "zeroRecords": "No Se Encontraron Registros.",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
            "lengthMenu": "Muestra _MENU_ Registros",
            "paginate": {
                "first": "Inicio",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }

    });
    obtener_data_expediente("#tableExpedientes tbody", tableExpedientes);
    editarPasajeros();
};

var obtener_data_expediente = function (tbody, tableExpedientes) {
    $(tbody).on("click", "button.editar", function () {
        var data = tableExpedientes.row($(this).parents("tr")).data();
        window.open('./views/expediente.php?idexp=' + data.cid_expediente);
        console.log(data.cid_expediente);
    });
};

var editarPasajeros = function () {

    $('#tablePasajeros tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            tablePasajeros.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        idPasajero = $('td', this).eq(0).text();
        var c2 = $('td', this).eq(1).text();
        var c3 = $('td', this).eq(2).text();
        var c4 = $('td', this).eq(3).text();
        var c5 = $('td', this).eq(4).text();
        var c6 = $('td', this).eq(5).text();

        console.log(this);

        if ($('input[name=paxPrincipal]').attr('checked')) {
            console.log('is_checked');
        } else {
            console.log('is_not_checked');
        }
        $("#apeP").val(c2);
        $("#apeM").val(c3);
        $("#nombre1").val(c4);
        $("#nombre2").val(c5);

    });
};

function filterColumn(i) {
    $("#tableExpedientes").DataTable().column(i).search(
            $('#col' + i + '_filter').val()
            ).draw();
}

$("#addPasaporte").click(function (event) {
    event.preventDefault;

    $("#uploadFiles")[0].reset();
    idUploadPDF = this.id;
    $("#messageFiles").val('');

});
$("#addVisa").click(function (event) {
    event.preventDefault;
    $("#uploadFiles")[0].reset();
    idUploadPDF = this.id;
    $("#messageFiles").val('');
});


$(function () {
    $("input[name='file01']").on("change", function () {
        var formData = new FormData($("#uploadFiles")[0]);
//        var idmc = $('#idMC').val();
        formData.append("idButtonUpload", idUploadPDF);
        formData.append("idPasajero", idPasajero);
        console.log(formData);
        $.ajax({
            url: "../controllers/PasajerosController.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (datos) {
//            console.log(datos);
                $("#messageFiles").html(datos).fadeOut(5000);
//                $('.seccionToggle').slideToggle();
                $('#iframeid').attr('src', "../pasaportesFiles/" + idPasajero + ".pdf");
//                 $('#iframeid').attr('src', "../visasFiles/" + idPasajero + ".pdf");
            }
        });
    });
});

$(":button").click(function (event) {
    event.preventDefault();
    let id = this.id;
    valInputs = $("form").serialize();
    console.log(valInputs);
    if (this.id === "btnAgregaPasajeros") {
//        console.log(this.id);
//        console.log(valInputs);
        $.ajax({
            url: "../services/pasajerosService.php",
            type: "post",
            data: valInputs,
            beforeSend: function () {
                $("#apeP").val('');
                $("#apeM").val('');
                $("#nombre1").val('');
                $("#nombre2").val('');
                $("#titulo").val('');
            },
            success: function (response) {
                $("#mensajePaxAjax").html(response);
                console.log(response);
//                tablePasajeros.ajax.reload();
//                location.reload("");
//                window.close('../views/updateCupon.View.php');
//                window.open('../index.php');
            }
        });
    } else if (this.id === "btneditarPasajeros") {
        console.log(this.id);
        $.ajax({
            url: "../services/editPasajerosService.php",
            type: "post",
            data: valInputs,
            beforeSend: function () {
                $("#apeP").val('');
                $("#apeM").val('');
                $("#nombre1").val('');
                $("#nombre2").val('');
                $("#titulo").val('');
            },
            success: function (response) {
                $("#mensajePaxAjax").html(response);
                console.log(response);
//                tablePasajeros.ajax.reload();
//                location.reload("");
//                window.close('../views/updateCupon.View.php');
//                window.open('../index.php');
            }
        });
    }else if( this.id ==="consultaPasaporte"){
        ibButtonPasaporte = this.id;
         $('#iframeid').attr('src', "../pasaportesFiles/" + idPasajero + ".pdf");
    }else if(this.id ==="consultaVisa"){
        ibButtonVisas = this.id;
        console.log(ibButtonVisas);
        $('#iframeid').attr('src', "../visasFiles/" + idPasajero + ".pdf");
    }
});