<html>
<head>
	<meta charset="UTF-8">
   <title>Usuarios Registrados</title>
   <style type="text/css">
body {
	width: 100%;
            height: 130vh;
            background: linear-gradient( to left ,rgba(1,1,1,0.1)20%,rgba(1,1,1,0.1)20%),url(rer.jpeg); 
            background-size:cover;
            background-repeat:no-repeat;
}
h2{
font-family:Arial;
font-size:25;
color: black;
font-weight:bold;
}
h1
{
	width: 1300px;
            height: 60px;
            background-color:#9AFF54;
			font-family:Arial;
			color:#640275;
            font-size: 40px;
            text-align:center;
            padding:10px 170px;}
b
{
	color:black;
font-size:35;
font-family:Arial;
font-weight:bold;
color: #640275
}
div
{
    padding: 5px;
margin-left:50px;
margin-right:50px;
font-weight:bold;
}
div.c1{
    border-color: black;
    border-width: 5px;
    border-style: solid;
background-color: black;
}
</style>
</head>
<body>
	
<H1><center>REGISTRO</center> </H1>
<?php
   include("sql.php");
   $link=Conectarse();
		if ($link==0)
		{
			echo "<H1>Error en apertura de bases de datos.</H1>";
			exit();
		}
	
	$result=mysql_query("select * from veterinaria",$link);
?>
   
   <!-- Escribimos título de las tablas -->
   <center>
   <TABLE BORDER=2 CELLSPACING=2 CELLPADDING=2 bordercolor=black font-size= 30 font-family=Arial font-weight=bold;>
	
    <TR>
		<TD><b>&nbsp;código mascota&nbsp;</b></TD>
		<TD><b>&nbsp;Tamaño&nbsp;</b></TD>
		<TD><b>&nbsp;Peso&nbsp;</b></TD>
		<TD><b>&nbsp;Raza&nbsp;</b></TD>
        <TD><b>&nbsp;Nombre Dueño&nbsp;</b></TD>
	    <TD><b>&nbsp;Dirección&nbsp;</b></TD>
	    <TD><b>&nbsp;Teléfono&nbsp;</b></TD>
		<TD><b>&nbsp;Edad&nbsp;</b></TD>
        </TR>

<?php
   //$row["ID"] NO ES LO MISMO QUE $row["id"] o que $row["Id"]
   while($row = mysql_fetch_array($result)) {
	  echo "<TR>";
	  echo "<TD>&nbsp;" . $row["cod_perro"] . "</TD>";
	  echo "<TD>&nbsp;" . $row["tamanio"] . "</TD>";
	  echo "<TD>&nbsp;" . $row["peso"] . "</TD>";
	  echo "<TD>&nbsp;" . $row["raza"] . "</TD>";
      echo "<TD>&nbsp;" . $row["nombre_propietario"] . "</TD>";
	  echo "<TD>&nbsp;" . $row["direccion"] . "</TD>";
	  echo "<TD>&nbsp;" . $row["telefono"] . "</TD>";
	  echo "<TD>&nbsp;" . $row["Edad"] . "</TD>";
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
	

<form action="./pagina_siguiente.php" method="POST">