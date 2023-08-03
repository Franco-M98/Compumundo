const form = document.getElementById('form');
const nombre = document.getElementById('nombre');
const apellido = document.getElementById('apellido');
const usuario = document.getElementById('usuario');
const contrasena = document.getElementById('contrasena');
const contrasena1 = document.getElementById('contrasena1');

form.addEventListener('submit', e =>{
	e.preventDefault();
	checkInputs();
});

function checkInputs(){
	const nombrevalue = nombrevalue.trim();
	const apellidovalue = apellidovalue.trim();
	const usuariovalue = usuariovalue.trim();
	const contrasenavalue = contrasenavalue.trim();
	const contrasena1value = contrasena1value.trim();

	if (usuariovalue == ""){
		setErrorFor(usuario, 'No puede dejar el usuario en blanco.');
	}else{
		setSuccesFor(usuario);

	}
}
function setErrorFor(input, massage){
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innertext = massage;
}

function setSuccesFor(input){
	const formControl = imput.parentElement;
	formControl.className = 'form-control succes'
}