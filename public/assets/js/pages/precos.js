    const selectPreco01          = $('#select-preco01');
    const selectPreco02          = $('#select-preco02');
    const selectPreco03          = $('#select-preco03');
    const selectPreco04          = $('#select-preco04');
    const formSelectPreco         = $('#form-select-preco');
    
    
    

    formSelectPreco.on('submit', function (e){
        e.preventDefault();

        var formData = {
            Preco01:      selectPreco01.val(),
            Preco02:       selectPreco02.val(),
            Preco03:         selectPreco03.val(),
            Preco04:         selectPreco04.val()
        }

        sendFormDataToGeneratePixPayment(formData);
    });
    

     const sendFormDataToGeneratePixPayment = (formData) => {
            
            const Preco01 = '1,99';
            const Preco02 = '5,99';
            const Preco03 = '9,99';
            const Preco04 = '14,99';
        

       
    }
    
    

    const showInformationToPay = (formData) => {

        const Preco001         = formData.Preco01;
        const Preco002         = formData.Preco02;
        const Preco003         = formData.Preco03;
        const Preco004         = formData.Preco04;

        $("#id-Preco001").val(Preco001);
        $("#id-Preco002").val(Preco002);
        $("#id-Preco003").val(Preco003);
        $("#id-Preco004").val(Preco004);

        $("#copyButton").click(function() {
            var copyText = $("#code-pix");
            copyText.select();
            document.execCommand("copy");
            $('#copyButton').text("Copiado! :)");
        });

    }
