<HTML>
<HEAD>
    <TITLE>Bolão F1 Pederneiras 2024</TITLE>
</HEAD>
<BODY>
    <FORM ACTION="enviapalpsql2.php" method="post">
        <pre>
            <font face="calibri" size="3" color="#000000">
                <h4><p align='left'><b>CAMPEONATO MUNDIAL DE FÓRMULA 1 - GRANDE PRÊMIO - ARÁBIA SAUDITA<br><BR>CIRCUITO JEDDAH<br></b></p></h4>
                <input type="hidden" name="race" value="JEDDAH">
                <br><b>Selecione o participante:</b> <select size="1" name="combo_box_part">
                    <option value='33'>Escolha um participante</option>
                    <option value='1'>Tchowzin</option>
                    <option value='2'>Vinera</option>
                    <option value='3'>Lopes</option>
                    <option value='4'>Tody</option>
                    <option value='5'>Biro</option>
                    <option value='6'>Tulhão</option>
                </select>
                <br><br><b>Digite o codigo cadastrado : <input type="text" name="code" size="16">
                </b><br><br><br><b>Selecione a POLE POSITION: </b><br><br>(5 pontos) 01) <select size="1" name="combo_box_pole">
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

                    // Consulta SQL para obter os pilotos
                    $sql_pilotos = "SELECT name FROM bolao_drivers";
                    $result_pilotos = $conn->query($sql_pilotos);

                    // Preenche o select com os pilotos
                    if ($result_pilotos->num_rows > 0) {
                        while($row = $result_pilotos->fetch_assoc()) {
                            echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                        }
                    } else {
                        echo "<option value='0'>Nenhum piloto encontrado</option>";
                    }
                    ?>
                </select>
                <br><br><br><b>Selecione o pódio:</b><br><br>(10 pontos) 01) <select size="1" name="combo_box_first">
                    <?php
                    // Verifica a conexão
                    if ($conn->connect_error) {
                        die("Conexão falhou: " . $conn->connect_error);
                    }

                    // Consulta SQL para obter os pilotos
                    $sql_pilotos = "SELECT name FROM bolao_drivers";
                    $result_pilotos = $conn->query($sql_pilotos);

                    // Preenche o select com os pilotos
                    if ($result_pilotos->num_rows > 0) {
                        while($row = $result_pilotos->fetch_assoc()) {
                            echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                        }
                    } else {
                        echo "<option value='0'>Nenhum piloto encontrado</option>";
                    }
                    ?>
                </select>
                <BR><br>(8 pontos) 02) <select size="1" name="combo_box_second">
                <?php
                    // Verifica a conexão
                    if ($conn->connect_error) {
                        die("Conexão falhou: " . $conn->connect_error);
                    }

                    // Consulta SQL para obter os pilotos
                    $sql_pilotos = "SELECT name FROM bolao_drivers";
                    $result_pilotos = $conn->query($sql_pilotos);

                    // Preenche o select com os pilotos
                    if ($result_pilotos->num_rows > 0) {
                        while($row = $result_pilotos->fetch_assoc()) {
                            echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                        }
                    } else {
                        echo "<option value='0'>Nenhum piloto encontrado</option>";
                    }
                    ?>
                </select>
                <BR> <br>(6 pontos) 03) <select size="1" name="combo_box_third">
                <?php
                    // Verifica a conexão
                    if ($conn->connect_error) {
                        die("Conexão falhou: " . $conn->connect_error);
                    }

                    // Consulta SQL para obter os pilotos
                    $sql_pilotos = "SELECT name FROM bolao_drivers";
                    $result_pilotos = $conn->query($sql_pilotos);

                    // Preenche o select com os pilotos
                    if ($result_pilotos->num_rows > 0) {
                        while($row = $result_pilotos->fetch_assoc()) {
                            echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                        }
                    } else {
                        echo "<option value='0'>Nenhum piloto encontrado</option>";
                    }
                    ?>
                </select>
                <BR>
            </font>
        </pre>
        <p align="center">
            <INPUT TYPE="submit" VALUE="Confirma o envio"> 
            <INPUT TYPE="reset" VALUE="Cancela">
        </p>
        <hr color="#FFFF99">
        <h4>
            <p align="center">
                <font face="calibri"><a style="color: #000000" href="../../index.php">Voltar a página principal</a></font>
            </p>
        </h4>
    </FORM>
</BODY>
<p align='center'>
    <font face="calibri" size="2"><a style="color: #000000">tchowzin Copyright all rights reserved© 2024.</a>
</p>
</HTML>
