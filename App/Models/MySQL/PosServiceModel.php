<?php

namespace App\Models\MySQL;


final class PosServiceModel
{
    /**
     * @var int
     */
    private $idpos_service;
    /**
     * @var int
     */
    private $service_idservico;
    /**
     * @var int
     */
    private $avaliacao;

    public function getIdPosService(): int
    {
        return $this->idpos_service;
    }

    public function getService_idServico(): int
    {
        return $this->service_idservico;
    }

    public function setService_idService(int $service_idservice): PosServiceModel
    {
        $this->service_idservico = $service_idservice ;
        return $this;
    }

    public function getAvaliacao(): int
    {
        return $this->avaliacao;
    }

    public function setAvaliacao(int $avaliacao): PosServiceModel
    {
        $this->avaliacao = $avaliacao;
        return $this;
    } 

}