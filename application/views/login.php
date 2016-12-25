<body>
   <div class="container">
   <div class="row">
   <div class="container span7 text-center col-md-4 col-md-offset-4" style="margin-top: 100px; auto;float: none;">
   <div class="login-panel panel panel-default">
   <div id='csslogin'>
   <div class="panel-heading">
      <h1 class="panel-title">Relação Loja & Adm Shopping</h1>
   </div>
   <div class="panel-body">
   <form role="form" method="POST">
      <fieldset>
         <div class="form-group">
            <input class="form-control" placeholder="E-mail" name="user" autofocus>
         </div>
         <div class="form-group">
            <input class="form-control" placeholder="Senha" name="pass" type="password" value="">
         </div>
         <label>
         <a href="index.php?esqueci=1" style="color:white">Esqueceu a senha ?</a>
         </label>
         <!-- Change this to a button or input when using this as a form -->
         <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
      </fieldset>
   </form>
</body>

<?php

session_start();

print_r($_SESSION);

if(!empty($_POST) or !empty($_SESSION)) {

$logar = new Login();
$check = $logar->logando();

if($check or !empty($_SESSION['nome']))
   header('location:'.base_url('index.php/home'));
else
   echo 'Dados incorretos';

}


?>

