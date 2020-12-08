<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\TransactionControllerInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TransactionController implements TransactionControllerInterface
{
    /**
     * TransactionController constructor.
     *
     * @param \App\Services\TransactionControllerInterface $transactionService
     */
    public function __construct(
        TransactionControllerInterface $transactionService
    ) {
        $this->transactionService = $transactionService;
    }

    /**
     * @inheritDoc
     */
    public function list(): Illuminate\Http\JsonResponse
    {

        try {
            /** @var \App\Entities\TransferEntity $entidade */
            $colection = $this->transactionService->list();

            return response()->json(
                [
                    $colection
                ],
                Response::HTTP_FOUND
            );
        } catch (\Exception $exception) {
            /** @var int $statusCode */
            $statusCode = $exception instanceof HttpException
                ? $exception->getStatusCode() : Response::HTTP_BAD_REQUEST;

            return response()->json([
                'codigo' => $statusCode,
                'descricao' => 'Não foi possível listar as transações no momento.']);
        }
    }

}
