$(document).ready(function(){
    var tablaDatos = $("#datos");
    var route = "http://localhost:8000/generos";

    $("#datos").empty();
    $.get(route, function(res){
        // Iterar todos los géneros
        console.log(res);
        $(res[0]).each(function(key,value){
            console.log(value.genre);
            // Agregará una fila a la tabla (tbody => #datos)
            tablaDatos.append("<tr><td>"+value.genre+"</td><td><button class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>");
        });
    });
});