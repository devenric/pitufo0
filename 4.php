<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//clase
    class cuentaBancaria{
        private $titular;
        private $saldo;
//metodos
    public function __construct($titular,$saldoInic){
        $this-> titular = $titular;
        $this-> saldo = $saldoInic;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function getTitular(){
        return $this->titular;
    }
    public function depositar($cantidad){
        $this->saldo += $cantidad;
    }
    public function retirar($cantidad){
        $this->saldo -=$cantidad;
    }
    }

//definicion objetos
$usuario1 = new cuentaBancaria("Enric", 100);
$usuario1->depositar(50);
echo $usuario1->getTitular().' Saldo actual: '. $usuario1->getSaldo();
    ?>
</body>
</html>