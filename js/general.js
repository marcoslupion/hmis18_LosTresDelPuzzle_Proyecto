var login_button=document.getElementById("bt_login");
var usuario;
var contraseña;
login_button.onclick= function(e)
{
  usuario = document.getElementById("user");
  contraseña = document.getElementById("pass");
  var formulario = document.getElementById("form");
  var correcto=true;
  if(contraseña.value==""){
    falta_contraseña();
    correcto=false;
  }
  if(usuario.value==""){
    falta_usuario();
    correcto=false;
  }
  if(correcto){
    formulario.submit();
  }
}


function login_incorrecto()
{
  alert("El nombre de usuario o la contraseña son inválidos.");
}

function falta_usuario(){
  document.getElementById("no_user").innerHTML="<label class='error'>Este campo es obligatorio</label>";
}

function falta_contraseña(){
  document.getElementById("no_pass").innerHTML="<label class='error'>Este campo es obligatorio</label>";
}
