<?php

namespace App;

class Moto implements Veiculos
{
    private $estado;
    
    public function setEstado(string $estado)
    {
        $this->estado = $estado;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }
}
