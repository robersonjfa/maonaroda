<?php

namespace App\Models\MySQL;

use DateTime;

final class ServiceModel
{
    private $cadastro_idcadastro;
    private $data_servico;
    private $idservico;
    private $id_contratado;

    
    public function getCadastro_idCadastro(): int
    {
        return $this->cadastro_idcadastro;
    }
    public function setCadastro_idCadastro(int $cadastro_idcadastro): ServiceModel
    {
        $this->cadastro_idcadastro = $cadastro_idcadastro;
        return $this;
    }
    
    public function getDataServico(): String
    {
        return $this->data_servico;
    }

    public function setDataServico(): String
    {
        $dataSemFormat = new DateTime();
        $stringDate = $dataSemFormat->format('Y-m-d');
        $this->data_servico = $stringDate;
        return $stringDate;
    }

    public function getIdServico(): int
    {
        return $this->idservico;
    }

    public function getId_Contratado(): int
    {
        return $this->id_contratado;
    }
    public function setId_Contratado(int $id_contratado): ServiceModel
    {
        $this->id_contratado = $id_contratado;
        return $this;
    }

}

