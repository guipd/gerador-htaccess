<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<br>
<div class="container">
<h1 style="text-align: center;">Gerador de .htaccess</h1>
</div>
<br>
<div class="container">
<h6># MODELO 1 <br>
	RewriteCond %{SERVER_PORT} 80 <br>
	RewriteRule ^(.*)$ https://www.dominio.com.br/$1 [R,L]</h6>
    <br>
<h6># MODELO 2<br>
	RewriteCond %{HTTP_HOST} ^dominio.com.br<br>
	RewriteRule ^ https://www.dominio.com.br%{REQUEST_URI} [L,R=301]</h6>
    <br>
</div>
<div class="container">
<form action="formulario.php" method="POST">
<div class="form-group">
    <label for="exampleFormControlSelect2">Escolha um dos modelos:</label>
    <select name="cond" multiple class="form-control" id="exampleFormControlSelect2">
      <option name="mod1" >modelo 1</option>
      <option name="mod2" >modelo 2</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Dominio:</label>
    <input name="dominio" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: 'meusite'">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">proximo</button>
</form>
    </div>