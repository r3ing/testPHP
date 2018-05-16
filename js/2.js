function hola2(){

	exp = new RegExp("^[A-Za-z0-9\\s]+$");
	texto = " As #";

	
	/*
	if (exp.exec(texto)) {
		alert("exec");
	}
	else{
		alert("ooooo");	
	}
	*/

	if (exp.test(texto)) {
		alert("test");
	}
	else{
		alert("uuuuuu");	
	}
	
	

	if (texto.match(exp)) {
		alert("match");
	}
	else{
		alert("cccccccc");	
	}
	
}