// JavaScript Document
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function formulario(){
divContenido=document.getElementById('mensaje')
	var xn1=document.registro.cedula.value;
	var xn2=document.registro.nombre.value;
	var xn3=document.registro.user.value;
	var xn4=document.registro.pw.value;
	var xn5=document.registro.pw2.value;
	var xn6=document.registro.email.value;
		var url;
	url="registrar_c.php?n1="+xn1+"&n2="+xn2+"&n3="+xn3+"&n4="+xn4+"&n5="+xn5+"&n6="+xn6;
	ajax=objetoAjax();
	ajax.open("GET",url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if (ajax.status==200)
			  {
			      divContenido.innerHTML = ajax.responseText
			  }
			 else
			  {
			 	alert("error =" +ajax.statusText);}
		}
	}
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(null)
	
}
function eliminar(){
divContenido=document.getElementById('mensaje')
	var xn1=document.eliminarusu.nombre.value;
		var url;
	url="eliminar.php?n1="+xn1;
	ajax=objetoAjax();
	ajax.open("GET",url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if (ajax.status==200)
			  {
			      divContenido.innerHTML = ajax.responseText
			  }
			 else
			  {
			 	alert("error =" +ajax.statusText);}
		}
	}
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(null)
	
}
function ingresarpro(){
divContenido=document.getElementById('mensaje')
	var xn1=document.formpro.codigo.value;
	var xn2=document.formpro.despro.value;
	var xn3=document.formpro.cantidad.value;
	var xn4=document.formpro.precio.value;
		var url;
	url="reg_pro.php?n1="+xn1+"&n2="+xn2+"&n3="+xn3+"&n4="+xn4;
	ajax=objetoAjax();
	ajax.open("GET",url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if (ajax.status==200)
			  {
			      divContenido.innerHTML = ajax.responseText
			  }
			 else
			  {
			 	alert("error =" +ajax.statusText);}
		}
	}
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(null)
	
}
function actualizarusu(){
divContenido=document.getElementById('mensaje')
	var xn1=document.formactusu.viejo.value;
	var xn2=document.formactusu.nuevo.value;
		var url;
	url="modificar.php?n1="+xn1+"&n2="+xn2;
	ajax=objetoAjax();
	ajax.open("GET",url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if (ajax.status==200)
			  {
			      divContenido.innerHTML = ajax.responseText
			  }
			 else
			  {
			 	alert("error =" +ajax.statusText);}
		}
	}
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(null)
	
}
function mostrar(){
divContenido=document.getElementById('mensaje')
	var xn1=document.buscarr.codigo.value;
		var url;
	url="compra.php?n1="+xn1;
	ajax=objetoAjax();
	ajax.open("GET",url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if (ajax.status==200)
			  {
			      divContenido.innerHTML = ajax.responseText
			  }
			 else
			  {
			 	alert("error =" +ajax.statusText);}
		}
	}
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(null)
	
}
function principal(){
divContenido=document.getElementById('mensaje')
	var xn1=document.prin.user.value;
	var xn2=document.prin.pw.value;
	var url;
	url="verificar.php?n1="+xn1+"&n2="+xn2;
	ajax=objetoAjax();
	ajax.open("GET",url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if (ajax.status==200)
			  {
				  var res=trim(ajax.responseText);
				  if(res=="si")
				  {
					  document.location.href="index.php";
				  }
				  if(res=="si1")
				  {
					  document.location.href="index.php";
				  }
				  else
				  {
					divContenido.innerHTML =res;
				  }
			  }
			 else
			  {
			 	alert("error =" +ajax.statusText);}
		}
	}
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(null)
	
}
//eliminar campos vacios

function trim (myString)
{
return myString.replace(/^\s+/g,'').replace(/\s+$/g,'')
}
function mostrar2(){
divContenido=document.getElementById('mensaje')
	var xn1=document.buscarr.codigo.value;
		var url;
	url="compra2.php?n1="+xn1;
	ajax=objetoAjax();
	ajax.open("GET",url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if (ajax.status==200)
			  {
			      divContenido.innerHTML = ajax.responseText
			  }
			 else
			  {
			 	alert("error =" +ajax.statusText);}
		}
	}
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(null)
	
}
function formularioo(){ 
divContenido=document.getElementById('mensaje')
	var xn1=document.registroo.cedula.value;
	var xn2=document.registroo.nombre.value;
	var xn3=document.registroo.user.value;
	var xn4=document.registroo.pw.value;
	var xn5=document.registroo.pw2.value;
	var xn6=document.registroo.email.value;
		var url;
	url="registrar_admin.php?n1="+xn1+"&n2="+xn2+"&n3="+xn3+"&n4="+xn4+"&n5="+xn5+"&n6="+xn6;
	ajax=objetoAjax();
	ajax.open("GET",url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if (ajax.status==200)
			  {
			      divContenido.innerHTML = ajax.responseText
			  }
			 else
			  {
			 	alert("error =" +ajax.statusText);}
		}
	}
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(null)
	
}
function cambiarclaveadmin(){
divContenido=document.getElementById('mensaje')
	var xn1=document.formclaveadmin.claveant.value;
	var xn2=document.formclaveadmin.clavenue.value;
	var xn3=document.formclaveadmin.claveconfir.value;
		var url;
	url="clave_nueva_admin.php?n1="+xn1+"&n2="+xn2+"&n3="+xn3;
	ajax=objetoAjax();
	ajax.open("GET",url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if (ajax.status==200)
			  {
			      divContenido.innerHTML = ajax.responseText
			  }
			 else
			  {
			 	alert("error =" +ajax.statusText);}
		}
	}
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send(null)
	
}