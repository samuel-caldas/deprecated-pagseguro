<?php
include 'PagSeguroLibrary/PagSeguroLibrary.php';
$email='samuel.caldas@gmail.com';
$token='31C8B4594043472E8FEEA138B7F2E630';
/* Definindo as credenciais  */    
$credentials = new PagSeguroAccountCredentials(      
    $email,       
    $token      
);  
  
/* Tipo de notificação recebida */  
$type = $_POST['notificationType'];  
  
/* Código da notificação recebida */  
$code = $_POST['notificationCode'];  
  
  
/* Verificando tipo de notificação recebida */  
if ($type === 'transaction') {  
      
    /* Obtendo o objeto PagSeguroTransaction a partir do código de notificação */  
    $transaction = PagSeguroNotificationService::checkTransaction(  
        $credentials,  
        $code // código de notificação  
    );  
      
} 
/* objeto PagSeguroTransactionStatus */    
print_r($status = $transaction->getStatus()); 
?>