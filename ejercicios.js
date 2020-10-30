$(document).ready(function(){

    $('#buscar-paises').on('keyup', function(){
        var busqueda = $(this).val();

        if(busqueda !== ''){
            $.ajax({
                data:'busqueda=' + busqueda,
                url:'paises.php',
                type:'GET',
                dataType:'html',
                success:function(respuesta){
                    $('#paises').html( respuesta );
                },
                error:function(){
                    alert('Ha sucedido un error');
                }
            });
        }
    });

});