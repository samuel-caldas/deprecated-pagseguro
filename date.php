<?php
include 'PagSeguroLibrary/PagSeguroLibrary.php';
$email='samuel.caldas@gmail.com';
$token='31C8B4594043472E8FEEA138B7F2E630';
/* Definindo as credenciais  */    
$credentials = new PagSeguroAccountCredentials(      
    $email,       
    $token      
);
/* Definindo a data de ínicio da consulta */  
$initialDate = '2011-06-01T08:50';  
  
/* Definindo a data de término da consulta */  
$finalDate   = '2011-06-29T10:30';  
  
/* Definindo o número máximo de resultados por página */  
$maxPageResults = 20;  
  
/* Definindo o número da página */  
$pageNumber = 1;  
  
/* Realizando a consulta */  
$result = PagSeguroTransactionSearchService::searchByDate(  
    $credentials,       // credenciais  
    $pageNumber,        // número da página  
    $maxPageResults,    // número máximo de resultados por página  
    $initialDate,       // data de ínicio  
    $finalDate          // data de término  
);  
  
/* Obtendo as transações do objeto PagSeguroTransactionSearchResult */  
$transactions = $result->getTransactions();  
?>