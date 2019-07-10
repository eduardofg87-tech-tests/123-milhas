<?php

namespace App;

use App\Moto;

class Chofer implements Estacionamento
{
    /**
     * @var string
     */
    private $estado;

    public function __construct(string $estado)
    {
        $this->estado = $estado;
    }

    public function estacionar(Moto $moto)
    {
        $moto->setEstado($this->estado);
        return $moto->getEstado();
    }
}
