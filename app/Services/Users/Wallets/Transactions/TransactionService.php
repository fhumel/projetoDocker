<?php

namespace App\Services\Users\Wallets\Transactions;

use App\Contracts\Users\Repositories\UserRepositoryInterface;
use App\Contracts\Users\Wallets\Repositories\WalletRepositoryInterface;
use App\Contracts\Users\Wallets\Transactions\Repositories\TransactionRepositoryInterface;
use App\Contracts\Users\Wallets\Transactions\Services\TransactionServiceInterface;
use App\Models\Users\User;
use App\Models\Users\Wallets\Transactions\Transaction;
use App\Models\Users\Wallets\Wallet;
use Illuminate\Support\Facades\DB;

class TransactionService implements TransactionServiceInterface
{

    /** @var TransactionRepositoryInterface */
    private $transactionRepository;

    /** @var integer */
    public const COMUM = 1;

    /** @var integer */
    public const LOGISTA = 2;

    /**
     * TransactionService constructor.
     *
     * @param TransactionRepositoryInterface $transactionRepository
     * @param WalletRepositoryInterface $walletRepository
     */
    public function __construct(
        TransactionRepositoryInterface $transactionRepository,
        WalletRepositoryInterface $walletRepository)
    {
        $this->transactionRepository = $transactionRepository;
        $this->walletRepository = $walletRepository;
    }

    /**
     * @inheritDoc
     */
    public function pay($dados): Transaction
    {

        // $value
        $value = $dados['value'];

        // payer
        $payer = $dados['payer'];

        // $payee
        $payee = $dados['payee'];

        $wallet = Wallet::find($payer);

        $userPayer = User::find($payer);

        $transaction = DB::transaction(function() use ($value, $payer, $payee, $userPayer, $dados) {

            if ($userPayer->type == UserRepositoryInterface::LOGISTA) {
                abort(
                    \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST,
                    'Não é possivel tranferir dinheiro com sendo tipo logista.'
                );
            }

            /** @var WalletRepositoryInterface $payee */
            $this->walletRepository->withdrawn(
                ['id' => $payer, 'money' => $value]
            );

            /** @var WalletRepositoryInterface $payee */
            $this->walletRepository->deposit(
                ['id' => $payee, 'money' => $value]
            );

            return $this->transactionRepository->pay($dados);

        });

        return $transaction;
    }


    /**
     * @inheritDoc
     */
    public function list(): array
    {
        return $this->transactionRepository->list();
    }

}
