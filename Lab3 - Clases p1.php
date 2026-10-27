
<?php

class Empleado {
    private $nombre;
    private $cedula;
    private $edad;
    private $sueldoBruto;
    private $seguroSocial;
    private $impuestoRenta;
    private $sueldoNeto;

    public function __construct($nombre, $cedula, $edad, $sueldoBruto, $seguroSocial, $impuestoRenta) {
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->edad = $edad;
        $this->sueldoBruto = $sueldoBruto;
        $this->seguroSocial = $seguroSocial;
        $this->impuestoRenta = $impuestoRenta;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getSueldoBruto() {
        return $this->sueldoBruto;
    }

    public function getSeguroSocial() {
        return $this->seguroSocial;
    }

    public function getImpuestoRenta() {
        return $this->impuestoRenta;
    }

    public function getSueldoNeto() {
        return $this->sueldoNeto;
    }

    public function calcularSS() {
        $this->seguroSocial = $this->sueldoBruto * 0.125;
    }

    public function calcularIR() {
        if ($this->sueldoBruto < 11000) {
            $this->impuestoRenta = 0;
        } elseif ($this->sueldoBruto < 50000) {
            $this->impuestoRenta = $this->sueldoBruto * 0.15;
        } else {
            $this->impuestoRenta = $this->sueldoBruto * 0.25;
        }
    }

    public function setSueldoNeto() {
        $this->sueldoNeto = $this->sueldoBruto - $this->seguroSocial - $this->impuestoRenta;
    }
}

$empleado = new Empleado("Carlos Perez", "8-123-456", 25, 30000, 0, 0);

$empleado->calcularSS();
$empleado->calcularIR();
$empleado->setSueldoNeto();

echo "Nombre: " . $empleado->getNombre() . "\n";
echo "Cedula: " . $empleado->getCedula() . "\n";
echo "Edad: " . $empleado->getEdad() . "\n";
echo "Sueldo bruto: $" . $empleado->getSueldoBruto() . "\n";
echo "Seguro social: $" . $empleado->getSeguroSocial() . "\n";
echo "Impuesto sobre la renta: $" . $empleado->getImpuestoRenta() . "\n";
echo "Sueldo neto: $" . $empleado->getSueldoNeto() . "\n";

?>
