<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?

$cond     =$_POST["cond"];
$dominio  =$_POST["dominio"];


if ($cond == "mod1"){
    
    $modo = "RewriteCond %{SERVER_PORT} 80 
RewriteRule ^(.*)$ https://www.$dominio.com.br/$1 [R,L] \n";
    
}else{
    
    $modo = "RewriteCond %{HTTP_HOST} ^$dominio.com.br 
RewriteRule ^ https://www.$dominio.com.br%{REQUEST_URI} [L,R=301] \n";
    
}


$fp1 = fopen(".htaccess", "a+");
 
$escreve1 = fwrite($fp1, "
# Wordpress permalink \n
<IfModule mod_rewrite.c>
RewriteEngine On \n

$modo
" );
 fclose($fp1);
?>

<br>
<br>
<div class="container">
<form action="gerador.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">url atual</label>
    <input name="atual" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: 'index.php'">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">url amigavel</label>
    <input name="amigavel" type="text" class="form-control" id="exampleInputPassword1" placeholder="ex: 'home'">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">novo</button>
</form>
    </div>
<br>
<div class="container">
<form action="corpo.php" method="POST">

<button type="submit" class="btn btn-success btn-lg btn-block">terminar</button>
    
</form>
</div>
<div class="container">
<br>
<h2> Como usar:</h2>
<h4>- Clique em "novo" para adicionar uma nova url;</h4>
<h4>- Clique em "terminar" para concluir a edição;</h4>    
<h4>- O ".htaccess" estará dentro da pasta desta aplicação;</h4>
<h4>- É preciso excluir o ".htaccess" que estiver dentro da pasta toda vez que for executar esta aplicação.</h4>
</div>
