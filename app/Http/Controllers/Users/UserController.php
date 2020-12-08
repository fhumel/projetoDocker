<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\Users\UserRequest;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UserController extends UserControllerInterface
{

    /** @var \App\Contracts\Users\Services\UserServiceInterface */
    private UserServiceInterface $userService;

    /** @var \App\Contracts\Users\Mappers\UserMapperInterface */
    private $userMapper;

    /**
     * UserController constructor.
     * @param \App\Contracts\Users\Services\UserServiceInterface      $usuarioService
     * @param \App\Contracts\Users\Mappers\UserMapperInterface $userMapper
     */
    public function __construct(UserServiceInterface $userService, UserMapperInterface $userMapper)
    {
        $this->userService = $userService;
        $this->userMapper = $userMapper;
    }


    /**
     * @inheritDoc
     */
    public function create(UserRequest $request): Illuminate\Http\JsonResponse
    {

        try {

            $dados = $request->all();

            /** @var \App\Entities\TransferEntity $entidade */
            $entidade = $this->transferService->create($dados);

            return response()->json(
                [
                    "descricao" => "Usuário criado com sucesso.",
                    "user" => $entidade,
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $exception) {
            /** @var int $statusCode */
            $statusCode = $exception instanceof HttpException
                ? $exception->getStatusCode() : Response::HTTP_BAD_REQUEST;

            return response()->json([
                'codigo' => $statusCode,
                'descricao' => 'Não foi possível cadastrar um usuário no momento.']);
        }
    }

    /**
     * @inheritDoc
     */
    public function list(): Illuminate\Http\JsonResponse
    {

        try {

            /** @var \App\Entities\TransferEntity $entidade */
            $colecao = $this->userService->list();

            return response()->json(
                [
                    $colecao
                ],
                Response::HTTP_FOUND
            );
        } catch (\Exception $exception) {
            /** @var int $statusCode */
            $statusCode = $exception instanceof HttpException
                ? $exception->getStatusCode() : Response::HTTP_BAD_REQUEST;

            return response()->json([
                'codigo' => $statusCode,
                'descricao' => 'Não foi possível listar os usuários no momento.']);
        }
    }
}
