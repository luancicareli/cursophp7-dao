<?php

require_once ("config.php");

// CARREGA TODAS COLUNAS
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios); */

// CARREGA UM UNICO USER
/*$user = new Usuario();
$user->loadById(3);
echo $user;*/

//CARREGA UMA LISTA DE USUARIOS
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
/*$search = Usuario::search("ua");
echo json_encode($search);*/

//CARREGA UM USUARIO USANDO UM LOGIN E A SENHA
/*$usuario = new Usuario();
$usuario->login("user","123456789");
echo $usuario;*/

//INSERT NOVO USER
/*$aluno = new Usuario("aluno","@lun0");
$aluno->insert();
echo $aluno;*/

//UPDATE USER
$usuario = new Usuario();
$usuario->loadById(3);
$usuario->update("username","pass123");

echo $usuario;

?>
