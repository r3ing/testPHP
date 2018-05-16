document.write("<script type='text/javascript' src='2.js'></script>");

function hola1(){
	hola2();
}

function testing(){
	const regex = /^[A-Za-z·ÈÌÛ˙¡…Õ”⁄Ò—\s]+$/gm;
	const str = 'carlos alberto ÒaÒo';

	var obj = new RegExp(regex);
	if (obj.test(str)) {
		console.log("OK");
	} else {
		console.log("NO NO NO");
	}
}

function onlyNumbers(evt) {

	//var theEvent = evt || window.event;
	var key = evt.keyCode || evt.which;
	key = String.fromCharCode( key );
	var regex = /[0-9]|\./;
	if( !/\d/.test(key) ) {
		evt.preventDefault();
	}
}

function valida(){
	var dir = new RegExp("/^[A-Za-z·ÈÌÛ˙¡…Õ”⁄Ò— ]+$/");//RegExp('[\\:/*\?"<>|]');
	if(dir.test(document.getElementById('exp').value))
		alert("test dice 111111111");
	else
		alert("test dice 000000000");

	if (dir.exec(document.getElementById('exp').value))
		alert("exec dice 111111111");
	else
		alert("exec dice 00000000");

	if (document.getElementById('exp').value.match(dir))
		alert("match dice 11111111");
	else
		alert("match dice 0000000");

}

