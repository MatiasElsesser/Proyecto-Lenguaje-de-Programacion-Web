
$(document).ready(() => {

    $("#form").on("submit", () =>{

        $.ajax({

            url: $("#form").attr("action"),
            type: $("#form").attr("method"),
            data: $("#form").serialize(),
            
            success: (response) => {
                const data = JSON.parse(response);
                console.log(data);
                $("#Resultado").html('Nombre:  ' + data.user.nombre + '<br>' + 'Apellido:  ' + data.user.apellido + '<br>' + 'Edad:  ' + data.user.edad + '  años');
            }

        });

        return false;

    });
    
});