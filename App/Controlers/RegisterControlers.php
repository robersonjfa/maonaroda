<?php

namespace App\Controlers;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\DAO\MySQL\Register;
use App\Models\MySQL\RegisterModel;

use Slim\Handlers\Strategies\RequestResponse;
use Slim\Handlers\Strategies\RequestResponseArgs;
use Slim\Http\Request as HttpRequest;
use Slim\Http\RequestBody;




final class RegisterControlers{
    public function getRegister(Request $request, Response $response, array $args): Response
    {
    
        
       $registerDAO = new Register();
       $register = $registerDAO->getAllRegisters();
       $response = $response->withJson($register);
      
       return $response;
  
    }



    public function getLastRegisters(Request $request, Response $response, array $args): Response
    {
       $registerDAO = new Register();
       $register = $registerDAO->getLastRegister();
       $response = $response->withJson($register);

       return $response;
  
    }

    public function getRegistroProfissional(Request $request, Response $response, array $args): Response
    {
        $registerDAO = new Register();
        $register = $registerDAO->getRegistroProfissional();
        $response = $response->withJson($register);

        return $response;
    }
    
    public function insertRegister(Request $request, Response $response, array $args): Response
    {


        $data = $request->getParsedBody();        
        $registerDAO = new Register();
        $register = new RegisterModel();
        $register->setTipoCadastro($data['tipo_cadastro'])
                 ->setEmail($data['email'])
                 ->setEndereco($data['endereco'])        
                 ->setSenha($data['senha'])
                 ->setNome($data['nome'])
                 ->setIdade($data['idade'])
                ->setTelefone($data['telefone']);
        $registerDAO->insertRegister($register);

        $response = $response->withJson([
            'message' => 'Cadastro feito com sucesso'
        ]);
        return $response;
    }
    
    public function insertRegisterProfissional(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();        
        $registerDAO = new Register();
        $register = new RegisterModel();
        $register->setDescProfissao($data['desc_profissao'])
                ->setFormProfissao($data['form_profissao'])
                ->setCadastroIdCadastro($data['id_cadastro'])
                ->setIdProfissao($data['id_profissao']);
        $registerDAO->insertRegisterProfissional($register);

        $response = $response->withJson([
            'message' => 'Cadastro feito com sucesso'
        ]);
        return $response;
    }

    public function updateRegister(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write("caralho");
        return $response;
  
    }

    public function deleteRegister(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write("caralho");
        return $response;
  
    }


}
