
<?php

class Cilindro {
    private $radio;
    private $altura;

    public function __construct($radio, $altura) {
        $this->radio = $radio;
        $this->altura = $altura;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function calcularAreaLateral() {
        return 2 * pi() * $this->radio * $this->altura;
    }

    public function calcularAreaTotal() {
        return 2 * pi() * $this->radio * ($this->radio + $this->altura);
    }

    public function calcularVolumen() {
        return pi() * $this->radio * $this->radio * $this->altura;
    }
}

echo "Ingrese el radio del cilindro: ";
$radio = (float) readline();

echo "Ingrese la altura del cilindro: ";
$altura = (float) readline();

$cilindro = new Cilindro($radio, $altura);

echo "Area lateral: " . $cilindro->calcularAreaLateral() . "\n";
echo "Area total: " . $cilindro->calcularAreaTotal() . "\n";
echo "Volumen: " . $cilindro->calcularVolumen() . "\n";

?>
