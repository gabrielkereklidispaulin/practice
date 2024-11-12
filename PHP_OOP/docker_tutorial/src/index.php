<!-- Exempel -->

<?php
class Person
{
    public $namn;
    public $ålder;
    public function haelsa()
    {
        echo "Hej jag heter " . $this->namn;

    }
}
?>

<!-- Exempel -->

<?php
class BankKonto
{
    private $saldo = 0;
    public function sättIn($belopp)
    {
        $this->saldo += $belopp;

    }


    public function hämtaSaldo()
    {
        return $this->saldo;
    }
}
?>