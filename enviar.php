<!DOCTYPE html>
<html lang="pt-br">
<?php
include("../head.php");
include("../sessao.php");
?>
<body>
    <?php
include("../menu.php");
?>
<div class="container centro">
  <div class="card">
 <meta http-equiv="refresh" content="10; URL='index.php'"/>

 <?php
if (isset($_POST['enviar'])) {

 //Variaveis de POST, Alterar somente se necessário
 //====================================================
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $inscricao = $_POST['inscricao'];

 //====================================================

 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //====================================================
 $email_remetente = "suporte@gerenciadores.com"; // deve ser uma conta de email do seu dominio
 //====================================================

 //Configurações do email, ajustar conforme necessidade
 //====================================================
 $email_destinatario = "$email"; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email";
 $email_assunto = "Confirmação de inscrição Nº $inscricao"; // Este será o assunto da mensagem
 //====================================================

 //Monta o Corpo da Mensagem
 //====================================================
 $email_conteudo = "$nome sua inscrição Nº $inscricao no Festival foi confirmada com sucesso! \n";

 //====================================================

 //Seta os Headers (Alterar somente caso necessario)
 //====================================================
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================

 //Enviando o email
 //====================================================
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
 echo "<p>Enviado com sucesso. Caso o usuário não consiga ver, peça para acessar a caixa de SPAM do E-mail</p>";
 }
 else{
 echo "<p>Falha</p>"; }
 //====================================================

}
?>

  </div>
</div>

</body>
</html>