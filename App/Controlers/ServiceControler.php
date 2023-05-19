<?php

namespace App\Controlers;

use App\DAO\MySQL\Service;
use App\Models\MySQL\ServiceModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class ServiceControler
{
    public function getService(Request $request, Response $response, array $args): Response
    {
       $serviceDAO = new Service();
       $service = $serviceDAO->getAllService();
       $response = $response->withJson($service);

       return $response;
    }

    

    public function insertService(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        $serviceDAO = new Service();
        $service = new ServiceModel();
        $service->setId_Contratado($data['id_contratado'])
                ->setCadastro_idCadastro($data['cadastro_idcadastro'])
                ->setDataServico();
        $serviceDAO->insertService($service);
        
        $response = $response->withJson([
            'message' => 'Serviço cadastrado com sucesso'
        ]);

        return $response;
    }

    public function updateService(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write("caralho");
        return $response;
    }

    public function deleteService(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write("caralho");
        return $response;
    }
}