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
    $query = " INSERT INTO usuario
        (email_usuario , nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, senha_usuario)
    VALUES('".$_POST["email_usuario"]."', '".$_POST["nome_usuario"]."', '".$_POST["endereco_usuario"]."','".$_POST["telefone_usuario"]."', 
        '".$_POST["cpf_usuario"]."', '".$_POST["data_nascimento_usuario"]."',('".$_POST["senhaCriptografada"]."'));";
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

        $query = " select id_usuario, nome_usuario, endereco_usuario, telefone_usuario, cpf_usuario, data_nascimento_usuario, email_usuario, senha_usuario from 
        usuario Where email_usuario = '".$_POST["email_usuario"]."' and senha_usuario = '".$_POST["senha_usuario"]."'" ;
        $resp= mysqli_query($connection,$query) or die ('Erro ao consultar..');
        $_SESSION["logado"]=  "nao";
        while ($rowp = mysqli_fetch_array($resp)) {	        
            $_SESSION["id_usuario"]=  $rowp["id_usuario"];   
        };

        ?>


    <script>
        window.location='../listar_usuarios/listarUsuarios.php';
    </script>