<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use Illuminate\Http\JsonResponse;

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
     * @return \Illuminate\Http\JsonResponse
     */
    public function teste(): JsonResponse;
}
