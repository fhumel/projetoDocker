<?php

namespace App\Http\Requests\Users\Wallets\Transactions;

/**
 * Interface TransferRequest
 * @package   App\Http\Controllers\Bloqueio
 * @author    Fernando | Humel <flemuh@gmail.com>
 * @copyright fhumel <flemuh@gmail.com>
 */
class TransactionRequest extends DefaultRequest
{
    /** @var array|string[] */
    protected array $regras = [
        'value' => 'required|decimal(9,3)',
        'payer' => 'required|integer',
        'payee' => 'required|integer',
    ];

    /** @var array|string[] */
    protected array $mensagens = [
        'value.required' => "Este campo ':attribute' e obrigatorio",
        'payer.required' => "Este campo ':attribute' e obrigatorio",
        'payee.required' => "Este campo ':attribute' e obrigatorio"
    ];
}
