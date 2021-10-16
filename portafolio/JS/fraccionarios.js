class operacion{
	constructor(nu1,nu2){
		this.nu1=nu1;
		this.nu2=nu2;

	}//llave constructor
//metodos

sumar(){
	let resultado=this.nu1 + this.nu2;
	return (document.getElementById("nu3").value=resultado);

}//llave metodo

restar(){
	let resultado=this.nu1 - this.nu2;
	return (document.getElementById("nu3").value=resultado);

}//llave metodo

multiplicar(){
	let resultado=this.nu1 * this.nu2;
	return (document.getElementById("nu3").value=resultado);

}//llave metodo

dividir(){
	let resultado=this.nu1 / this.nu2;
	return (document.getElementById("nu3").value=resultado);

}//llave metodo


}//llave clase

document.getElementById("suma").addEventListener("click",function(e){

	v1=parseInt(document.getElementById("nu1").value);
	
	v2=parseInt(document.getElementById("nu2").value);

	const resul=new operacion(v1,v2);

	console.log(typeof(v1));//Arroja el tipo de valor que hay

	resul.sumar();

	e.preventDefault();
});

//RESTAR

document.getElementById("restar").addEventListener("click",function(e){

	v1=parseInt(document.getElementById("nu1").value);
	
	v2=parseInt(document.getElementById("nu2").value);

	const resul=new operacion(v1,v2);

	//console.log(typeof(v1));//Arroja el tipo de valor que hay

	resul.restar();

	e.preventDefault();
});

//MULTIPLICAR

document.getElementById("multiplicar").addEventListener("click",function(e){

	v1=parseInt(document.getElementById("nu1").value);
	
	v2=parseInt(document.getElementById("nu2").value);

	const resul=new operacion(v1,v2);

	//console.log(typeof(v1));//Arroja el tipo de valor que hay

	resul.multiplicar();

	e.preventDefault();
});

//DIVIDIR

document.getElementById("dividir").addEventListener("click",function(e){

	v1=parseInt(document.getElementById("nu1").value);
	
	v2=parseInt(document.getElementById("nu2").value);

	const resul=new operacion(v1,v2);

	//console.log(typeof(v1));//Arroja el tipo de valor que hay

	resul.dividir();

	e.preventDefault();
});