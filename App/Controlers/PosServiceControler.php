<?php

namespace App\Controlers;

use App\DAO\MySQL\PosService;
use App\Models\MySQL\PosServiceModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class PosServiceControler
{
    public function getPosService(Request $request, Response $response, array $args): Response
    {
        $posServiceDAO= new PosService();
        $posService = $posServiceDAO->getAllPosService();
        $response = $response->withJson($posService);

        return $response;
    }


    public function insertPosService(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        $posServiceDAO = new PosService();
        $posService = new PosServiceModel();
        $posService->setService_idService($data['service_idservico'])
                    ->setAvaliacao($data['avaliacao']);
        $posServiceDAO->insertPosService($posService);
        
        $response = $response->withJson([
            'message' => 'Pos Serviço cadastrado com sucesso'
        ]);

        return $response;
    }

    public function updatePosService(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write("caralho");
        return $response;
    }

    public function deletePosService(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write("caralho");
        return $response;
    }
}