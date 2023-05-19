<?php

namespace App\DAO\MySQL;

use App\Models\MySQL\PosServiceModel;

class PosService extends Conexao
{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function getAllPosService(): array
    {
        $PosService = $this->pdo->query('SELECT * FROM pos_servico;')->fetchAll(\PDO::FETCH_ASSOC);
        return $PosService;
    }

    public function insertPosService(PosServiceModel $posService): void
    {

        $statemente = $this->pdo->prepare('INSERT INTO pos_servico VALUES(
            null,
            :avaliacao,
            :servicos_idservico
            );');
        $statemente->execute([
            'avaliacao' => $posService->getAvaliacao(),
            'servicos_idservico' =>$posService->getService_idServico(),
        ]);    

    }

   
}