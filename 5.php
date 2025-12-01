<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Persona{
            private $nombre;
            private $edad;
            //metodos
            public function __construct($nombre,$edad){
                $this->nombre = $nombre;
                $this->edad = $edad;
            }

            public function setNombre(){
                isset($nombre) ?  $this->nombre = $nombre
            }
            public function setEdad(){
                
            }
        }
    ?>
</body>
</html>