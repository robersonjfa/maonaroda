<?php

namespace App\Models\MySQL;



final class RegisterModel
{
    /**
     * @var int
     */
    private $idcadastro;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $endereco;
    /**
     * @var int
     */
    private $idprofissao;
    /**
     * @var string
     */
    private $senha;
    /**
     * @var int
     */
    private $tipo_cadastro;
    /**
     * @var int
     */
    private $cadastro_idcadastro;
    /**
     * @var string
     */
    private $desc_profissao;
    /**
     * @var string
     */
    private $form_profissional;

    private $nome;

    private $telefone;

    private $idade; 

    
    public function getTelefone(): int
    {
        return $this->telefone;
    }
    
    public function setTelefone(int $telefone): RegisterModel
    {
        $this->telefone = $telefone;
        return $this;
    }
    
    public function getIdade(): int
    {
        return $this->idade;
    }
    
    public function setIdade(int $idade): RegisterModel
    {
        $this->idade = $idade;
        return $this;
    }
    
    
    /**
     * @var int
     */
    public function getIdCadastro(): int
    {
        return $this->idcadastro;
    }
   public function getNome(): string
   {
        return $this->nome;
   }

   public function setNome(string $nome): RegisterModel
   {
    $this->nome = $nome;
    return $this;
   }
   
    /**
     * @var string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): RegisterModel
    {
        $this->email = $email;
        return $this;
    }


    /**
     * @var string
     */   
    public function getEndereco(): string
    {
        return $this->endereco;
    }
    public function setEndereco(string $endereco): RegisterModel
    {
        $this->endereco = $endereco;
        return $this;
    }



    /**
     * @var int
     */
    public function getIdProfissao(): int
    {
        return $this->idprofissao;
    }
    public function setIdProfissao(int $idprofissao): RegisterModel
    {
        $this->idprofissao = $idprofissao;
        return $this;
    }


    /**
     * @var string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }
    public function setSenha(string $senha): RegisterModel
    {
        $this->senha = $senha;
        return $this;
    }



    /**
     * @var int
     */
    public function getTipoCadastro(): int
    {
        return $this->tipo_cadastro;
    }
    public function setTipoCadastro(int $tipo_cadastro): RegisterModel
    {
        $this->tipo_cadastro = $tipo_cadastro;
        return $this;
    }


    public function setCadastroIdCadastro(int $cadastro_idcadastro): RegisterModel
    {
        $this->cadastro_idcadastro = $cadastro_idcadastro;
        return $this;
    }

    public function getCadastroIdCadastro(): int
    {
        return $this->cadastro_idcadastro;
    }

    public function setDescProfissao(string $desc_profissao): RegisterModel
    {
        $this-> desc_profissao = $desc_profissao;
        return $this;
    }
    public function getDescProfissao(): string
    {
        return $this->desc_profissao;
    }

    public function getFormProfissao(): string
    {
        return $this->form_profissional;
    }
    public function setFormProfissao(string $form_profissional): RegisterModel
    {
        $this->form_profissional =  $form_profissional;
        return $this;
    }

}