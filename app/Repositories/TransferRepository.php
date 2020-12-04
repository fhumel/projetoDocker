<?php
//
//namespace App\Repositories;
//
//use App\Mappers\TransferMapper;
//use App\Mappers\TransferMapperInterface;
//use Illuminate\Support\Collection;
//
//class TransferRepository implements TransferRepositoryInterface
//{
//
//    /** @var \Api\Mappers\TransferMapperInterface */
//    protected \Api\Mappers\TransferMapperInterface $mapperAdapter;
//
//    /**
//     * @inheritDoc
//     */
//    public function mapear(array $dados)
//    {
//        $transferEntidadeClone = clone $this->entidade;
//        return $this->mapperAdapter->obterMapa($dados, $transferEntidadeClone);
//    }
//    /**
//     * @inheritDoc
//     */
//    public function transfer(array $id): Collection
//    {
//        /** @var \Illuminate\Database\Eloquent\Builder $queryBuilder */
//        $queryBuilder = ($this->model->newQuery());
//
////        /** @var \Illuminate\Database\Eloquent\Collection $ticket */
////        $ticket = $queryBuilder
////            ->with(
////                [
////                    'comentarios',
////                    'encomenda',
////                    'observacoes',
////                    'categoria',
////                    'assunto',
////                    'nivel',
////                ]
////            )
////            ->findOrFail($id);
////
////        return $this->mapear($ticket->toArray());
//    }
//
//}
