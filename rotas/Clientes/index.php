<?php
header("Content-Type: application/json");
header("Acess-Control: Allow-Origin: ");
header("Acess-Control: Allow-Methods:GET,POST,PUT,DELETE");

$conexao = new msqli("localhost","root","","AulaSW");
if($coenexao->connect_error)
{
    echo json_encode("{'Conexão falhou")
}
?>