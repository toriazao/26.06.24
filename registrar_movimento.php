<?php
//aqui dentro vamos codar em php

// require_once('./conectorMySQL.php'); //esta linha carrega o arquivo conectorMySQL

//para registrar o movimento da peça, temos que ter, no mínimo tres variaveis

/**
 * como declara uma variavel em php
 * primeiro digita-se o caractere cifrão "$", depois digita-se o nome da variavel, dai continua com o operador da atribuição " = ", e, por fim o valor da variavel
 */

 $nome_peça = $_GET['nome peça'];
 $cor_peça = $_GET['cor peça'];
 $coluna = $_GET['coluna'];
 $linha = $_GET['linha'];

 /** 
  * pergunto: precisa registrar a localização da peça anterior? ou não?-
  */

echo ' $nome_peça: ' . $nome_peça . "<br/>";
echo ' $cor_peça: ' . $cor_peça . "<br/>";
echo ' $coluna: ' . $coluna . "<br/>";
echo ' $linha: ' . $linha . "<br/>";

$tbl_movimentos="tbl_movimentos";
$sql__verificar_tabela = "show tables like '$tbl_movimentos';";
$tabela = $conexao->query($sql_verificar_tabela);

if ($tabela->num_rows < 1) {
  require_once('./criar_tbl_movimentos.php');
}

$str_sql_registtrar_movimento = "
    insert into `$tbl_movimentos` (
        'nome_peça
    "
?>