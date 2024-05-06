<html>
<head>
   <title>Base de datos</title>
   <style type="text/css">
body {height: 1024px;
    width: 1024px;
    margin-right: auto;
    margin-left: auto;
padding: 30px;
background-color:MediumSlateBlue;
}
h2{font-family:TimeRomans;
font-size:25;
color: blue}
h1
{color:#999;
text-align:center;
font-size:45;
font-family:Monotype corsiva;
color: skyblue}
b
{color:#999;
font-size:35;
font-family:Monotype corsiva;
color: indigo}
div
{
    padding: 5px;
margin-left:50px;
margin-right:50px;

}
div.c1{
    border-color: Fuchsia;
    border-width: 5px;
    border-style: solid;
background-color: Violet;
}
</style>
</head>
<body>
	
<H1><center>My Android</center> </H1>
<?php
   include("sql.php");
   $link=Conectarse();
		if ($link==0)
		{
			echo "<H1>Error en apertura de bases de datos.</H1>";
			exit();
		}
	
	$result=mysql_query("select * from registro",$link);
?>
   
   <!-- Escribimos título de las tablas -->
   <center>
   <TABLE BORDER=5 CELLSPACING=1 CELLPADDING=1 bordercolor=darkblue>
    <TR>
		<TD><b>&nbsp;cod_cliente&nbsp;</b></TD>
		<TD><b>&nbsp;nombre&nbsp;</b></TD>
		<TD><b>&nbsp;apellido&nbsp;</b></TD>
		<TD><b>&nbsp;numero celular&nbsp;</b></TD>
    <TD><b>&nbsp;tipo celular&nbsp;</b></TD>
        </TR>

<?php
   //$row["ID"] NO ES LO MISMO QUE $row["id"] o que $row["Id"]
   while($row = mysql_fetch_array($result)) {
	  echo "<TR>";
	  echo "<TD>&nbsp;" . $row["cod_cliente"] . "</TD>";
	  echo "<TD>&nbsp;" . $row["nombre"] . "</TD>";
	  echo "<TD>&nbsp;" . $row["apellido"] . "</TD>";
	  echo "<TD>&nbsp;" . $row["numero_celular"] . "</TD>";
    echo "<TD>&nbsp;" . $row["tipo_celular"] . "</TD>";
	  echo "</TR>";
   }
   
   //liberamos memoria que ocupa la consulta...
   mysql_free_result($result);
   
   //cerramos la conexión con el motor de BD
   mysql_close($link);
?>

</table>
<center>

	<br>
	<br>
	
	<h2><a href="abm.php?accion=alta">Agregar</a> <br></h2>
	

<form action="./index.php" method="POST">