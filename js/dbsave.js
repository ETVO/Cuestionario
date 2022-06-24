function mal(delay, text)
{
    swal({
        icon: "error",
        title: '¡Algo salió mal! ',
        text: text,
        buttons: false,
        timer: delay,
    });
}

function exito(delay, text)
{
    swal({
        icon: "success",
        title: "¡Éxito!",
        text: "¡Respuesta registrada con sucesso!",
        buttons: false,
        timer: delay,
    });
}