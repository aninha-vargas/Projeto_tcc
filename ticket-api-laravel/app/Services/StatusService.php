<?php

namespace App\Services;
use Exception;
use App\Repositories\StatusRepository;

class StatusService
{
    public function __construct(StatusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function obter ($id)
    {
        return $this->repository->obter($id);
    }

    public function listar()
    {
        try {
            $dados = $this->repository->listar();
            return array(
                'status' 	=> true,
                'mensagem' 	=> "Status listado com sucesso.",
                'dados' 	=> $dados
            );

        } catch (Exception $ex) {
            return array(
                'status' 	=> false,
                'mensagem' 	=> "Erro ao listar Status.",
                'exception' => $ex->getMessage()
            );
        }
    }
}
