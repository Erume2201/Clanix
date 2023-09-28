export function alertaError() {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: '¡Mensaje No Enviado!',
      footer: '<a href="./modules/view/mensNoEnviado.html">¿por qué no funciona?</a>'
    });
  }