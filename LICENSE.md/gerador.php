<?php

$atual =$_POST["atual"];
$amigavel =$_POST["amigavel"];


$fp = fopen(".htaccess", "a+");
 

$escreve = fwrite($fp, " RewriteRule ^$amigavel?$  $atual [NC,L] \n");
 
fclose($fp); 
?>

<script>

    window.history.back();

</script>