<?php

namespace App;

interface Veiculos
{
    public function setEstado(string $estado);

    public function getEstado(): string;
}
