<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>

<body>

    <header class="topo"><img src="../assets/Logo.png" alt="Logo" class="logo">
        <a href="../index.html">
            <button class="voltar">Voltar</button>
        </a>
    </header>
    
<br> <br><br>
    <div class="container">
<form id="formSalvar" action='salvar.php' method="POST" onsubmit>
    <label class="titulo">Nome do produto</label> <br>  
            <input class="entrada" name='Nome_Produto' id="Nome_Produto" placeholder="Nome do produto" required> <br>
    <label class="titulo">Preço</label> <br>
            <input class="entrada" name='Preco_Produto' id="Preco_Produto" placeholder="Preço" required>  <br>
    <label class="titulo">Descrição</label> <br>
            <input class="entrada"  name='Descricao_Produto' id="Descricao_Produto" placeholder="Coloque a descrição do produto"  required> <br>
    <label class="titulo">Foto do produto</label>
             <input class = "imagem" type = "file" name = " Img_Produto"><br>

            <!-- Validação -->
            <input class="enviar" type=button id="btn" value="Enviar" onclick="fnValidar();">
    <input class="entrada" type="hidden" name="Id_Produto" id="Id_Produto" value="<?php echo $_POST["Id_Produto"]; ?>"><br>
        

<input class="enviar" type=button value="Enviar" onclick="fnValidar();">

<a href="resultadoConsulta.php">listar Produtos</a>
</form> 
</body>
</html>