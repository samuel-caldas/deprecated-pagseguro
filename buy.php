<?php
include 'PagSeguroLibrary/PagSeguroLibrary.php';
$email='samuel.caldas@gmail.com';
$token='31C8B4594043472E8FEEA138B7F2E630';
$paymentRequest = new PagSeguroPaymentRequest();
$paymentRequest->addItem('0001', 'Notebook', 1, 2430.00);  
$paymentRequest->addItem('0002', 'Mochila',  1, 150.99); 
$paymentRequest->setSender(  
    'José Comprador',   
    'comprador@uol.com.br',   
    '11',   
    '56273440'  
); 
$paymentRequest->setShippingAddress(  
    '01452002',   
    'Av. Brig. Faria Lima',       
    '1384',       
    'apto. 114',       
    'Jardim Paulistano',      
    'São Paulo',      
    'SP',     
    'BRA'     
); 
$paymentRequest->setCurrency("BRL");  
$paymentRequest->setShippingType(1); 
$paymentRequest->setReference("I9635");  
// Informando as credenciais  
$credentials = new PagSeguroAccountCredentials(  
	$email,   
    $token  
);  
  
// fazendo a requisição a API do PagSeguro pra obter a URL de pagamento  
$url = $paymentRequest->register($credentials);  

print_r($url);
?>