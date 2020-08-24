/**
 * Muestra y oculta el div correspondiente al hacer click sobre el boton.
 * @param {type} id
 * @returns {undefined}
 */
function mostrarOcultar(id) {
  obj= document.getElementById(id);
  obj.style.visibility = (obj.style.visibility === 'hidden') ? 'visible' : 'hidden';
}