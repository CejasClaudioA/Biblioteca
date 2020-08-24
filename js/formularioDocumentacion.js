$(document).ready(function() {
                $("#add_Autor").click(function(){
                var contador = $("input[type='text']").length;
                $(this).before('<div class="row" id="autor"> <div class="form-group col-md-6"> <label id="labelNombreAutor'+ contador +'" for="añadirNombreAutor'+ contador +'">Nombre autor:</label><input class="form-control" type="text" id="nombreAutor'+ contador +'" name="nombreAutor[]"></div><div class="form-group col-md-6"><label id="labelApellidoAutor" for="añadirApellidoAutor'+ contador +'">Apellido autor:</label><input class="form-control" type="text" id="apellidoAutor'+ contador +'" name="apellidoAutor[]"/> </div></div></div>');
                //$(this).before('<div class="row"> <div class="form-group col-md-6"> <label id="labelNombreAutor" for="añadirNombreAutor">Nombre autor:</label><input class="form-control" type="text" id="inputNombreAutor" name="NombreAutor[]"></div><div class="form-group col-md-6"><label id="labelApellidoAutor" for="añadirApellidoAutor'+ contador +'">Apellido autor:</label><input class="form-control" type="text" id="inputApellidoAutor" name="ApellidoAutor[]"/> </div></div></div>');
                $(this).before('<button id="eliminar" type="button" class="btn btn-primary badge badge-light eliminarCuadro">Eliminar autor</button></div>');
                });

                $(document).on("click",".eliminarCuadro",function(){
                    $("#autor").remove();
                    $("#eliminar").remove();
//                    $(this).parent('nombreAutor').remove();
//                    $("#labelNombreAutor").remove();
//                    $("#labelApellidoAutor").remove();
//                    $("#inputNombreAutor").remove();
//                    $("#inputApellidoAutor").remove();
//                    $("#eliminar").remove();
                });
                
//            $(document).on('click', '.eliminarCuadro', function(){
//                $(this).parent().remove();
//            });
        });