<?php

echo "<h2>Listado 10 comentarios</h2><table>";
foreach ($data as $d)
{
  echo '<tr><td>';
  echo $d->title." ".$d->content;
  echo '</td><td><a href="byid/'.$d->id.'"><input type="button" value="Editar"></a></td></tr>';
}
echo '<tr><td></td><td><a href="./">Volver</a></td></tr>';
echo "</table>";
?>
