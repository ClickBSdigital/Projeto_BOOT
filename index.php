<?php

require './App/DB/Database.php';

$banco = new Database("usuario");

// $id = 12;

$users = $banco->select();

echo '<br>';
print_r($users);
echo '<br>';

// foreach($users as $usuario){
//     echo
// }

// for($i=0; $i < count($users); $i++){
//     echo '<br>';
//     echo $users[$i]['id_usuario'] .' ' . $users[$i]["nome"];
// }

// $del_user = $banco->delete('id_usuario = 12')

// print_r($del_user = 14)

$user_atualizar = $banco->select_by_id('id_usuario = 12');

echo '<br>';
print_r($user_atualizar);

$user_atualizar['nome'] = "novo nome";
$user_atualizar['email'] = "novo@nome";
$user_atualizar['cpf'] = "65874";

echo '<br>';
echo '<pre>';
print_r($user_atualizar);
echo '</pre>';

$result = $banco->update('id_usuario = '.$user_atualizar['id_usuario'], $user_atualizar );
