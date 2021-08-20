<?php
class usuarios{
    public function registroUsuario($dados){
        $c = new conectar();
        $conexao = $c -> conexao(); // chamar a funcao para conexao
        $data = date("Y-m-d");
        // consulta ao banco
        // para fazer a insercao no banco de usario
        $sql = "INSERT INTO usuarios (nome, user, email, senha, dataCaptura)
                 VALUES ('$dados[0]' , '$dados[1]', '$dados[2]', '$dados[3]', $data)";

        return mysqli_query($conexao, $sql);         
    }

}
