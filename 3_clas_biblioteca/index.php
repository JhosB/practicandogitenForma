<?php
// class Biblioteca{
    
// }

// class Material extends Biblioteca{
//     PRIVATE $tipoMaterial;
//     PRIVATE $codigo;
//     PRIVATE $autor;
//     PRIVATE $titulo;
//     PRIVATE $año;
//     PRIVATE $status;

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

    class Libro extends Material{
        PRIVATE $editorial;

        function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status,$editorial){
            $this->tipoMaterial=$tipoMaterial;
            $this->codigo=$codigo;
            $this->autor=$autor;
            $this->titulo=$titulo;
            $this->año=$año;
            $this->status=$status;
        }

        function datosLibro($datos){
            return $this->$datos;
            }
    }

    // class Revista extends Material{
        // https://www.php.net/manual/es/language.oop5.inheritance.php
    // }

}
$libro1=new Libro('Cuero',10,'Milton smith','codigo facilito',2001,'en uso');

echo $ob->datosLibro("tipoMaterial").'<br>';
echo $ob->datosLibro("codigo").'<br>';
echo $ob->datosLibro("autor").'<br>';

//    class Biblioteca{ 
//     private $documento;
//     private $nombre;
//     private $ficha;
//   //setters y getters
//     function __construct($documento,$nombre,$ficha){
//         $this->documento=$documento;
//         $this->nombre=$nombre;
//         $this->ficha=$ficha;
//     }
//     //reemplazar los 3 setters por uno
//     function setter($atributo,$valor){
//         $this->$atributo=$valor;
//     }

//     //ejemplo "documento"
//     function getter($nombreAtributo){
//         return $this->$nombreAtributo;
//     }
// }
// $ob=new Aprendiz(654321,"Maria Iribarne",2142345);

// $ob->setter("documento",99999);
// $ob->setter("nombre","Paola Turbay");
// $ob->setter("ficha",2142329);
// echo $ob->getter("nombre").'<br>';
// echo $ob->getter("ficha").'<br>';
// echo $ob->getter("documento").'<br>';
?>