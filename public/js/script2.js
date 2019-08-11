$(document).ready(function(){
    cargar();
});

function cargar() {
    var tablaDatos = $("#datos");
    var route = "http://localhost:8000/generos";

    $("#datos").empty();
    $.get(route, function(res){
        // Iterar todos los géneros
        console.log(res);
        $(res[0]).each(function(key,value){
            console.log(value.genre);
            // Agregará una fila a la tabla (tbody => #datos)
            tablaDatos.append("<tr><td>"+value.genre+"</td><td><button value="+value.id+" OnClick='mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
        });
    });
}

function mostrar(btn) {
    console.log('Valor botón: '+btn.value);
    var route = "http://localhost:8000/genero/"+btn.value+"/edit";

    // Nos trae el género correspondiente al id que viene por el botón (value)
    $.get(route, function(res){
        // Le asignamos los valores al formulario
        $("#genre").val(res.genre);
        $("#id").val(res.id);
    });
}

$('#actualizar').click(function () {
    // Obtener el valor del id
    var value = $('#id').val();
    var dato = $('#genre').val();
    var route = 'http://localhost:8000/genero/'+value;
    var token = $('#token').val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {genre: dato},

        success: function () {
            cargar();
            $('#myModal').modal('toggle');
            $('#msj-success').fadeIn();
        }
    });
});