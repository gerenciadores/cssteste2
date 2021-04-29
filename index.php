<!DOCTYPE html>
<html lang="pt-br">
<?php
include("../head.php");
include("../sessao.php");
?>
<body>
<div class="container centro">
  <div class="card">
      <form method='POST' action='enviar.php' class="container centro">

    <input type="" name='nome' class="input" value="<?php echo $row['name']; ?>" />
    <input type=""name='email' class="input" value="<?php echo $row['username']; ?>"/>
    <input type="" name='inscricao' class="input" value="<?php echo $row['id']; ?>"/>
  <p>Ao clicar no botão abaixo, automaticamente será enviada uma notificação de confirmação de inscrição no e-mail do usuário.</p>
  <button class='btn-hover color-5' name='enviar' type='submit'>Enviar notificação</button>
 </form>
 
  </div>
</div>

</body>
</html>