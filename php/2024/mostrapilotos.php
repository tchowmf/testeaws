<html>
<head>
<TITLE>Bolão F1 - Pilotos</TITLE>
</head>

<BODY>

<div align="center">
<center>
<table border="0" width="100%">
  <tr>
    <td>

<body bgcolor="#FFFFFF" text="#000000">

<p align="center"> <img src="../../Logo_30_anos.jpg" width="281" height="149" border="0"> </p>

<HR SIZE="1" COLOR="#FFFFFF" style="color: #FFFF99">

    </td>
  </tr>
</table>
</center>
</div>
<p align='center'><font face="calibri"><b>CAMPEONATO MUNDIAL DE FORMULA 1 - PILOTOS E EQUIPES 2024</b></p>
 <table width="60%" border=1 align="center">
  <tr>
    <td width="5%" border="0" height="25" align="center"> <font face="calibri"> <b>Nº</b></td>
    <td width="20%" border="0" height="25" align="center"> <font face="calibri"> <b>Piloto</b></td>
    <td width="20%" border="0" height="25" align="center"> <font face="calibri"> <b>Equipe</b></td>
    <td width="20%" border="0" height="25" align="center"> <font face="calibri"> <b>País</b></td>
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
$sql = "SELECT number, name, team, country FROM bolao_drivers";

$result = $conn->query($sql);

// Se houver resultados, exibe-os na tabela
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["number"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["team"] . "</td>";
        echo "<td>" . $row["country"] . "</td>";
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
<p align='center'><font face="calibri" size="2">tchowzin Copyright all rights reserved© 2024</p>

</BODY>
</HTML>
