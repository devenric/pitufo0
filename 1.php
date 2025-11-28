<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //clases
        class Coche{
            public $marca;
            public $modelo;
        
    //metodos 
    public function __construct($a,$b){
        $this-> marca = $a;
        $this-> modelo = $b;
    }
public function mostrarInfo(){
echo "coche: <br><br>". $this->marca ." <br> ". $this->modelo;
    }
}
    //defObj
    $coche = new Coche("coche", "marca");
    $coche -> mostrarInfo(); //permite aplicar funcion 
    ?>
</body>
</html>