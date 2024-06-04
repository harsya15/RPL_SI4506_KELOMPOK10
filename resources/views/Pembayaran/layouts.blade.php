<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="{{asset('frontend')}}/css/pembayaran.css">
</head>
<body>
    @yield('content')
</body>

<script>
    function handleRadioClick(radio) {
        var selectedValue = radio.value;
        window.localStorage.setItem('checked', selectedValue);
    }

    function test(id, nama, harga){
        var valueLocal  = localStorage.getItem("checked")
        console.log(valueLocal)
        $('input[name="radio-card"][value="' + valueLocal + '"]').prop('checked', true);
 
        $('#myModal').modal('show');
        $('.id_menu').val(id)
        $('.nama_menu').val(nama)
        $('.harga').val(harga)

        $('#harga_payment').empty()
        $('#harga_payment').append('Rp. '+harga)
    }

    function next(){
        var payment_method = $('input[name="radio-card"]:checked').val();

        if(payment_method == 'CC'){
            $('#myModalCC').modal('show');
        }else{
            $('#id_bank').empty()
            $('#id_bank').append('Bank '+payment_method)
            $('#id_bank_save').val(payment_method)
            
            $('#myModalBank').modal('show');
        }

    }
</script>

</html>