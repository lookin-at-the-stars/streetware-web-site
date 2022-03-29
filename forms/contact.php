<?php
$conexao = mysqli_connect('localhost', 'root', 'banco') or die("Erro de Conexão");
?>
<?php
if(isset($_POST['enviar'])){
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];

$sql= "INSERT INTO  cliente(nome, email, assunto, mensagem)"
    ."VALUES ('$nome', '$email', '$assunto', '$mensagem')";
mysqli_query($conexao, $sql);
}
?>