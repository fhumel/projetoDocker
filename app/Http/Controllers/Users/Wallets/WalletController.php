<?php

namespace App\Http\Controllers\Users\Wallets;

use App\Http\Requests\UserRequest;
use App\Http\Requests\Users\Wallets\WalletRequest;
use App\Services\TransferServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class WalletController implements WalletControllerInterface
{
    /**
     * TransferController constructor.
     *
     * @param \App\Services\TransferServiceInterface $walletService
     */
    public function __construct(
        TransferServiceInterface $walletService
    ) {
        $this->walletService = $walletService;
    }

    /**
     * @param \App\Http\Requests\Transactions\Users\Wallet\WalletRequest $transactionRequest
     * @return \Illuminate\Http\JsonResponse
     */
    public function despoit(WalletRequest $request): Illuminate\Http\JsonResponse
    {

        try {
            $dados = $request->all();

            /** @var \App\Entities\TransferEntity $entidade */
            $entidade = $this->walletService->despoit($dados);

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

    /**
    /**
     * @param \App\Http\Requests\Transactions\Users\Wallet\WalletRequest $transactionRequest
     * @return \Illuminate\Http\JsonResponse
     */
    public function balance(WalletRequest $request ): Illuminate\Http\JsonResponse
    {

        try {
            $dados = $request->all();

            /** @var \App\Entities\TransferEntity $entidade */
            $entidade = $this->walletService->balance($dados);

            return response()->json(
                [
                    "codigo" => Response::HTTP_CREATED,
                    "descricao" => "Carteira listada com sucesso.",
                    "wallet" => $entidade,
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $exception) {
            /** @var int $statusCode */
            $statusCode = $exception instanceof HttpException
                ? $exception->getStatusCode() : Response::HTTP_BAD_REQUEST;

            return response()->json([
                'codigo' => $statusCode,
                'descricao' => 'Não foi possível obter a carteira solicitada.']);
        }
    }

}
