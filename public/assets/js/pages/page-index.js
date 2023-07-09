    const inputEmail             = $('#input-email');
    const inputNickname          = $('#input-nickname');
    const inputQuantid           = $('#input-quantid');
    const inputTipo              = $('#input-tipo');
    const modalBodyPayer         = $('#modal-body-payer');
    const textareaMessage        = $('#textarea-message');
    const inputValuePayer        = $('#input-valuePayer');
    const modalBodyPayment       = $('#modal-body-payment');
    const formPayerInformation   = $('#form-payer-information'); 
    const alertFormPayer         = $('#alert-form-payer');
    
    

    formPayerInformation.on('submit', function (e){
        e.preventDefault();

        var formData = {
            nickname:      inputNickname.val(),
            message:       textareaMessage.val(),
            email:         inputEmail.val(),
            value:         inputValuePayer.val(),
            quantid:       inputQuantid.val(),
            tipo:          inputTipo.val()
        }

        sendFormDataToGeneratePixPayment(formData);
    });
    

     const sendFormDataToGeneratePixPayment = (formData) => {

        modalBodyPayer.addClass('d-none');
        modalBodyPayment.removeClass('d-none');

        $.post('public/payment/create.php', {data: formData}, function(response){

            if(response.status === "error"){
                modalBodyPayer.removeClass('d-none');
                modalBodyPayment.addClass('d-none');

                alertFormPayer.removeClass('d-none');
                alertFormPayer.text(response.message);
            } else {
                showInformationToPay(response);
            }
        });
    }
    
    

    const showInformationToPay = (information) => {

        const codePix             = information.qr_code;
        const QRCodePixBase64     = information.qr_code_base64;
        const idreference         = information.external_reference;

        $('#load').addClass('d-none');
        $("#img-pix").attr('src', 'data:image/jpeg;base64,' + QRCodePixBase64);
        $("#code-pix").val(codePix);
        $("#dix-pix").removeClass('d-none');
        $("#id-reference").val(idreference);

        $("#copyButton").click(function() {
            var copyText = $("#code-pix");
            copyText.select();
            document.execCommand("copy");
            $('#copyButton').text("Copiado! :)");
        });

    }
