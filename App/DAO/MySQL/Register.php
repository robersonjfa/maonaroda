<?php


namespace App\DAO\MySQL;
use App\Models\MySQL\RegisterModel;
use FastRoute\RouteParser\Std;

class Register extends Conexao
{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function getAllRegisters(): array 
    {
        $registers = $this->pdo->query('SELECT * FROM cadastro;')->fetchAll(\PDO::FETCH_ASSOC);
        return $registers;
    }

    public function getRegistroProfissional(): array
    {
        $registers = $this->pdo->query('SELECT P.idprofissional,C.tipo_cadastro, C.nome, C.telefone , P.form_profissao as Profissao, P.idprofissao from cadastro C inner join cad_profissional P on C.idcadastro = P.cadastro_idcadastro where C.tipo_cadastro = 2;')->fetchAll(\PDO::FETCH_ASSOC);
        return $registers;
    }
    
   

    public function insertRegister(RegisterModel $register): void
    {
        $statement = $this->pdo->prepare('INSERT INTO cadastro VALUES(
            null,
            :tipo_cadastro,
            :email,
            :senha,
            :endereco,
            :nome,
            :idade,
            :telefone
            );');
        $statement->execute([
            'tipo_cadastro' => $register->getTipoCadastro(),
            'email' => $register->getEmail(),
            'senha' => $register->getSenha(),
            'endereco' => $register->getEndereco(),
            'nome' =>$register->getNome(),
            'idade' =>$register->getIdade(),
            'telefone' =>$register->getTelefone(),
        ]); 
    }


    public function getLastRegister(): array
    {
        $lastRegister = $this->pdo->query('SELECT idcadastro FROM cadastro ORDER BY idcadastro DESC LIMIT 1;')->fetchAll(\PDO::FETCH_ASSOC);
        return $lastRegister;
    }



    public function insertRegisterProfissional(RegisterModel $register): void
    {
        $statement = $this->pdo->prepare('INSERT INTO cad_profissional VALUES(
            :desc_profissao,
            :form_profissao,
            :cadastro_idcadastro,
            null,
            :idprofissao
            );');
        $statement->execute([
            'desc_profissao' => $register->getDescProfissao(),
            'form_profissao' => $register->getFormProfissao(),
            'cadastro_idcadastro' => $register->getCadastroIdCadastro(),
            'idprofissao' => $register->getIdProfissao(),
        ]);    
    }

}