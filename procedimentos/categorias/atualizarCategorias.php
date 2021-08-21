<?php 

require_once('../../classes/conexao.php');
require_once('../../classes/categorias.php');


$data = ("Y-m-d");

$obj = new categorias(); 

$dados = array(    
   $_POST['idcategoria'],
   $_POST['categoriaU'],
   $data
);

echo $obj->atualizarCategoria($dados);

