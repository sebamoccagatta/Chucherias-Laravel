const body = document.getElementById('body');
var color = document.getElementById('dark-mode');


color.onclick = function () {
  body.style.backgroundcolor = "black";
}
console.log(body);

///////////////////////////////////////////////////

  let formulario = document.forms[0];
  let inputs = formulario.elements;
  let inputNombre = inputs[0];
  let inputApellido = inputs[1];
  let inputEmail = inputs[2];
  let inputContra = inputs[3];
  let inputConfirm = inputs[4];
  let botonEnviar = inputs[5];

  let errorNomb = document.getElementById('name');
  let errorAp = document.getElementById('apellido');
  let errorEm = document.getElementById('email');
  let errorCon = document.getElementById('password');
  let errorConCon = document.getElementById('password-confirm');

  let regexEmail = (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
  let regexContra = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;

  let errores = 0;

  formulario.onsubmit = function (e) {

    for (var input in inputs) {
      e.preventDefault()
      console.log(inputs[input].getAttribute('class'));
      // if (inputs[input].getAttribute('class') != 'form-control is-valid') {
      //   e.preventDefault()
      // } else {
      //   formulario.submit;
      // }
    }
  }

  inputNombre.onchange = function () {
    if (inputNombre.value.length <= 1) {
      inputNombre.setAttribute('class', 'form-control is-invalid');
      if (errorNomb.textContent == '') {
        let mensajeNomb = document.createTextNode('Nombre muy corto');
        errorNomb.appendChild(mensajeNomb);
        errores++;
      }
    } else {
      inputNombre.setAttribute('class', 'form-control is-valid');
      errores--;
    }
  }

  inputApellido.onchange = function() {
    if (inputApellido.value.length <= 1) {
      inputApellido.setAttribute('class', 'form-control is-invalid');
      let mensajeAp = document.createTextNode('Apellido muy corto');
      errorAp.appendChild(mensajeAp);
      errores++;
    } else {
      inputApellido.setAttribute('class', 'form-control is-valid');
      errores--;
    }
  }

  inputEmail.onchange = function() {
    if (regexEmail.test(inputEmail.value) == false) {
      inputEmail.setAttribute('class', 'form-control is-invalid');
      let mensajeEm = document.createTextNode('Email invalido');
      errorEm.appendChild(mensajeEm);
      errores++;
    } else {
      inputEmail.setAttribute('class', 'form-control is-valid');
      errores--;
    }

  }

  // inputContra.onchange = function() {
  //   if (regexContra.test(inputContra.value) == false) {
  //     inputContra.setAttribute('class', 'form-control is-invalid');
  //     let mensajeCon = document.createTextNode('Contraseña invalida');
  //     errorCon.appendChild(mensajeCon);
  //     errores++;
  //   } else {
  //     inputContra.setAttribute('class', 'form-control is-valid');
  //     errores--;
  //   }
  // }

  inputConfirm.onchange = function() {
    if (inputContra.value != inputConfirm.value) {
      inputConfirm.setAttribute('class', 'form-control is-invalid');
      let mensajeConCon = document.createTextNode('Contraseñas no coinciden');
      errores++;
      errorConCon.appendChild(mensajeConCon);
    } else {
      inputConfirm.setAttribute('class', 'form-control is-valid');
      errores--;
    }
  }


console.log(inputNombre);
/// api para el registro/////////////////////////////////////////////////////////////////////////

const selectPaises = document.getElementById('paises');
const divProv = document.getElementById('provAr');
const label = document.getElementById('label')

  fetch('https://restcountries.eu/rest/v2')
    .then(function(datos){
      return datos.json();
    })
    .then(function(arrayPaises){

      for (pais of arrayPaises) {

        let optionPais = document.createElement('option');
        optionPais.setAttribute('value', pais.alpha2Code);
        let nombrePais = document.createTextNode(pais.name);
        optionPais.appendChild(nombrePais);
        selectPaises.appendChild(optionPais);

    }
    });
console.log(selectPaises);
    selectPaises.onchange = function(){
      let paisSeleccionada = selectPaises.options[selectPaises.selectedIndex].value;

      if (paisSeleccionada == "AR") {
        let selectProvincia = document.createElement('select');
        let label = document.createElement('label');
        var textoLabel = document.createTextNode('provincias')
      


        fetch("https://apis.datos.gob.ar/georef/api/provincias")
        .then(function(respuesta){
          return respuesta.json();
        })
        .then(function(data){
          for (provincia of data.provincias) {
            var optionProvincia = document.createElement('option');
            var textoProvincia = document.createTextNode(provincia.nombre);
            optionProvincia.appendChild(textoProvincia);
            optionProvincia.setAttribute('value', provincia.id)
            selectProvincia.appendChild(optionProvincia);

            divProv.appendChild(selectProvincia);
          }
        });
      }
    }
