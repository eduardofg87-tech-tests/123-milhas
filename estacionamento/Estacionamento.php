<?php

namespace App;

use App\Moto;

interface Estacionamento
{
    public function estacionar(Moto $moto);
}
