<?php

namespace App\Repositories\Transactions;

use App\Mappers\Transactions\TransactionMapper;
use App\Mappers\Transactions\TransactionMapperInterface;
use Illuminate\Support\Collection;

class TransactionRepository implements TransactionRepositoryInterface
{

    /** @var \Api\Mappers\Transactions\TransactionMapperInterface */
    protected \Api\Mappers\Transactions\TransactionMapperInterface $mapperAdapter;

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
