<?php

namespace App\Estacionamento\Tests;

use App\MotoFactory;
use App\Chofer;
use App\Moto;
use PHPUnit\Framework\TestCase;

class EstacionamentoTest extends TestCase
{

    public function testCanEstacionar()
    {
        $chofer = new Chofer("estacionado");
        $motoFactory = new Moto("estacionado");
        $estacionado = $chofer->estacionar($motoFactory);

        $this->assertSame("estacionado", $estacionado);
    }
}
