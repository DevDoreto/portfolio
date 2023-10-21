<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato Realizado</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div id="container"> 
  <div class="nav"> 
    <h1 class="eu"><img src="img/logo.png" class="eu"></h1>
   
    <nav> 
        <ul class="menu">
            <li><a href="eu.html">início</a></li>
        </ul>
    </nav>
  </div>
</div>



    <?php require_once('conectar.php'); ?>
<?php  
$msg ="Solicitação de contato realizada com sucesso, em breve retornaremos.";
$msg_error="Solicitação de contato não enviada, tente novamente.";

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $assunto=$_POST['assunto'];

 $stmt = $conexao->prepare("INSERT INTO contato (nome, email, telefone, assunto) VALUES (?, ?, ?, ?)");
 $stmt->bind_param("ssss", $nome, $email, $telefone, $assunto);

 if($stmt-> execute()){
   
   echo '<div class="success-message">' . $msg . '</div>';
 }else{
   
    echo '<div class="error-message">' . $msg_error . '</div>';
 }

 $stmt->close();


?>

</body>





</html>