<?php

namespace App\Repositories\Wallets;

use App\Mappers\Wallets\WalletMapper;
use App\Mappers\Wallets\WalletMapperInterface;
use Illuminate\Support\Collection;

class WalletRepository implements WalletRepositoryInterface
{

    /** @var \Api\Mappers\Wallets\WalletMapperInterface */
    protected \Api\Mappers\Wallets\WalletMapperInterface $mapperAdapter;

    /**
     * @inheritDoc
     */
    public function mapear(array $dados)
    {
        $transferEntidadeClone = clone $this->entidade;
        return $this->mapperAdapter->obterMapa($dados, $transferEntidadeClone);
    }
    /**
     * @inheritDoc
     */
    public function transfer(array $id): Collection
    {
        /** @var \Illuminate\Database\Eloquent\Builder $queryBuilder */
        $queryBuilder = ($this->model->newQuery());

//        /** @var \Illuminate\Database\Eloquent\Collection $ticket */
//        $ticket = $queryBuilder
//            ->with(
//                [
//                    'comentarios',
//                    'encomenda',
//                    'observacoes',
//                    'categoria',
//                    'assunto',
//                    'nivel',
//                ]
//            )
//            ->findOrFail($id);
//
//        return $this->mapear($ticket->toArray());
    }

}
