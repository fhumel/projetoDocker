<?php

namespace App\Mappers;

interface TransferMapperInterface
{
    /**
     * Retorna chaves mapeadas
     *
     * @return array
     */
    public function obterMapa(): array;
}
