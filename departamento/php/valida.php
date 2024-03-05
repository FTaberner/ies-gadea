<html>
 <head>
  <title>FORMULARIOS - LMSGI</title>
 </head>
 <body>
 
<?php 
print "<pre>"; print_r($_REQUEST); print "</pre>\n";
echo "<p> ----------------------------- </p>"; 
echo "<p> ----------------------------- </p>";
print "<p>Su nombre es $_REQUEST[nombre]</p>\n";
print "<p>apellidos: $_REQUEST[apellido]</p>\n";
echo "<p> ----------------------------- </p>";
print "<p>Correo:  $_REQUEST[correo]</p>\n";
print "<p>Dni: $_REQUEST[dni]</p>\n";
echo "<p> ----------------------------- </p>";
print "<p>Genero: $_REQUEST[genero]</p>\n";
print "<p>Estudios: $_REQUEST[estudios]</p>\n";
echo "<p> ----------------------------- </p>";

print "<p>Aficiones: $_REQUEST[aficion]</p>\n";
 
print "<p>Ficheros: $_REQUEST[fichero1]</p>\n";
print "<p>Ficheros: $_REQUEST[fichero2]</p>\n";
echo "<p> ----------------------------- </p>";
 
?>


 <p>Comprueba tus datos antes de enviarlos, si no estÃƒÂ¡n bien vuelve a escribirlos.</p>
 </body>
</html>