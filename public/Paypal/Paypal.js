var cos = document.getElementById('costo').value;
var costo = cos.toString();
var cita = document.getElementById('cita').value;
var id_cita = cita.toString();

paypal.Buttons({        
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                value: costo
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            //console.log(details)
            swal({
                title: 'Pago exitoso!',
                text: 'Esta alerta se cerrara en 1 segundo.',
                timer: 1000
              }).then(
                function () {},

                function (dismiss) {
                  if (dismiss === 'timer') {
                    console.log('La alerta fue cerrada en 1 segundo' )
                    //Aqui puedes hacer tu redireccion
                    location.href = "/PagoExitoso/"+id_cita;

                  }
                }
              )
            // window.location.href = "{{route('PagoExitoso')}}";
        })
    },
    onCancel: function (data) {
        swal({
            title: 'Compra cancelada!',
            text: 'Esta alerta se cerrara en 2 segundos.',
            timer: 2000
        });
    }
}).render('#paypal-payment-button');

