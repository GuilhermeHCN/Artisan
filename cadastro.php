<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  media="(min-width: 601px)" href="cadastro.css">
    <link rel="stylesheet" media="(max-width: 600px)" href="cadastromedia.css" />
    <title>Cadastro</title>
</head>

<body>

    <header class="topo">
        <a href="..http://artisan.gzaac.com.br">
            <img src="../assets/Logo.png" alt="Logo" class="logo">
        </a>
    </header>
    
<br> <br><br>
    <div class="container">
    <form id="formSalvar" action='salvaradmin.php' method="POST" enctype = "multipart/form-data" onsubmit>
            <!-- Campo nome -->
            <label class="titulo">Nome</label> <br>  
                <input class="entrada" name='Nome_Admin' id="Nome_Admin" placeholder="Nome" required> <br>
            <!-- Campo Endereço -->
            <label class="titulo">Endereço</label> <br>
                <input class="entrada" name='Endereco_Admin' id="Endereco_Admin" placeholder="Endereço" required>  <br>
            <!-- Campo Telefone -->
            <label class="titulo">Telefone</label> <br>
                <input class="entrada" type="tel" maxlength="13"name='Telefone_Admin' id="Telefone_Admin" placeholder="(00)90000-0000"  onkeydown = "mascara_telefone()" required> <br>
            <!-- Campo CPF -->
            <label class="titulo">CPF</label> <br>
                <input class="entrada"  maxlength="14"name='Cpf_Admin' id="CPF_Admin" placeholder="000.000.000-00"  onkeydown = "mascara_cpf()" required > <br>
            <!-- Campo Data de nascimento -->
            <label class="titulo">Data de Nascimento</label> <br>
                <input class="entrada" min="1900-01-01" max="2100-12-31" type="date" name='Data_Nascimento_Admin' id="Data_Admin" placeholder="DD/MM/AAAA" required> <br>
            <!-- Campo Email -->
            <label class="titulo">Email</label> <br>
                <input class="entrada" type="email" max="70" name='Email_Admin' id="email_Admin" placeholder="Email" required> <br>
            <!-- Campo senha -->
            <label class="titulo">Senha</label>
                <input class="entrada" type="password" min="5" max="10" name="Senha_Admin" id="senha_Admin" placeholder="Senha" required><br>
            <label class="titulo">Foto do perfil</label>
                        <input class = "imagem" type = "file" name = " Img_Admin"><br>

            <!-- Validação -->
            <input class="enviar" type=button id="btn" value="Enviar" onclick="fnValidar();">
        </form> 
</body>
</html>