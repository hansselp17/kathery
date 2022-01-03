//(funcion)(){
    var formulario = document.getElementById('formulario'),
		nombre = formulario.nombre, 
        apellido = formulario.apellido,
		correo = formulario.correo,
        contraseña = formulario.contraseña,
		genero = formulario.genero,
		terminos = formulario.terminos,
		error = document.getElementById('error');
function validarNombre(e){
    if(nombre.value == '' || nombre == null){
        console.log('Completa el nombre');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Nombre</li>';
        e.preventDefault();  
}else{
    error.style.display='none';      


function validarCorreo(e){
     if(correo.value == '' || correo == null){
        console.log('Completa el correo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Email</li>';
        e.preventDefault();
}else{
    error.style.display='none';     

function validarSexo(e){
    if(sexo.value == '' || genero.value == null){
        console.log('Selecciona Un genero');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Selecciona Un genero</li>';
        e.preventDefault();
    }else{
    error.style.display='none';
}
}
function validarTerminos(e){
    if(terminos.checked == false){
        console.log('Acepta Los Terminos');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Acepta Los Terminos</li>';
        e.preventDefault();
    }else if(nombre.value == '' || nombre == null || correo.value == '' || correo == null || sexo.value == '' || sexo.value == null){
    error.style.display='block';
}
}

function validarForm(e){
   error.innerHTML = '';
   error.style.display = 'block';
   validarNombre(e);
   validarCorreo(e);
   validarSexo(e);
   validarTerminos(e);
}


formulario.addEventListener('submit', validarForm);

//}())