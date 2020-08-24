var inputNombre = document.getElementById('nombreLibro');
var inputInventario = document.getElementById('inventario');
var inputModal= document.getElementById('datoEliminar');
//var labelModal= document.getElementById('labelNombre');
function seleccionar(tr, fila) {
    $(function () {
        $(tr).css("background-color", "#BEDAE8");
    });

    var t = document.getElementById('table');
    console.log(t.rows[fila].cells[0].innerText);
//    inputModal.value=(t.rows[fila].cells[1].innerText);
    inputModal.value=("Nombre: " + t.rows[fila].cells[1].innerText + ", nroInventario: "+ t.rows[fila].cells[0].innerText);
//    labelModal.value=(t.rows[fila].cells[1].innerText);


    inputInventario.value = t.rows[fila].cells[0].innerText;
    inputNombre.value = t.rows[fila].cells[1].innerText;

}