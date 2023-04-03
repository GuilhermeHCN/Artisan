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
    $query = " INSERT INTO Produto
        ( Nome_Produto, Preco_Produto, Descricao_Produto)
    VALUES('".$_POST["Nome_Produto"]."', '".$_POST["Preco_Produto"]."', '".$_POST["Descricao_Produto"]."');";
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
