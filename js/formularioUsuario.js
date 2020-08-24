
$(document).ready(function() {
                $("#add_domicilio").click(function(){
                var contador = $("input[type='text']").length;
                $(this).before('<div class="row" id="otroDomicilio"><div class="form-group col-md-4"><div class="form-group"><label id="labelProvincia'+ contador +'">Provincia </label><input class="form-control" type="text" id="provincia'+ contador +'" name="provincia[]"></div></div><div class="form-group col-md-4"><label id="labelLocalidad'+ contador+ '">Localidad</label><input class="form-control" type="text" id="localidad'+ contador +'"" name="localidad[]"></div><div class="form-group col-md-4"><label id="labelDomicilio'+ contador+ '">Domicilio</label><input class="form-control"  type="text" id="domicilio'+ contador +'" name="direccion[]" ></div></div>')
                $(this).before('<button id="eliminar" type="button" class="btn btn-primary badge badge-light eliminarCuadro">Eliminar Domicilio</button></div>');
                });

                $(document).on("click",".eliminarCuadro",function(){
                    $("#otroDomicilio").remove();
                    $("#eliminar").remove();
                });
                

        });

//function obtenerJSON() {
//    $.ajax({
//      type: "GET",
//      dataType: "json",
//      url: "datos/localidad.json",
//      success: function(data) {
//        cargarProvincias(data);
//      }
//   });
//}
//
// function cargarProvincias(data){
//     console.log(data);
//        $.each( data.municipios, function( clave, valor ) {
////            alert(data.provincia);
//            $("#prov").append('<option name="'+clave+'">' + valor.provincia.nombre+ '</option>'); 
//            });
////            localidadJSON();
// }
// 
 
 
// function localidadJSON() {
//    $.ajax({
//      type: "GET",
//      dataType: "json",
//      url: "datos/localidad.json",
//      success: function(data) {
//        cargarLocalidades(data);
//      }
//   });
//}
//
//function cargarLocalidades(data){
//     console.log(data);
//        $.each( data.municipios, function( clave, valor ) {
//            $("#localidad1").append('<option name="'+clave+'">' + valor.nombre+ '</option>'); 
//            });
//            localidadJSON();
// }


//(function iniciar(){
//    obtenerJSON();
//    
//})
//();