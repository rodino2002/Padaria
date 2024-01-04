<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['nome'])){
    $retorna = ['status' => False, 'msg' => "Erro: Necessário preencher o campo Nome"];

}elseif(empty($dados['morada'])){
    $retorna = ['status' => False, 'msg' => "Erro: Necessário preencher o campo Morada"];

}(empty($dados['telefone'])){
    $retorna = ['status' => False, 'msg' => "Erro: Necessário preencher o campo Telefone"];

}(empty($dados['senha'])){
    $retorna = ['status' => False, 'msg' => "Erro: Necessário preencher o campo Senha"];

}else{

    $retorna = ['status' => true, 'msg' => "Usuário Cadastrado com sucesso!"];
}

echo json_encode($retorna);

?>