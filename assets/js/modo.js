function cambiarModo() {
	var cuerpoweb = document.body;
		cuerpoweb.classList.toggle("oscuro");
}


//// Selecciono el cuerpo del documento HTML (body) 
//
//
//// Obtengo el valor actual de la key 'modo' en localStorage 
//var modocolor = localStorage.getItem("modo"); 
//
//// Esta función carga el modo Oscuro o Claro, según el usuario haya configurado 
//function cargarModo() {    
//
//    if (modocolor === "oscuro") {               
//        cuerpoweb.classList.add("oscuro");
//    } else {
//        cuerpoweb.classList.add("claro");
//    }
//
//}
//
//// Cuando el usuario presiona el botón, llama a la función que corresponde
//// ya sea para activar el modo claro o el modo oscuro
//var btnpresionado = false;
//
//function cambiarModo() {
//	var cuerpoweb = document.body; 
//
//    if (btnpresionado) { // Si No es presionado el botón 
//        cuerpoweb.classList.remove("oscuro");
//        console.log(cuerpoweb);
//        localStorage.setItem("modo", "claro");
//        cuerpoweb.classList.add("claro");
//        btnpresionado = false;
//    } else { // Si es presionado el botón 
//
//        if (modocolor === "oscuro") {
//            resetear(); 
//            btnpresionado = true;           
//        } else {
//        	  console.log(cuerpoweb);
//            cuerpoweb.classList.remove("claro");
//            localStorage.setItem("modo", "oscuro");
//            cuerpoweb.classList.add("oscuro");        
//            btnpresionado = true;
//
//        }        
//    }
//}
//
//// Reseteamos la configuración realizada y refrescamos la página
//function resetear() {
//
//    localStorage.removeItem('modo');
//    location.reload();
//
//}