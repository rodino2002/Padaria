<?php

include_once './conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['nome'])){
    $retorna = ['status' => False, 'msg' => "Erro: Necessário preencher o campo Nome"];

}elseif(empty($dados['telefone'])){
    $retorna = ['status' => False, 'msg' => "Erro: Necessário preencher o campo telefone"];

}elseif(empty($dados['morada'])){
    $retorna = ['status' => False, 'msg' => "Erro: Necessário preencher o campo morada"];

}elseif(empty($dados['senha'])){
    $retorna = ['status' => False, 'msg' => "Erro: Necessário preencher o campo Senha"];

}else{
    $query_usuario = " INSERT INTO funcionario (Nome, Telefone, Morada, senha) VALUES(:nome, :telefone, :morada, :senha) ";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome']);
    $cad_usuario->bindParam(':telefone', $dados['telefone']);
    $cad_usuario->bindParam(':morada', $dados['morada']);
    $cad_usuario->bindParam(':senha', $dados['senha']);
    $cad_usuario->execute();

    if($cad_usuario->rowCount()){
        $retorna = ['status'=> true, "Usuário cadastrado com sucesso"];
    }else{
        $retorna = ['status'=> false, "Erro: Usuário não cadastrado com sucesso"];
    }

}

echo json_encode($retorna);

?>