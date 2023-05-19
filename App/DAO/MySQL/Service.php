<?php

namespace App\DAO\MySQL;

use App\Models\MySQL\ServiceModel;

class Service extends Conexao
{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function getAllService(): array 
    {
        $services = $this->pdo->query('SELECT * FROM servicos;')->fetchAll(\PDO::FETCH_ASSOC);
        return $services;
    }
    


    public function insertService(ServiceModel $service): void
    {
        $statement = $this->pdo->prepare('INSERT INTO servicos VALUES(
            null,
            :data_servico,
            :id_contratado,
            :cadastro_idcadastro
            );');
        $statement->execute([
            'data_servico' => $service->getDataServico(),
            'cadastro_idcadastro' => $service->getCadastro_idCadastro(),
            'id_contratado' => $service->getId_Contratado(),
        ]); 
    }
}