<html>
<body>
<div align="left">
<h1>Modificar informacion</h1>
<form method="post" action="../update">
<input type="hidden" name="id" value="<?=$update->id?>">
<table><tr>
<td align="left">Titulo</td><td> <input type="text" name="title" value="<?=$update->title ?>"></td>
</tr><tr>
<td align="right">Contenido</td><td><input type="text" name="content" value="<?=$update->content ?>">
</tr></table></br>
<input type="submit" value="Modificar"> <a href="../index"><input type="button" value="Regresar al Inicio"></a>
</table>
</form>
</div>
</body>
</html>
