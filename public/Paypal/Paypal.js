var cos = document.getElementById('costo').value;
var costo = cos.toString();

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
            console.log(details)
            window.location.replace("/index{}")
        })
    },
    onCancel: function (data) {
        window.location.replace("/index")
    }
}).render('#paypal-payment-button');
