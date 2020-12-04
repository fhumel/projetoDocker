<?php

namespace App\Http\Controllers;

/**
 * Interface TransferControlleInterface
 * @package   App\Http\Controllers
 * @author    Fernando | Humel <flemuh@gmail.com>
 * @copyright fhumel <flemuh@gmail.com>
 */
interface TransferControlleInterface
{
    /**
     * Obter todos
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function test(): Illuminate\Http\JsonResponse;
}
