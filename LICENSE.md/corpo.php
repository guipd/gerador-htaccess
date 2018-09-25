<?php

$fp2 = fopen(".htaccess", "a+");
 
$escreve2 = fwrite($fp2, '
# 1 ANO
<FilesMatch "\.(ico|pdf|flv)$">
Header set Cache-Control "max-age=29030400, public"
</FilesMatch>
# 1 SEMANA
<FilesMatch "\.(jpg|jpeg|png|gif|swf)$">
Header set Cache-Control "max-age=604800, public"
</FilesMatch>
# 1 ANO
<FilesMatch "\.(xml|txt|css|js)$">
Header set Cache-Control "max-age=29030400, proxy-revalidate"
</FilesMatch>
# 1 MINUTO
<FilesMatch "\.(html|htm|php)$">
Header set Cache-Control "max-age=60, private, proxy-revalidate"
</FilesMatch>

<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresDefault "access plus 1 year"
</IfModule>

<IfModule mod_headers.c>
    <FilesMatch "\.(bmp|css|flv|gif|ico|jpg|jpeg|js|pdf|png|svg|swf|tif|tiff)$">
        Header set Last-Modified "Mon, 31 Aug 2009 00:00:00 GMT"
    </FilesMatch>
</IfModule>

<FilesMatch "\.(ico|jpg|jpeg|png|gif|js|css|swf|svg|pdf|flv|mp3)$">
<IfModule mod_expires.c>
ExpiresActive on
ExpiresDefault "access plus 1 month 2 days 3 hours"
 Header set Cache-Control "public"
</IfModule>
</FilesMatch>

# compress text, html, javascript, css, xml:
AddOutputFilterByType DEFLATE text/plain
AddOutputFilterByType DEFLATE text/html
AddOutputFilterByType DEFLATE text/xml
AddOutputFilterByType DEFLATE text/css
AddOutputFilterByType DEFLATE application/xml
AddOutputFilterByType DEFLATE application/xhtml+xml
AddOutputFilterByType DEFLATE application/rss+xml
AddOutputFilterByType DEFLATE application/javascript
AddOutputFilterByType DEFLATE application/x-javascript

AddType x-font/otf .otf
AddType x-font/ttf .ttf
AddType x-font/eot .eot
AddType x-font/woff .woff
AddType image/x-icon .ico
AddType image/png .png
');
 
 fclose($fp2);
?>

<script>

    alert('.htaccess pronto!');
    window.location = 'http://localhost/gerador/';
</script>
