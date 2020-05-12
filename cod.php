<?php
include 'PagSeguroLibrary/PagSeguroLibrary.php';
$email='samuel.caldas@gmail.com';
$token='31C8B4594043472E8FEEA138B7F2E630';
/* Definindo as credenciais  */    
$credentials = new PagSeguroAccountCredentials(      
    $email,       
    $token      
); 

/* Código identificador da transação  */    
$transaction_id = 'BDE05379-BD1F-4F88-A3E9-6906CDB61A6C';  
  
/*  
    Realizando uma consulta de transação a partir do código identificador  
    para obter o objeto PagSeguroTransaction 
*/   
$transaction = PagSeguroTransactionSearchService::searchByCode(  
    $credentials,  
    $transaction_id  
);
/* Imprime o código do status da transação */  
print_r($transaction);  
?>