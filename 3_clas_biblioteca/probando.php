<?php
class Material{
    PRIVATE $tipoMaterial;
    PRIVATE $codigo;
    PRIVATE $autor;
    PRIVATE $titulo;
    PRIVATE $año;
    PRIVATE $status;

    //metodo constructor
    function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status){
                $this->tipoMaterial=$tipoMaterial;
                $this->codigo=$codigo;
                $this->autor=$autor;
                $this->titulo=$titulo;
                $this->año=$año;
                $this->status=$status;
            }
class e extends Material{
    
}
}
?>