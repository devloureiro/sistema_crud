<?php 
require_once('../../classes/conexao.php');
require_once('../../classes/usuarios.php');

$obj = new usuarios(); // chamando a classe de usuarios
//recebenbo as informacoes via post

//$senha = $_POST['senha'];
//$nome = $_POST['nome'];
//$usuario = $_POST['usuario'];
//$email = $_POST['email']; 

$senha =sha1($_POST['senha']);

$dados = array(    
    $_POST['nome'],
    $_POST['usuario'],
    $_POST['email'],
    $senha
)

echo $obj->registroUsuario($dados);

