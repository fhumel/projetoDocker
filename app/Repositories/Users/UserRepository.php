<?php

namespace App\Repositories\Users;

use App\Mappers\Transactions\TransactionMapper;
use App\Mappers\Transactions\TransactionMapperInterface;
use Illuminate\Support\Collection;

class UserRepository implements UserRepositoryInterface
{

    /** @var \Api\Mappers\Users\UserMapperInterface */
    protected \Api\Mappers\Users\UserMapperInterface $mapperAdapter;

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
    public function create(array $id): Collection
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

    /**
     * @inheritDoc
     */
    public function list(array $id): Collection
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
