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


    $('#buscar-codigos').on('click', function(){
       var cp = $('#codigo-postal').val();

       $.ajax({
           data:'cp=' + cp,
           url:'codigos.php',
           type:'GET',
           dataType:'json',
           success:function(respuesta){

               if(respuesta.encontrados > 0){
                   $('#colonias').html( respuesta.html );
               }else{
                   alert(respuesta.mensaje);
               }

           },
           error:function(){
               alert('Error al realizar la consulta');
           }
       });


    });

});