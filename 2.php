<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Coche{
        private $marca;
        private $modelo;

    //metodos 

    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this-> marca = $marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($valor){
        // Corregido: Asigna a la propiedad $modelo
        $this-> modelo = $valor;
    }
}
//definicion obj 
$coche1 = new Coche();

$coche1->setMarca("Toyota");
$coche1->setModelo("Corolla"); 

$coche1->getMarca(); 
$coche1->getModelo();

echo "Coche: <br><br> marca:" . $coche1-> getMarca() . "<br> modelo:" . $coche1-> getModelo();
    ?>
</body>
</html>
</body>
</html>