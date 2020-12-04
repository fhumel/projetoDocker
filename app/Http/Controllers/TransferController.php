<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use App\Services\TransferServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Interface TransferController
 * @package   App\Http\Controllers\Bloqueio
 * @author    Fernando | Humel <flemuh@gmail.com>
 * @copyright fhumel <flemuh@gmail.com>
 */
class TransferController implements TransferControlleInterface
{
    /**
     * TransferController constructor.
     *
     * @param \App\Services\TransferServiceInterface $transferService
     */
    public function __construct(
        TransferServiceInterface $transferService
    ) {
        $this->transferService = $transferService;
    }

    /**
     * @inheritDoc
     */
    public function teste(): JsonResponse
    {

        try {
            $dados = $request->all();

            /** @var \App\Entities\TransferEntity $entidade */
            $entidade = $this->transferService->transfer($dados);

            return response()->json(
                [
                    "codigo" => Response::HTTP_CREATED,
                    "descricao" => "Valor transferido com sucesso.",
                    "tranferId" => $entidade->getId(),
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $exception) {
            /** @var int $statusCode */
            $statusCode = $exception instanceof HttpException
                ? $exception->getStatusCode() : Response::HTTP_BAD_REQUEST;

            return response()->json([
                'codigo' => $statusCode,
                'descricao' => 'Não foi possível fazer a transferencia no momento.']);
        }
    }

}
