<?php

require '../DB/Database.php'


class Usuario{

    public string $nome;
    public string $email;
    public string $cpf;
    public string $senha;
    public int $id_perfil;


    public function cadastrar(){

        $db = new Database('usuario');
//
        $db->insert(
            [
                'nome'=> $this->nome,
                'email'=> $this->email,
                'cpf'=> $this->cpf,
                'senha'=> $this->senha,
                'id_perfil'=> $this->id_perfil,
            ]
            );
        return true;
    }

    public function buscar(){
        return (new Database('usuario'))->select()->fetchAll(PDO::FETCH_CLASS,self::class);
    }

}