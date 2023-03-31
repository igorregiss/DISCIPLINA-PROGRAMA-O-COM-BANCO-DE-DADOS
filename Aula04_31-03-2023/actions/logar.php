<?php 
$emailCorreto = "igor@gmail.com";
$senhaCorreta = "dd97813dd40be87559aaefed642c3fbb";
$emailRecebido = $_POST['email'];
$senhaRecebida = md5($_POST['password']);

if($emailCorreto == $emailRecebido && 
   $senhaCorreta == $senhaRecebida){

    session_start();
    $_SESSION['logado'] = true;
    $_SESSION['email'] = $emailCorreto;
    $_SESSION['nome'] = "ERLÂNIO FREIRE";
    header('Location: ../inicio.php');
}else{
   header('Location: ../index.php?erroLogin=true');
}
?>