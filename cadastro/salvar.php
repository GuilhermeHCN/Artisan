<?php
//dados do banco
    $servername = "localhost";
    $database = "u553234134_Artisan";
    $username = "u553234134_Gizaac";
    $password = "Gizaac12343124";

// Criação de conexão
    $connection = mysqli_connect($servername, $username, $password, $database);

// Checagem de conexão
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
//Comandos de transferencia(PHP - SQL)
    $query = " INSERT INTO Cliente
        ( Email_Cliente, Nome_Cliente, Endereco_Cliente, Telefone_Cliente, Cpf_Cliente, Data_Nascimento_Cliente, Senha_Cliente)
    VALUES('".$_POST["Email_Cliente"]."', '".$_POST["Nome_Cliente"]."', '".$_POST["Endereco_Cliente"]."','".$_POST["Telefone_Cliente"]."', 
        '".$_POST["Cpf_Cliente"]."', '".$_POST["Data_Nascimento_Cliente"]."','".$_POST["Senha_Cliente"]."');";

//Confirmação do salvamento
    echo $query;
    mysqli_query($connection,$query) or die ('Erro ao salvar..');
    echo "Salvo com sucesso";

        $query = " select Id_Cliente, Nome_Cliente, Endereco_Cliente, Telefone_Cliente, CPF_Cliente, Data_Nascimento_Cliente, Email_Cliente, Senha_Cliente from 
        Cliente Where Email_Cliente = '".$_POST["Email_Cliente"]."' and Senha_Cliente = '".$_POST["Senha_Cliente"]."'" ;
        $resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');
        $_SESSION["logado"]=  "nao";
        while ($rowp = mysqli_fetch_array($resp)) {	        
            $_SESSION["Id_Cliente"]=  $rowp["Id_Cliente"];   
        };

        ?>


    <script>
        window.location='../listar_usuarios/listarUsuarios.php';
    </script>