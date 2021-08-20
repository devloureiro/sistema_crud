<?php 
//nome da minha classe
class conectar{
    private $servidor = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $bd ="sistema";

    // construtor da clase
    Public function conexao(){
        $conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);
        //chamo a variavel estava chamando $conexao()
        return $conexao;        
    }
}
