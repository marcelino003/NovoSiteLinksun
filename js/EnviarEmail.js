$(document).ready(function() {
    $('#formulario').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $('#btn-enviar').prop('disabled', true);
        $('#loading').show();

        $.ajax({
            type: 'POST',
            url: 'processos/EnviarEmail.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });

                if (response.status === 'Enviado com Sucesso!') {
                    Toast.fire({
                        icon: 'success',
                        title: 'Mensagem enviada com sucesso!'
                    });
                    $('#formulario')[0].reset();
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: 'Erro ao enviar mensagem.'
                    });
                }

                  $('#btn-enviar').prop('disabled', false);
                $('#loading').hide();
            }
        });
    });
});
