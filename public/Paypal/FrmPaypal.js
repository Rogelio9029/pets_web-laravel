document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("FormularioCitas").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
    var usuario = document.getElementById('firstName').value;
    if(usuario.length == 0) {
      alert('Ingrese un nombre');
      return;
    }
    var apellido = document.getElementById('lastName').value;
    if (apellido.length == 0) {
      alert('Ingrese apellido');
      return;
    }
    var mascota = document.getElementById('mascota').value;
    if (mascota.length == 0) {
      alert('seleccione mascota');
      return;
    }
    var fecha = document.getElementById('fecha').value;
    const fechaActual = new Date();
    if(fecha.length == 0){
        alert('Ingrese una fecha');
        return;
      }
    if(Date.parse(fecha) < Date.parse(fechaActual)){
      alert('Ingrese una fecha adecuada');
      return;
    }
    var email = document.getElementById('email').value;
    if (email.length == 0) {
      alert('ingrese un email');
      return;
    }
    var telefono = document.getElementById('telefono').value;
    if (telefono.length == 0 || telefono.length > 10 || telefono.length < 10 ) {
        alert('ingrese un numero de telefono adecuado');
        return;
    }
    // if(isNaN(parseInt(telefono.value))){
    //     alert('ingrese un numero de telefono');
    //     return;
    // }

    this.submit();
}