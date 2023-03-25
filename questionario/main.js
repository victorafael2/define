

function submitForm() {
    const formData = $('#form').serialize();

    $.ajax({
        type: 'POST',
        url: 'processar_questionario2.php',
        data: formData,
        dataType: 'json',
        beforeSend: function() {
            Swal.fire({
                title: 'Enviando dados...',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        },
        success: function(response) {
            if (response.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Dados enviados e salvos com sucesso!'
                }).then(() => {
                    const insertedId = response.inserted_id;
                    window.location.href = `sucess_.php?id=${insertedId}`; // Atualize o URL conforme necessário
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ocorreu um erro ao salvar os dados. Por favor, tente novamente.'
                });
            }
        },
        error: function() {
            Swal.fire({
                icon: 'error',
                title: 'Eita...',
                text: 'Ocorreu um erro ao salvar os dados. Por favor, tente novamente.'
            });
        },
        complete: function() {
            Swal.close();
        }
    });
}

$('#form').on('submit', function (event) {
    event.preventDefault();
    submitForm();
});


