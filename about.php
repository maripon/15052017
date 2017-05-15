<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre mi proyecto</h2>
<p>

Mis gustos son muy variados, pasando desde lo que más me gusta que es la ilustración, el deporte, e incluso la botánica y la jardinería.

Para esta web, me basé en mi gusto y preocupación por el deporte y la vida sana, ya que para mi es una parte esencial de la vida, tener un cuerpo sano y en buena condición. Por ello quise profundizar un poco en el ámbito más científico del tema, ya que siempre se ve desde un ámbito más práctico, y así poder demostrar con investigaciones, los beneficios de tener un cuerpo activo.
</p>

</section>
<?php include('pie.php');?>
