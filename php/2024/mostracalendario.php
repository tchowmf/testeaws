<html>
<head>
<title>Bolão F1 - Calendário 2024</title>
</head>

<body>

<div align="center">
<center>
<table border="0" >
  <tr>
    <td>

<body bgcolor="#FFFFFF" text="#000000">


    </td>
  </tr>
</table>
</center>
</div>


<p align="center"> <img src="../../Logo_30_anos.jpg" width="281" height="149" border="0"> </p>

<HR SIZE="1" COLOR="#FFFFFF" style="color: #FFFF99">

<p align='center'><font face="calibri" size="4"><b>CAMPEONATO MUNDIAL DE FÓRMULA 1 - CALENDÁRIO DE PROVAS - 2024 </b></p>
<table width="70%" border=1 align="center">
   
   	<tr>
		<td width="6%" border="0" height="25" align="center" > <font face="calibri"><b> Nº</b></font> </td>
		<td width="14%" border="0" height="25" align="center"> <font face="calibri"><b> Data </b></font> </td>
		<td width="12%" border="0" height="25" align="center"> <font face="calibri"><b> Hora </b></font> </td>
		<td width="22%" border="0" height="25" align="center"> <font face="calibri"><b> País/cidade </b></font> </td>
		<td width="36%" border="0" height="25" align="center" > <font face="calibri"><b> Cidade/Circuito </b></font> </td>
		<td width="10%" border="0" height="25" align="center" > <font face="calibri"><b> Voltas </b></font> </td>
	</tr>

<?php
// Conexão com o banco de dados
$servername = "o677vxfi8ok6exrd.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "dus6hc2j9924pph1";
$password = "dlehpqbwph9imq4b";
$dbname = "wviodp4jxv0bpshs";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT id, DATE_FORMAT(date, '%d/%m/%Y') as formatted_date, time, country, city, laps FROM bolao_races";

$result = $conn->query($sql);

// Se houver resultados, exibe-os na tabela
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["formatted_date"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "<td>" . $row["country"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "<td>" . $row["laps"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>

</table>

<h4>
    <p align="center">
        <font face="calibri"><a style="color: #000000" href="../../index.php">Voltar a página principal</a></font>
    </p>
</h4>
<p align='center'><font face="calibri" size="2">tchowzin Copyright all rights reserved© 2024.</p>

</body>
</html>
