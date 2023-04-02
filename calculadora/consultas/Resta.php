<?php
class Resta
{
    public $n1;
    public $n2;

    public function __construct()
    {
        $this->n1 = $_POST['numero1'];
        $this->n2 = $_POST['numero2'];
    }

    public function resta()
    {
        return $this->n1 - $this->n2;
    }
}
$total = new resta();
$resultado = $total->resta();
echo "El resultado de la resta es: " . $resultado;

?>