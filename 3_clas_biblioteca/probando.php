<?php
class Biblioteca {
    PRIVATE $titulo;
    PRIVATE $autor;
    PRIVATE $numPag;
    PRIVATE $tipoCubierta;
    PRIVATE $precio;
    PRIVATE $año;
    PRIVATE $codigo;

    //metodo constructor
    function __construct($titulo,$autor,$numPag,$tipoCubierta,$precio,$año,$codigo){
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->numPag=$numPag;
        $this->tipoCubierta=$tipoCubierta;
        $this->precio=$precio;
        $this->año=$año;
        $this->codigo=$codigo;
    }
}

class Libro extends Biblioteca {
    function __construct($titulo,$autor,$numPag,$tipoCubierta,$precio,$año,$codigo){
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->numPag=$numPag;
        $this->tipoCubierta=$tipoCubierta;
        $this->precio=$precio;
        $this->año=$año;
        $this->codigo=$codigo;
    }

    function datosLibro($datos){
        return $this->$datos;
        }
}

class Revista extends Biblioteca {
    function __construct($titulo,$autor,$numPag,$tipoCubierta,$precio,$año,$codigo){
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->numPag=$numPag;
        $this->tipoCubierta=$tipoCubierta;
        $this->precio=$precio;
        $this->año=$año;
        $this->codigo=$codigo;
    }

    function datosRevista($datos){
        return $this->$datos;
        }
}



$libro1 = new Libro('codigo facilito','Milton smith',299,'dura',38000,2001,777);
$revista1 = new Revista('revista TVON','wil khan',65,'rustica',10000,2020,4123); 


echo $libro1->datosLibro("titulo").'<br>';
echo $libro1->datosLibro("codigo").'<br>';
echo $libro1->datosLibro("autor").'<br>';


echo $revista1->datosRevista("titulo").'<br>';
echo $revista1->datosRevista("codigo").'<br>';
echo $revista1->datosRevista("autor").'<br>';

?>