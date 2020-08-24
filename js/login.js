function mostrarError(id) {
  obj= document.getElementById(id);
  obj.style.visibility = (obj.style.visibility === 'hidden') ? 'visible' : 'hidden';
}