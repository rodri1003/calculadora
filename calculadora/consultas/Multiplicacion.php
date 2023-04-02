<?php
class Multiplicacion
{
    public $n1;
    public $n2;

    public function __construct()
    {
        $this->n1 = $_POST['numero1'];
        $this->n2 = $_POST['numero2'];
    }

    public function Multiplicacion1()
    {
        return $this->n1 * $this->n2;
    }
}

$total = new Multiplicacion();
$resultado = $total->Multiplicacion1();
echo "El resultado de la multiplicación es: " . $resultado;
?>
