<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Not found</title>
</head>
<body>
    
</body>
</html>
<?php 
$servidor='localhost';
$usuario='root';
$senha='';
$bd='portfolio';
$conexao= new mysqli($servidor,$usuario,$senha,$bd);
mysqli_set_charset($conexao,"utf8");
if($conexao->connect_errno){
    die("error de conexão ($mysqli->connect_errno)$mysqli->connect_errno");
}

?>