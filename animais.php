<?php

class Animal{
    public $especie;
    public $patas;
    public $pele;
    public $som;
    public $movimento;

    function __construct($especie, $patas, $pele, $som, $movimento) {
        $this->especie = $especie;
        $this->patas = $patas;
        $this->pele = $pele;
        $this->som = $som;
        $this->movimento = $movimento;
}
}
$porco = new Animal("Porco", 4, "Pelos", "Oinc", "Anda");
$vaca = new Animal("Vaca", 4, "Pelos", "Muu", "Anda");
$galinha = new Animal("Galinha", 2, "Penas", "Cocoricó", "voa baixo ");
$codorna = new Animal("Codorna", 2, "Penas", "pi pi pi", "Voa");
$cavalo = new Animal("Cavalo", 4, "Pelos", "iiirrrrí", "Corre");

echo "Animal: $porco->especie\n";
echo "Patas: $porco->patas\n";
echo "Pele: $porco->pele\n";
echo "Som: $porco->som\n";
echo "Movimento: $porco->movimento\n\n";

echo "Animal: $vaca->especie\n";
echo "Patas: $vaca->patas\n";
echo "Pele: $vaca->pele\n";
echo "Som: $vaca->som\n";
echo "Movimento: $vaca->movimento\n\n";

echo "Animal: $galinha->especie\n";
echo "Patas: $galinha->patas\n";
echo "Pele: $galinha->pele\n";
echo "Som: $galinha->som\n";
echo "Movimento: $galinha->movimento\n\n";

echo "Animal: $codorna->especie\n";
echo "Patas: $codorna->patas\n";
echo "Pele: $codorna->pele\n";
echo "Som: $codorna->som\n";
echo "Movimento: $codorna->movimento\n\n";

echo "Animal: $cavalo->especie\n";
echo "Patas: $cavalo->patas\n";
echo "Pele: $cavalo->pele\n";
echo "Som: $cavalo->som\n";
echo "Movimento: $cavalo->movimento\n";