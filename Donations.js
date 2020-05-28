
let pago;

function setMonto(monto){
    var rute_pago = '';
    pago = monto;

    if(pago == 100){
        //rute_pago = 'url_pago_mercadopago';
        obj_button = document.getElementsByClassName("bot1");
    }
    if(pago == 200){
        obj_button = document.getElementsByClassName("bot2");
    }
    if(pago == 300){
        obj_button = document.getElementsByClassName("bot3");
    }
    if(pago == 400){
        obj_button = document.getElementsByClassName("bot4");
    }

    //Reinicio colores de botones, luego queda tildado el seleccionado
    for(i=1;i<5;i++){
        document.getElementsByClassName("bot"+i).item(0).style.backgroundColor = "#ee2346";
    }

    obj_button.item(0).style.backgroundColor = "#fdb73f";
}

document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '6' == event.detail.contactFormId ) {
        alert( "Comenzar el pago " + pago );
    
        if(pago != 0 ){
            //document.getElementById("mp-button").click();
            alert( " MercadoPago Click()  " );
        }else{
            alert('Por favor seleccione el monto a donar');
        }
    }
}, false );


var clic = 1
function getDonationVisible() {		
    if(clic==1){
        document.getElementById("boton-donation").style.top = "0px";
        document.getElementById("boton-donation").style.transform = "scale(0.8)";
        document.getElementById("boton-donation").style.transition = "0.15s";
        document.getElementById("aparece-button").style.visibility = "visible";					
        clic = clic + 1;
    }  
}	
