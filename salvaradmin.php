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
    $query = " INSERT INTO Admin
        ( Email_Admin, Nome_Admin, Endereco_Admin, Telefone_Admin, Cpf_Admin, Data_Nascimento_Admin, Senha_Admin)
    VALUES('".$_POST["Email_Admin"]."', '".$_POST["Nome_Admin"]."', '".$_POST["Endereco_Admin"]."','".$_POST["Telefone_Admin"]."', 
        '".$_POST["Cpf_Admin"]."', '".$_POST["Data_Nascimento_Admin"]."','".$_POST["Senha_Admin"]."');";
    /*  namespace Verot\Upload;
    $foo = new Upload($_FILES['Img_Cliente']); 
        if ($foo->uploaded) {
        // save uploaded image with no changes
        $foo->process('/imagem_cliente');
        if ($foo->processed) {
            echo 'Imagem original copiada';
        } else {
            echo 'error : ' . $foo->error;
        }
        // save uploaded image with a new name
        $foo->file_new_name_body = 'foo';
        $foo->process('/imagens');
        if ($foo->processed) {
            echo 'image renamed "foo" copied';
        } else {
            echo 'error : ' . $foo->error;
        }   
        // save uploaded image with a new name

        $foo->file_new_name_body = 'image_resized';
        $foo->image_resize = true;
        $foo->image_convert = 'jpg';
        $foo->image_x = 56;
        $foo->image_y = 56;
        $foo->image_ratio_y = true;
        $foo->process('/imagem_cliente');
        if ($foo->processed) {
            echo 'image renamed, resized x=56, resized y=56
                and converted to jpg';
            $foo->clean();
        } else {
            echo 'error : ' . $foo->error;
        } 
    }  */

//Confirmação do salvamento
    echo $query;
    mysqli_query($connection,$query) or die ('Erro ao salvar..');
    echo "Salvo com sucesso";

        $query = " select Id_Admin, Nome_Admin, Endereco_Admin, Telefone_Admin, CPF_Admin, Data_Nascimento_Admin, Email_Admin, Senha_Admin from 
        Admin Where Email_Admin = '".$_POST["Email_Admin"]."' and Senha_Admin = '".$_POST["Senha_Admin"]."'" ;
        $resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');
        $_SESSION["logado"]=  "nao";
        while ($rowp = mysqli_fetch_array($resp)) {	        
            $_SESSION["Id_Admin"]=  $rowp["Id_Admin"];   
        };

        ?>


    <script>
        window.location='../listar_usuarios/listarUsuarios.php';
    </script>