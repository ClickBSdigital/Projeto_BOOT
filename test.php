<?php

require './App/DB/Database.php';

$banco = new Database("usuario");

$nome = "Eliandro";  // recebendo os dados do form e armazenando numa var php

$dados_user = array(
    "nome"=>"Ze Galinha",
    "email"=>"Eliandro@gmail.com",
    "cpf"=>"215478",
    "senha"=>"65487",
    "id_perfil"=>1
);

// $resultado = $banco->insert($dados_user);

// if ($resultado){
//     echo ' Cadastrado com sucesso!!!';
// }else{
//     echo 'Erro ao conectar!!!';
// }

echo '<br>';

//CONDICIONAL TERNÁRIO
// $valor = (CONDIÇÃO) ? 'VERDADE' : 'OUTRO TEXTO;

$valor = (10 > 5) ? 'É verdadeiro a condição!!!' : 'Condiçõa é Falsa!!!';

echo $valor . "<br>";

$usuarios = $banco->select()->fetchAll();

// print_r($usuarios);

foreach($usuarios as $user){
    echo $user['nome'] . "<br>";
}




