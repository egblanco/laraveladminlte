/**
 * Created by desarrollador on 10/08/17.
 */
$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })



    $('#selectEmpresa').on('change', function (e) {
        var id_empresa = this.value;
        $.ajax({
            type: "POST",
            url: 'getEstructuraByIdEmpresa',
            data: {id: id_empresa},
            success: function( msg ) {

                var data = JSON.parse(msg);
                console.log(data.estructuras);
                console.log(data.uopadre);
                var cadena_select_oupadre = '';
                var cadena_select_estructuras = '';
                for (var i = 0; i < data.estructuras.length; i++){
                    cadena_select_estructuras = cadena_select_estructuras + '<option value="' + data.estructuras[i].id_estructura + '">' + data.estructuras[i].nombre + '</option>'
                }

                for (var j = 0; j < data.uopadre.length; j++){
                    cadena_select_oupadre = cadena_select_oupadre + '<option value="' + data.uopadre[j].id_unidad + '">' + data.uopadre[j].nombre + '</option>'
                }


                $('#selectEstructura').html(cadena_select_estructuras);
                $('#selectUO').html(cadena_select_oupadre);
            }
        });
    });





});